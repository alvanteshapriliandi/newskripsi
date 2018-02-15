<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\User;
use App\Models\Transaction;
use App\Models\Orders;
use App\Subcategory;

class OrderController extends Controller
{
    /**
     * DisSTay a listing ST the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list = db::select('select distinct t.id, u.username, t.status_transaksi, t.created_at from orders o
            join products p on p.id = o.product_id
            join transaction t on t.id = o.transaction_id
            join users u on u.id = t.user_id');

        // $arr = array();
        // foreach ($list as $item) {
        //     $tmp2 = db::select('select * from orders where transaction_id='.$item->id);
        //     array_push($arr, $tmp2);
        // }
        $data['transaction'] = $list;

        // return $data;
        return view('admin.order.order_list',$data);
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
     * DisSTay the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // return $id;
        
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
        $data['data_order'] = db::select('select distinct t.status_transaksi, u.username, t.id, t.kode_invoice, t.images, b.name_bank from transaction t
            join banks b on b.id = t.bank_id
            join orders o on o.transaction_id = t.id
            join users u on u.id = t.user_id
            where t.id = '.$id);
        // return $data;
        $data['order_list'] = db::select('SELECT u.username, s.id, p.jdl_Pdk, p.harga_awal, 
            s.name, o.harga, o.kuantitas, o.status, t.* from orders o
            join products p on p.id = o.product_id
            join users u on u.id = p.freelancer_id
            join subcategories s on s.id = p.subcategory_id
            join transaction t on t.id = o.Transaction_id
            where o.Transaction_id = '.$id);

        // return $data['order_list'];
        return view('admin.order.order_show',$data);
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
        // return 'hai';
        $data = $request->all();
        // return $data;
        $transaction = Transaction::find($id);
        // return $transaction;
        $transaction->status_transaksi = $request->status;
        // return $transaction->status_transaksi;
        $transaction->save();
        $transaction -> update($data);

        // $order = Orders::find();
        // return $order;
        // if ($transaction->status == 1) {
        //    foreach ($order as $o) {
        //         $o->status = 1;
        //         return $o;
        //    }
        // }
        return redirect()->route('orderlist.index')->with('success', "The order <strong>Status Order</strong> has successfully been updated.");
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
