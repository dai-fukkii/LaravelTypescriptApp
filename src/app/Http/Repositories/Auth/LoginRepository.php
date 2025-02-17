<?php namespace App\Http\Repositories\Auth;

use App\Http\Repositories\Repository;
use Illuminate\Support\Facades\Auth;

class LoginRepository extends Repository
{
    /**
     * ログイン処理
     * @param string $email
     * @param string $password
     * @param bool $remember
     * @return View
     */
    public function postLogin(string $email, string $password, bool $remember)
    {
        // ログイン情報に合致するユーザ情報を取得
        if(Auth::attempt(['email' => $email, 'password' => $password], $remember)){
            $this->sessionRegenerate();
            return redirect()->intended('home');
        }
        
        $this->errorMessage('メールアドレスまたはパスワードが間違っています');
        return redirect()->back();

    }
}