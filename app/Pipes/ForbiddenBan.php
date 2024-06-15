<?php

namespace App\Pipes;

use App\Models\AdminOptions;
use App\Models\ForbiddensModel;
use App\Models\IpListModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ForbiddenBan
{
    public function handle($ip, \Closure $next)
    {
        $forbidden = ForbiddensModel::all();
        $referer = request()->headers->get('referer', 'tir');
        if (!$referer)
            return $next($ip);


        $results = $forbidden->filter(function ($ban) use ($referer) {
            if (strpos($ban, $referer) !== false)
                return $ban;
        });
        if ($results->isNotEmpty()) {
            $response = $results->first();
            if ($response->redirect) {
                return redirect()->to($response->redirect)->send();
            } else {
                $redirectPath = AdminOptions::firstWhere('key', 'yasak_yonlendirme_link');
                return match ($redirectPath->value) {
                    'home' => redirect(route('root.index')),
                    '404' => abort(404),
                };
            }
        }
        return $next($ip);

    }
}
