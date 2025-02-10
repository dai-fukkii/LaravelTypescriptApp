<?php namespace App\Http\Controllers\Auth;

class LoginController
{
    public function getLoginPage(){
        return view('auth.login');
    }
}