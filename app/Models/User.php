<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 */
class User extends Model
{
    protected $table = 'users';

    public $timestamps = true;

    protected $fillable = [
        'username',
        'password',
        'avata',
        'firstname',
        'lastname',
        'address',
        'idcard',
        'email',
        'sex',
        'admin',
        'remember_token'
    ];

    protected $guarded = [];

    protected function UserLogin($username ,$password){
        $user = $this::where('username','=',$username)
                    ->where('password','=',$password)->get();
        return $user;
    }
}