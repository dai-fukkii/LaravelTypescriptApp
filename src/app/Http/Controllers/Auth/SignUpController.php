<?php namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class SignUpController 
{
    public function getSignUpPage(){

        return view('auth.signup');
    }

    public function postSignUp(Request $request){

        return view('auth.signup');
    }
}