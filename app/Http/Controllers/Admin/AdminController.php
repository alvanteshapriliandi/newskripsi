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
		$product = DB::select('SELECT COUNT(p.id) total FROM products p where p.status = 0');
		$transaction = DB::select('SELECT COUNT(t.id) total FROM transaction t where t.status_transaksi = 0');
		$cetak = DB::select('SELECT COUNT(c.id) total FROM cetaks c where c.status = 0');
		$bayar = DB::select('SELECT COUNT(o.id) total FROM orders o where o.status_frpay = 1');
		$comment = DB::select('SELECT COUNT(com.id) total FROM report_comments com');
		return view('admin.home')->with(['user'=>$user,'freelance'=>$freelance, 'product'=>$product, 'transaction'=>$transaction, 'cetak'=>$cetak, 'bayar'=>$bayar, 'comment'=>$comment]);
    }
}
