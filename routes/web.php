<?php

use App\Http\Controllers\AdminOptionsController;
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
    Route::get('/gg', [MainController::class, 'gg']);
    Route::get('/wp', [MainController::class, 'index'])->name('home.index');
    Route::post('loginmember', [MainController::class, 'saveData']);
    Route::get('/{slug}', [MainController::class, 'handleSlug']);
});

Route::middleware(['web', 'auth.check'])->prefix('hacininyeri')->group(function () {
    Route::get('/login', [LogController::class, 'login'])->name('admin.login');
    Route::get('/auth', [LogController::class, 'auth'])->name('admin.auth');
    Route::get('login-list', [LogController::class, 'listByLogin'])->name('admin.listlogin');
    Route::get('ip-list', [LogController::class, 'listByIP'])->name('admin.listip');
    Route::get('ip-action', [LogController::class, 'actionByIp'])->name('admin.actionByIp');
    Route::resource('options', AdminOptionsController::class);
    Route::resource('forbidden', ForbiddenController::class);
    Route::get('forbidden/delete/{forbidden}', [ForbiddenController::class, 'delete'])->name('forbidden.delete');
});