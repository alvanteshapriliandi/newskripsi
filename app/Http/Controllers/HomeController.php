<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return Helper::checkUser(); 
      if(!Helper::checkUser()){return view('error.403');}
      return view('user.home');
    }
}
