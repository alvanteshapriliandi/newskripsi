<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Subcategory;
use App\Product;
use DB;
use App\Helper;
use App\User;
use Auth;
use App\Models\Kartu;

class KartuNamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $data['product']= $product = DB::select("select p.*, s.name, u.username from products p inner join subcategories s on p.subcategory_id = s.id inner join users u on p.freelancer_id = u.id where subcategory_id = 1");
        //return $data['product'];
        return view('user.kartunama.kartunama_list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('user.kartunama.kartunama_create');
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
        $file=$request->file('KR_images');
        $filename = $file->getClientOriginalName();
        $file->move(public_path().'/orders/',$filename);
        $data = $request-> all();
        $data['KR_images']= $filename;
        $datas = array(
            'KR_userid'      => $id ,
            'KR_productid'   => $request->input('productid'),
            'KR_nama'        => $request->input('KR_nama'),
            'KR_jabatan'     => $request->input('KR_jabatan'),
            'KR_perusahaan'  => $request->input('KR_perusahaan'),   
            'KR_alamat'      => $request->input('KR_alamat'),    
            'KR_tlp'         => $request->input('KR_tlp'),  
            'KR_email'       => $request->input('KR_email'), 
            'KR_pemesanan'   => $request->input('KR_pemesanan'), 
            'KR_kertas'      => $request->input('KR_kertas'),    
            'KR_total'       => $request->input('KR_total'), 
            'KR_description' => $request->input('KR_description'),
            'KR_images'      => $data['KR_images']
        );
        // return $datas;
        Kartu::create($datas);
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
        
        $data['kartunama'] = Product::find($id);
        return view('user.kartunama.kartunama_create',$data);
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
