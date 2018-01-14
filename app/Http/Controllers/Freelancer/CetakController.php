<?php

namespace App\Http\Controllers\Freelancer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\User;
use Auth;
use App\Models\Transaction;
use App\Models\Cetak;

class CetakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = Auth::user()->id;
        $data['cetak'] = db::select('select t.id, t.updated_at, t.status_cetak, u.username, p.jdl_Pdk, s.name from transaction t
            join orders o on o.id = t.order_id
            join products p on p.id = o.product_id
            join subcategories s on p.subcategory_id = s.id
            join users u on u.id = t.user_id
            where p.freelancer_id = '.$id);
        // return $data;
        return view('freelancer.cetak.cetak_list',$data);
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
       // return $filename;

        $file->move(public_path().'/cetak/',$filename);
        $data = $request-> all();
        $data['images']= $filename;
        //return $data;
        $datas = array(
          'freelancer_id'   => $id,
          'transaction_id'  => $request->input('trasaction_id'),
          'deskripsi_cetak' => $request->input('deskripsi_cetak'),
          'images'          => $data['images'],
        );
        $status = Transaction::find($datas['transaction_id']);
        $status->status_cetak=0;
        $status->save();
        // return $datas;
        
        Cetak::create($datas);
        return redirect()->route('cetak-pesanan.index')->with('success', "Pesanan Berhasil di kirim, Silahkan tunggu konfimasi selanjutnya oleh admin.");
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
        $data['cetak'] = db::select('select u.username, t.* from transaction t
            join users u on u.id = t.user_id');
        return view('freelancer.cetak.cetak_show',$data);
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
