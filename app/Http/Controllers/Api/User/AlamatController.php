<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;

class AlamatController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function index() {
      $user = DB::table('users')->select('users.address', 'users.city_id', 'users.city_name', 'users.postal_code', 'users.province', 'users.type')->find(Auth::user()->id);
      return response()->json($user);
    }

    public function store(Request $request) {
      $user = DB::table('users')->find(Auth::user()->id);
      $data = DB::table('users')->where('id', '=', $user->id)->update([
        'city_id' => $request->city_id,
        'address' => $request->address,
        'city_name' => $request->city_name,
        'postal_code' => $request->postal_code,
        'users.province' => $request->province, 
        'users.type' => $request->type
      ]);

      $user = DB::table('users')->select('users.address', 'users.city_id', 'users.city_name', 'users.postal_code', 'users.province', 'users.type')->find(Auth::user()->id);
      return response()->json($user);
    }
}
