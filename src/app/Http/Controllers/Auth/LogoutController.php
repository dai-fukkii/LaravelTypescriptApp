<?php namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class LogoutController extends Controller {

    /**
     * ログアウト処理
     * @return View
     */
    public function getLogoutPage():View{

        Auth::logout();
    
        Session::invalidate();
        Session::regenerateToken();

        return view('auth.logout');
    }
}