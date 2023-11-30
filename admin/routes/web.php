<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\Auth\AdminForgotPasswordController;
use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Admin\EmailConfigurationController;
use App\Http\Controllers\Admin\EmailTemplateController;
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

    Route::controller(EmailConfigurationController::class)->group(function () {
        Route::get('email-configuration', 'index')->name('email.configuration');
        Route::post('update-email-configuration', 'update')->name('update.email.configuration');
    });

    Route::controller(EmailTemplateController::class)->group(function () {
        Route::get('email-template', 'index')->name('email.template');
        Route::get('add-email-template', 'create')->name('add.email.template');
        Route::post('store-email-template', 'store')->name('store.email.template');
        Route::get('edit-email-template/{id}', 'edit')->name('edit.email.template');
        Route::post('update-email-template/{id}', 'update')->name('update.email.template');
        Route::get('delete-email-template/{id}', 'delete')->name('delete.email.template');
    });

    Route::controller(AdminForgotPasswordController::class)->group(function () {
        Route::get('forget-password', 'forgetPassword')->name('forget.password');
        Route::post('send-forget-password', 'sendForgetEmail')->name('send.forget.password');
        Route::get('reset-password/{token}', 'resetPassword')->name('reset.password');
        Route::post('password-store/{token}', 'storeResetData')->name('store.reset.password');
    });

    
});
