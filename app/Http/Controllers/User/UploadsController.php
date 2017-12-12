<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helper;
use App\User;
Use Auth;
use DB;
use App\Models\Payment;

class UploadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['type'] = $_GET['type'];
        $data['invoice'] = Helper::generateRandomString(8);
        // return $data;
        return view('user.uploads.uploads',$data);
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
        $file=$request->file('images');
        $filename = $file->getClientOriginalName();
        $file->move(public_path().'/pembayaran/',$filename);
        $data = $request-> all();
        $data['images']= $filename;
        $datas = array(
            'user_id'    => $id, 
            'kd_invoice' => $request->input('kd_invoice'),
            'namaBank'   => $request->input('namaBank'),    
            'alamat'     => $request->input('alamat'),  
            'kelurahan'  => $request->input('kelurahan'), 
            'kecamatan'  => $request->input('kecamatan'),
            'kota'       => $request->input('kota'),
            'images'     => $data['images']
        );
        // return $datas;
        Payment::create($datas);
        return redirect()->route('info-prossess.index');
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
