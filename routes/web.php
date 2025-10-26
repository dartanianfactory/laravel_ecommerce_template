<?php

use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\base\SiteController;
use App\Http\Controllers\User\CabinetController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\LogoutController;
use App\Http\Controllers\User\RegisterController;
use App\Http\Middleware\Base\AccessMiddleware;
use App\Http\Middleware\Base\LoggerMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware(LoggerMiddleware::class)->group(function () {
    //Общие роуты
    Route::controller(SiteController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/pages/contacts', 'contacts');
        Route::get('/pages/offert', 'offert');
        Route::get('/pages/political', 'political');
    });

    //Роуты чисто для гостя
    Route::middleware('guest')->group(function () {
        Route::post('/user/actions/login', LoginController::class)->name('user.login.action');
        Route::post('/user/actions/register',  RegisterController::class)->name('user.register.action');
    });

    //Роуты для пользователя
    Route::middleware('auth')->group(function () {
        Route::get('/user/cabinet', [CabinetController::class, 'index'])->name('user.personal.pages');
        Route::get('/user/actions/logout', LogoutController::class)->name('user.logout.action');
    });

    //Админка
    Route::middleware(AccessMiddleware::class)->group(function (){
        Route::get('/sweet_panel/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/sweet_panel/users', [DashboardController::class, 'users'])->name('admin.users');
        Route::get('/sweet_panel/settings', [DashboardController::class, 'settings'])->name('admin.settings');
        Route::get('/sweet_panel/store', [DashboardController::class, 'store'])->name('admin.store');
        Route::get('/sweet_panel/integrations', [DashboardController::class, 'integrations'])->name('admin.integrations');
    });
});
