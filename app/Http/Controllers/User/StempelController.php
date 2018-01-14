<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use DB;
use App\Helper;
use App\User;
use Auth;
use App\Models\Stempel;

class stempelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data['product']= $product = DB::select("select p.*, s.name, u.username from products p inner join subcategories s on p.subcategory_id = s.id inner join users u on p.freelancer_id = u.id where subcategory_id = 5");
        return view('user.stempel.stempel_list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $id = Auth::user()->id;
        $file=$request->file('SM_images');
        $filename = $file->getClientOriginalName();
        $file->move(public_path().'/orders/',$filename);
        $data = $request-> all();
        $data['SM_images']= $filename;
        $datas = array(
            'SM_userid'         => $id ,
            'SM_productid'      => $request->input('productid'),
            'SM_perusahaan'     => $request->input('SM_perusahaan'),  
            'SM_ukuran'         => $request->input('SM_ukuran'),   
            'SM_pemesanan'      => $request->input('SM_pemesanan'),
            'SM_warna'          => $request->input('SM_warna'),
            'SM_cetak'          => $request->input('SM_cetak'),
            'SM_total'          => $request->input('SM_total'),
            'SM_description'    => $request->input('SM_description'),   
            'SM_images'         => $data['SM_images']
        );
        // return $datas;
        Stempel::create($datas);
        return redirect()->route('checkout.index');
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
        $data['stempel'] = Product::find($id);
        $id = $data['stempel']->id;
        $data['product'] = DB::select("select u.username, f.images from products p inner join users u on p.freelancer_id = u.id inner join freelances f on u.id = f.user_id where p.id = ".$id);
        return view('user.stempel.stempel_create',$data);
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
    }
}
