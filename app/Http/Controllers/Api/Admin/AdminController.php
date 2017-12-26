<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Category;
use App\Subcategory;
use App\Product;
use Auth;
use App\Helper;

class AdminController extends Controller
{
	public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index(){
			if(!Helper::checkAdmin()){return view('error.403');}
			return view('admin.home');
    }
}
