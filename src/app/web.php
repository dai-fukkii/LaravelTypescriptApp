<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'getWelcomePage']);

Route::group(['prefix' => 'auth'], function () {
    Route::get('/signup', [App\Http\Controllers\Auth\SignUpController::class, 'getSignupPage'])->name('signup');
    Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'getLoginPage'])->name('login');
});
