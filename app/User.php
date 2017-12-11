<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 
        'email', 
        'password', 
        'api_token', 
        'photo', 
        'address', 
        'gender', 
        'phone', 
        'role', 
        'api_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token', 
        'api_token', 
        'photo', 
        'address', 
        'gender', 
        'phone', 
        'api_token', 
    ];

    public static function initialize(){
      return [
        'photo'   => '',
        'address' => '',
        'gender'  => 0,
        'phone'   => ''
      ];
    }
}
