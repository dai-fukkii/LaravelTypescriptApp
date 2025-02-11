<?php namespace App\Http\Repositories\Auth;

use App\Models\User as Model;
use App\Http\Repositories\Repository;

class SignUpRepository extends Repository{

    /**
     * サインアップ処理
     * @param array $user_data
     */
    public function postSignUp(array $user_data){

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
            $this->errorMessage('既に登録されているメールアドレスです');
            return ;
        }

        // ユーザ情報の登録
        try{
            Model::postSignUp($user_data['username'], $user_data['email'], $user_data['password'], $user_data['authority']);
            $this->successMessage('登録が完了しました');
        }catch(\Exception $e){
            $this->errorMessage('登録に失敗しました');
            return ;
        }
    } 

}