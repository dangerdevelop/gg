<?php

namespace App\Http\Controllers;

use App\DataTables\IpListModelDataTable;
use App\DataTables\LoginModelDataTable;
use App\Models\IpListModel;
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
            return redirect()->route('admin.listlogin');
        }
        return view('admin.login');
    }


    public function listByLogin(LoginModelDataTable $dataTable)
    {        
        return $dataTable->render('admin.datatable', ['title' => 'Login Logları']);
    }


    public function listByIp(IpListModelDataTable $dataTable)
    {
        $title = 'Ip Listesi';
        return $dataTable->render('admin.datatable', ['title' => $title]);
    }
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
            return redirect()->route('admin.listlogin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
