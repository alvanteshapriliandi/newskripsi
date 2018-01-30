<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;

class ProfileController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:api');
  }

  public function changePhone(Request $request) 
  {

    $user = DB::table('users')->where('id', '=', Auth::user()->id);
    $user->update([
      'phone' => $request->phone
    ]);
    return response()->json(200);
  }

  public function changeKelamin (Request $request) {
    $user = DB::table('users')->where('id', '=', Auth::user()->id);
    $user->update([
      'gender' => $request->kelamin
    ]);
    return response()->json(200);
  }


}
