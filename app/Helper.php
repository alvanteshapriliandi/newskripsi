<?php

namespace App;
use Auth;

class Helper
{
    public static function checkAdmin()
    {
      if(Auth::user()->role != 3){
          return 0;
      }
      return 1;
    }

    public static function checkUser()
    {
      if(Auth::user()->role != 1 && Auth::user()->role != 2){
          return 0;
      }
      return 1;
    }

    public static function checkFreelancer()
    {
      if(Auth::user()->role != 2){
          return 0;
      }
      return 1;
    }

    public static function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
