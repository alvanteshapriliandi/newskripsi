<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Transformers\UserTransformer;
use Auth;

class UserController extends Controller
{
    public function getUsers(Request $request, User $user){
      $user = $user->all();

      return fractal()
        ->collection($user)
        ->transformWith(new UserTransformer)
        ->toArray();
    }

    public function getProfile(User $user){

      $user = $user->find(Auth::user()->id);

      return fractal()
        ->item($user)
        ->transformWith(new UserTransformer)
        ->toArray();
    }
}
