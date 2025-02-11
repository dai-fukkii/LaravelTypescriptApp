<?php namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class LoginController
{
    public function getLoginPage(){
        return view('auth.login');
    }

    public function postLogin(Request $request){
        return view('auth.login');
    }
}