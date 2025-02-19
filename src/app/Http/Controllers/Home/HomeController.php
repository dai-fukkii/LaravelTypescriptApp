<?php namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class HomeController extends Controller 
{
    /**
     * ホームページの表示
     * @return View
     */
    public function getHome(){
        return view('home.home');
    }
}