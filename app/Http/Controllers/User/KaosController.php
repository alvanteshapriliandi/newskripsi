<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use DB;
use App\Helper;
use App\User;
use Auth;
use App\Models\Kaos;

class kaosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $data['product']= $product = DB::select("select p.*, s.name, u.username from products p inner join subcategories s on p.subcategory_id = s.id inner join users u on p.freelancer_id = u.id where subcategory_id = 16");
        return view('user.kaos.kaos_list',$data);
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
        $file=$request->file('KS_images');
        $filename = $file->getClientOriginalName();
        $file->move(public_path().'/orders/',$filename);
        $data = $request-> all();
        $data['KS_images']= $filename;
        $datas = array(
            'KS_userid'      => $id,
            'KS_productid'   => $request->input('productid'),
            'KS_description' => $request->input('KS_description'),
            'KS_images'      => $data['KS_images'],
            'KS_bahan'       => $request->input('KS_bahan'),
            'KS_warna'       => $request->input('KS_warna'),
            'KS_ukuran'      => $request->input('KS_ukuran'),
            'KS_depan'       => $request->input('KS_depan'),
            'KS_belakang'    => $request->input('KS_belakang'),
            'KS_cetak'       => $request->input('KS_cetak'),
            'KS_pemesanan'   => $request->input('KS_pemesanan'),
            'KS_total'       => $request->input('KS_total'),
        );
        // return $datas;
        Kaos::create($datas);
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
        
        $data['kaos'] = Product::find($id);
        $id = $data['kaos']->id;
        $data['product'] = DB::select("select u.username, f.images from products p inner join users u on p.freelancer_id = u.id inner join freelances f on u.id = f.user_id where p.id = ".$id);
        return view('user.kaos.kaos_create',$data);
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
