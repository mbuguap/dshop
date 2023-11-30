<?php

use App\Http\Controllers\Admin\Auth\AdminLoginController;
use Illuminate\Support\Facades\Route;



Route::group(['as' => 'admin.', 'prefix' => 'admin'], function () {

    Route::controller(AdminLoginController::class)->group(function () {
        Route::get('login', 'adminLoginPage')->name('login');
        Route::post('login-store', 'storeLogin')->name('store.login');
        Route::get('logout', 'adminLogout')->name('logout');
    });


});
