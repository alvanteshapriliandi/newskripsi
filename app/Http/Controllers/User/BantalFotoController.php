<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use DB;
use App\Helper;
use App\User;
use Auth;
use App\Models\Bantalfoto;

class bantalfotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['product']= $product = DB::select("select p.*, s.name, u.username from products p inner join subcategories s on p.subcategory_id = s.id inner join users u on p.freelancer_id = u.id where subcategory_id = 12");
        return view('user.bantalfoto.bantalfoto_list',$data);
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
        $file=$request->file('BT_images');
        $filename = $file->getClientOriginalName();
        $file->move(public_path().'/orders/',$filename);
        $data = $request-> all();
        $data['BT_images']= $filename;
        $datas = array(
            'BT_userid'         => $id ,
            'BT_productid'      => $request->input('productid'),
            'BT_description'    => $request->input('BT_description'),
            'BT_images'         => $data['BT_images'],
            'BT_model'          => $request->input('BT_model'),
            'BT_kain'           => $request->input('BT_kain'),
            'BT_ukuran'         => $request->input('BT_ukuran'),
            'BT_warna'          => $request->input('BT_warna'),
            'BT_pemesanan'      => $request->input('BT_pemesanan'),
            'BT_total'          => $request->input('BT_total'), 
        );
        // return $datas;
        Bantalfoto::create($datas);
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
        $data['bantalfoto'] = Product::find($id);
        return view('user.bantalfoto.bantalfoto_create',$data);
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
