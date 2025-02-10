<?php namespace App\Http\Controllers\Auth;

class SignUpController 
{
    public function getSignupPage(){
        return view('auth.signup');
    }
}