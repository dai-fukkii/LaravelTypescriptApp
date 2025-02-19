<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'authority',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * メールアドレス(+パスワード)に該当するユーザ情報の取得
     *
     * @param string $email
     * @return Model
     */
    public static function getUser(string $email, string $password = null):?Model{
        if(!is_null($password)){
            return self::where('email', $email)
                ->where('password', $password)
                ->first();
        }
        return self::where('email', $email)->first();

    }

    /**
     * ユーザ情報の登録
     *
     * @param string $username
     * @param string $email
     * @param string $password
     * @param int $authority
     */
    public static function postSignUp(string $username, string $email, string $password, int $authority){
        self::create([
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'authority' => $authority
        ]);
    }
}
