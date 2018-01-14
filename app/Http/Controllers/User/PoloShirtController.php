<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use DB;
use App\Helper;
use App\User;
use Auth;
use App\Models\Polo;

class poloshirtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data['product']= $product = DB::select("select p.*, s.name, u.username from products p inner join subcategories s on p.subcategory_id = s.id inner join users u on p.freelancer_id = u.id where subcategory_id = 17");
        return view('user.poloshirt.poloshirt_list',$data);
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
        $file=$request->file('PL_images');
        $filename = $file->getClientOriginalName();
        $file->move(public_path().'/orders/',$filename);
        $data = $request-> all();
        $data['PL_images']= $filename;
        $datas = array(
            'PL_userid'      => $id,
            'PL_productid'   => $request->input('productid'),
            'PL_description' => $request->input('PL_description'),  
            'PL_images'      => $data['PL_images'],
            'PL_material'    => $request->input('PL_material'),   
            'PL_metode'      => $request->input('PL_metode'), 
            'PL_depan'       => $request->input('PL_depan'), 
            'PL_lengan'      => $request->input('PL_lengan'),    
            'PL_Belakang'    => $request->input('PL_Belakang'),  
            'PL_warna'       => $request->input('PL_warna'), 
            'PL_ukuran'      => $request->input('PL_ukuran'),
            'PL_cetak'       => $request->input('PL_cetak'),    
            'PL_pemesanan'   => $request->input('PL_pemesanan'),  
            'PL_total'       => $request->input('PL_total'), 
        );
        // return $datas;
        Polo::create($datas);
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
        $data['poloshirt'] = Product::find($id);
        $id = $data['poloshirt']->id;
        $data['product'] = DB::select("select u.username, f.images from products p inner join users u on p.freelancer_id = u.id inner join freelances f on u.id = f.user_id where p.id = ".$id);
        return view('user.poloshirt.poloshirt_create',$data);
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
