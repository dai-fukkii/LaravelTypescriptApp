<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'getWelcomePage']);

Route::group(['prefix' => 'auth'], function () {
    Route::get('/signup', [App\Http\Controllers\Auth\SignUpController::class, 'getSignUpPage'])->name('signup');
    Route::post('/signup', [App\Http\Controllers\Auth\SignUpController::class, 'postSignUp']);
    Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'getLoginPage'])->name('login');
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'postLogin']);
});
