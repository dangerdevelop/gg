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
        $referer = request()->headers->get('referer');
        $fullUrl = request()->fullUrl();
        $results = $forbidden->filter(function ($ban) use ($referer, $fullUrl) {
            if (str_contains($referer, $ban->value) !== false)
                return $ban;
            elseif (str_contains($fullUrl, $ban->value) !== false)
                return $ban;

            return null;
        });
        if ($results->isEmpty()) {
            $redirectPath = AdminOptions::firstWhere('key', 'yasak_yonlendirme_link');
            $match = match ($redirectPath->value) {
                'home' => Redirect::route('root.index'),
                '404' => abort(404),
                default => abort(404),
            };
            return $match;
        }
        return $next($ip);
    }
}
