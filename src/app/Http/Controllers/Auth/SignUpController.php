<?php namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Repositories\Auth\SignUpRepository as Repository;
use App\Http\Controllers\Controller;

class SignUpController extends Controller
{

    public function __construct(Repository $repository, Request $request)
    {
        parent::repositoryInit($repository);
        parent::requestInit($request);
    }

    /**
     * サインアップページの表示
     * @return View
     */
    public function getSignUpPage():View{

        return view('auth.signup');
    }

    /**
     * サインアップ処理
     * @param Request $request
     * @return View
     */
    public function postSignUp():View{
        $user_data = $this->getInput();
        $this->repository->postSignUp($user_data);

        return view('auth.signup');
    }
}
