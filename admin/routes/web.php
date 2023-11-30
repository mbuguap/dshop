<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\Auth\AdminLoginController;
use Illuminate\Support\Facades\Route;



Route::group(['as' => 'admin.', 'prefix' => 'admin'], function () {

    Route::controller(AdminLoginController::class)->group(function () {
        Route::get('login', 'adminLoginPage')->name('login');
        Route::post('login-store', 'storeLogin')->name('store.login');
        Route::get('logout', 'adminLogout')->name('logout');
    });

    Route::controller(AdminProfileController::class)->group(function () {
        Route::get('profile', 'index')->name('profile');
        Route::post('update-profile', 'update')->name('update.profile');
    });

    Route::controller(AdminDashboardController::class)->group(function () {
        Route::get('/', 'dashboard')->name('dashboard');
    });
});
