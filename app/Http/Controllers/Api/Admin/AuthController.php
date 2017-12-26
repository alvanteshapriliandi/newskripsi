<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;

class AuthController extends Controller
{

	public function __construct()
    {
        $this->middleware('guest');
    }

    protected function login(){
    	return view('admin.auth.login');
    }
    protected function adminLogin(Request $request)
    {
    	$input = $request->all();
        return $data;
    }
}
