<?php namespace App\Http\Repositories;

use Illuminate\Support\Facades\Session;

abstract class Repository {

    public function sessionRegenerate()
    {
        Session::regenerate();
    }

    public function errorMessage($error_message)
    {
        session()->flash('error-message', $error_message);
    }

    public function successMessage($success_message)
    {
        session()->flash('success-message', $success_message);
    }

}
