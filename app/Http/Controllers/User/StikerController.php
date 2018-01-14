<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use DB;
use App\Helper;
use App\User;
use Auth;
use App\Models\Stiker;

class stikerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data['product']= $product = DB::select("select p.*, s.name, u.username from products p inner join subcategories s on p.subcategory_id = s.id inner join users u on p.freelancer_id = u.id where subcategory_id = 8");
        return view('user.stiker.stiker_list',$data);
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
        $file=$request->file('ST_images');
        $filename = $file->getClientOriginalName();
        $file->move(public_path().'/orders/',$filename);
        $data = $request-> all();
        $data['ST_images']= $filename;
        $datas = array(
            'ST_userid'         => $id, 
            'ST_productid'      => $request->input('productid'),
            'ST_ukuran'         => $request->input('ST_ukuran'),   
            'ST_material'       => $request->input('ST_material'), 
            'ST_cetak'          => $request->input('ST_cetak'),
            'ST_total'          => $request->input('ST_total'),
            'ST_description'    => $request->input('ST_description'),   
            'ST_images'         => $data['ST_images']
        );
        // return $datas;
        Stiker::create($datas);
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
        $data['stiker'] = Product::find($id);
        $id = $data['stiker']->id;
        $data['product'] = DB::select("select u.username, f.images from products p inner join users u on p.freelancer_id = u.id inner join freelances f on u.id = f.user_id where p.id = ".$id);
        return view('user.stiker.stiker_create',$data);
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
