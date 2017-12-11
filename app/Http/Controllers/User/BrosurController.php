<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use DB;
use App\Helper;
use App\User;
use Auth;
use App\Models\Brosur;

class brosurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $data['product']= $product = DB::select("select p.*, s.name, u.username from products p inner join subcategories s on p.subcategory_id = s.id inner join users u on p.freelancer_id = u.id where subcategory_id = 7");
        return view('user.brosur.brosur_list',$data);
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
        $file=$request->file('BR_images');
        $filename = $file->getClientOriginalName();
        $file->move(public_path().'/orders/',$filename);
        $data = $request-> all();
        $data['BR_images']= $filename;
        $datas = array(
            'BR_userid'         => $id ,
            'BR_productid'      => $request->input('productid'),
            'BR_perusahaan'     => $request->input('BR_perusahaan'),
            'BR_alamat'         => $request->input('BR_alamat'),
            'BR_tlp'            => $request->input('BR_tlp'),
            'BR_email'          => $request->input('BR_email'),
            'BR_pemesanan'      => $request->input('BR_pemesanan'),
            'BR_ukuran'         => $request->input('BR_ukuran'),
            'BR_kertas'         => $request->input('BR_kertas'),
            'BR_total'          => $request->input('BR_total'),
            'BR_description'    => $request->input('BR_description'),
            'BR_images'         => $data['BR_images']
        );
        // return $datas;
        Brosur::create($datas);
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
        
        $data['brosur'] = Product::find($id);
        return view('user.brosur.brosur_create',$data);
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
