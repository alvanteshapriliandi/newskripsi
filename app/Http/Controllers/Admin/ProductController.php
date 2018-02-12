<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Category;
use App\Subcategory;
use App\Product;
use App\Helper;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(!Helper::checkAdmin()){return view('error.403');}
        $product = DB::select("SELECT p.id, p.jdl_Pdk, p.status, p.created_at, p.updated_at, s.name, u.username
                              from products p inner join subcategories s on p.subcategory_id = s.id
                              inner join users u on p.freelancer_id = u.id");
        return view('admin.product.product_list', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(!Helper::checkAdmin()){return view('error.403');}
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if(!Helper::checkAdmin()){return view('error.403');}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        if(!Helper::checkAdmin()){return view('error.403');}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        if(!Helper::checkAdmin()){return view('error.403');}
        $data['products'] = DB::select("select p.id, u.username, s.name, p.jdl_Pdk, p.status, p.description, p.created_at, p.updated_at from products p 
            join subcategories s on p.subcategory_id = s.id
            join users u on p.freelancer_id = u.id
            where p.id = ".$id);
        $data['images'] = db::select('select * from images i where i.product_id = '.$id);
        // return $data;
        return view('admin.product.product_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if(!Helper::checkAdmin()){return view('error.403');}
        $data = $request->all();
        $product = Product::find($id);
        $product->status=$request->status;
        $product->save();
        // return [$data, $product];
        $product -> update($data);
        return redirect()->route('products.index')->with('success', "The product <strong>Product</strong> has successfully been updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if(!Helper::checkAdmin()){return view('error.403');}
    }
}
