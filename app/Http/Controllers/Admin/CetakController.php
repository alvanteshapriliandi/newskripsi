<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Cetak;
use App\Models\Orders;
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
        $data['print'] = db::select('select u.username, p.jdl_Pdk, s.name, c.status, c.created_at, c.id from cetaks c
            join messages m on m.id = c.message_id
            join orders o on o.id = m.order_id
            join users u on u.id = m.to_user_id
            join products p on p.id = o.product_id
            join subcategories s on s.id = p.subcategory_id');
        // return $data;
        return view('admin.cetakfreelance.cetakfreelance_list',$data);
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
        // return $id;
        $data['user'] = db::select('select u.username, c.created_at, c.id from cetaks c
            join messages m on m.id = c.message_id
            join users u on u.id = m.to_user_id
            where c.id = '.$id);
        $data['print'] = db::select('select u.username, m.images, p.jdl_Pdk, s.name, o.jenis_kertas, o.kuantitas, o.model, o.kain, o.ukuran, o.warna, o.jenis_cetak, o.bahan, o.sisi, o.jilid, o.lembar, o.cetak_depan, o.cetak_belakang, o.cetak_lengan_kanan, o.cetak_lengan_kiri, o.kaos_metode from cetaks c
            join messages m on m.id = c.message_id
            join orders o on o.id = m.order_id
            join users u on u.id = m.fr_user_id
            join products p on p.id = o.product_id
            join subcategories s on s.id = p.subcategory_id
            where c.id = '.$id);
        // return $data['print'];
        return view('admin.cetakfreelance.cetakfreelance_show',$data);
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
        $data = $request->all();
        $cetak = db::select('select m.order_id, c.status from cetaks c join messages m on m.id = c.message_id
            where c.id = '.$id);
        foreach ($cetak as $c) {
            DB::table('cetaks')->where('cetaks.id','=',$id)->update(['status' => $request->status]);
            $order = Orders::find($c->order_id);
            $order->status=2;
            $order->save();
            
            // return $order->status;
        }
        
        
        // return $cetak->order_id;
        
        
        
        return redirect()->route('cetakpesanan.index')->with('success', "<strong>Print Product</strong> has successfully been updated.");
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
    // public function getDownload()
    // {
    //     $data['download'] = db::table('orders')->get();
    //     return view('admin.cetakfreelance.cetakfreelance_show',$data);
    // }
}
