<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use DB;
use App\Helper;
use App\User;
use Auth;
use App\Models\Goodlebag;

class GoodleBagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $data['product']= $product = DB::select("select p.*, s.name, u.username from products p inner join subcategories s on p.subcategory_id = s.id inner join users u on p.freelancer_id = u.id where subcategory_id = 10");
        return view('user.goodlebag.goodlebag_list',$data);
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
        $file=$request->file('GD_images');
        $filename = $file->getClientOriginalName();
        $file->move(public_path().'/orders/',$filename);
        $data = $request-> all();
        $data['GD_images']= $filename;
        $datas = array(
            'GD_userid'     => $id ,
            'GD_productid'  => $request->input('productid'),
            'GD_model'      => $request->input('GD_model'),
            'GD_ukuran'     => $request->input('GD_ukuran'),
            'GD_bahan'      => $request->input('GD_bahan'),
            'GD_sisi'       => $request->input('GD_sisi'),
            'GD_jumlah'     => $request->input('GD_jumlah'),
            'GD_warna'      => $request->input('GD_warna'),
            'GD_cetak'      => $request->input('GD_cetak'), 
            'GD_total'      => $request->input('GD_total'),
            'GD_deskripsi'  => $request->input('GD_deskripsi'),
            'GD_images'     => $data['GD_images']
        );
        // return $datas;
        Goodlebag::create($datas);
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
        $data['goodlebag'] = Product::find($id);
        $id = $data['goodlebag']->id;
        $data['product'] = DB::select("select u.username, f.images from products p inner join users u on p.freelancer_id = u.id inner join freelances f on u.id = f.user_id where p.id = ".$id);
        return view('user.goodlebag.goodlebag_create',$data);
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
