<?php namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Repositories\Auth\LoginRepository as Repository;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function __construct(Repository $repository, Request $request)
    {
        parent::repositoryInit($repository);
        parent::requestInit($request);
    }

    /**
     * ログインページの表示
     * @return View
     */
    public function getLoginPage(){
        return view('auth.login');
    }

    /**
     * ログイン処理
     */
    public function postLogin(){
        $user_data = $this->getInput();
        $remember = $this->hasInpput('remember');

        $this->repository->postLogin($user_data['email'], $user_data['password'], $remember);
    }
}