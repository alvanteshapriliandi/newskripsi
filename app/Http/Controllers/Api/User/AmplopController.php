<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use DB;
use App\Helper;
use App\User;
use Auth;
use App\Models\Office;

class AmplopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['product'] = DB::select("select p.*, s.name, u.username from products p inner join subcategories s on p.subcategory_id = s.id inner join users u on p.freelancer_id = u.id where subcategory_id = 3");
        return view('user.amplop.amplop_list',$data);
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
        $file=$request->file('OF_images');
        $filename = $file->getClientOriginalName();
        $file->move(public_path().'/orders/',$filename);
        $data = $request-> all();
        $data['OF_images']= $filename;
        $datas = array(
            'OF_userid'         => $id, 
            'OF_productid'      => $request->input('productid'),
            'OF_perusahaan'     => $request->input('OF_perusahaan'),    
            'OF_alamat'         => $request->input('OF_alamat'),  
            'OF_tlp'            => $request->input('OF_tlp') , 
            'OF_email'          => $request->input('OF_email'),
            'OF_pemesanan'      => $request->input('OF_pemesanan'),
            'OF_kertas'         => $request->input('OF_kertas'),   
            'OF_total'          => $request->input('OF_total'),
            'OF_description'    => $request->input('OF_description'),  
            'OF_images'         => $data['OF_images']
        );

        // return $datas;
        // return $order;
        Office::create($datas);
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
        
        $data['amplop'] = Product::find($id);
        $id = $data['amplop']->id;
        $data['product'] = DB::select("select u.username, f.images from products p inner join users u on p.freelancer_id = u.id inner join freelances f on u.id = f.user_id where p.id = ".$id);
        // return $data['product'];
        return view('user.amplop.amplop_create',$data);
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
