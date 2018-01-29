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
		$user = DB::select('SELECT COUNT(u.id) total FROM users u where u.role=1'); 
		$freelance = DB::select('SELECT COUNT(u.id) total FROM users u where u.role=2');
		$product = DB::select('SELECT COUNT(p.id) total FROM products p');
		return view('admin.home')->with(['user'=>$user,'freelance'=>$freelance, 'product'=>$product]);
    }
}
