<?php namespace App\Http\Repositories\Auth;

use App\Models\User as Model;

class SignUpRepository {

    /**
     * サインアップ処理
     * @param array $user_data
     */
    public function postSignUp(array $user_data){

        // セッションメッセージの破棄
        session()->forget('error-message');
        session()->forget('success-message');

        // ユーザ情報がない場合は管理者権限付与
        $registered_data = Model::All();
        if(count($registered_data) == 0){
            $user_data['authority'] = 1;
        }else{
            $user_data['authority'] = 0;
        }

        // 登録されたメールアドレスの場合エラー
        $duplicate_user = Model::getUser($user_data['email']);
        if(!is_null($duplicate_user)){
            session()->flash('error-message', '既に登録されているメールアドレスです');
            return ;
        }

        // ユーザ情報の登録
        try{
            Model::postSignUp($user_data['username'], $user_data['email'], $user_data['password'], $user_data['authority']);
        }catch(\Exception $e){
            session()->flash('error-message', '登録に失敗しました');
            return ;
        }

        session()->flash('success-message', '登録が完了しました');
    } 

}