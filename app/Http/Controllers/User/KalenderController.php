<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use DB;
use App\Helper;
use App\User;
use Auth;
use App\Models\Kalender;

class kalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $data['product']= $product = DB::select("select p.*, s.name, u.username from products p inner join subcategories s on p.subcategory_id = s.id inner join users u on p.freelancer_id = u.id where subcategory_id = 6");
        return view('user.kalender.kalender_list',$data);
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
        $file=$request->file('KL_images');
        $filename = $file->getClientOriginalName();
        $file->move(public_path().'/orders/',$filename);
        $data = $request-> all();
        $data['KL_images']= $filename;
        $datas = array(
            'KL_userid'       => $id ,
            'Kl_productid'    => $request->input('productid'),
            'KL_perusahaan'   => $request->input('KL_perusahaan'),
            'KL_alamat'       => $request->input('KL_alamat'),
            'KL_tlp'          => $request->input('KL_tlp'),
            'KL_email'        => $request->input('KL_email'),
            'KL_pemesanan'    => $request->input('KL_pemesanan'),
            'KL_jilid'        => $request->input('KL_jilid'),
            'KL_kertas'       => $request->input('KL_kertas'),
            'KL_lembar'       => $request->input('KL_lembar'),
            'KL_cetak'        => $request->input('KL_cetak'),
            'KL_total'        => $request->input('KL_total'),
            'KL_description'  => $request->input('KL_description'),
            'KL_images'       => $data['KL_images']
        );
        // return $datas;
        Kalender::create($datas);
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
        
        $data['kalender'] = Product::find($id);
        $id = $data['kalender']->id;
        $data['product'] = DB::select("select u.username, f.images from products p inner join users u on p.freelancer_id = u.id inner join freelances f on u.id = f.user_id where p.id = ".$id);
        return view('user.kalender.kalender_create',$data);
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
