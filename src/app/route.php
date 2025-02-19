<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'getWelcomePage'])->name('get_welcome');

Route::group(['prefix' => 'auth'], function () {
    Route::get('/signup', [App\Http\Controllers\Auth\SignUpController::class, 'getSignUpPage'])->name('get_signup');
    Route::post('/signup', [App\Http\Controllers\Auth\SignUpController::class, 'postSignUp'])->name('post_signup');
    Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'getLoginPage'])->name('get_login');
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'postLogin'])->name('post_login');
    Route::get('/logout', [App\Http\Controllers\Auth\LogoutController::class, 'getLogoutPage'])->name('get_logout');
});

Route::group(['prefix' => 'home'], function () {
    Route::get('/index', [App\Http\Controllers\Home\HomeController::class, 'getHome'])->name('get_home');
});
