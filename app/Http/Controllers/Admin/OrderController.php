<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\User;
use App\Models\Transaction;

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
        $list = db::select('select distinct t.id, u.username, t.status, t.created_at from orders o
            join products p on p.id = o.product_id
            join transaction t on t.id = o.transaction_id
            join users u on u.id = o.user_id');

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
        $data['data_order'] = db::select('select u.username,t.id, t.kode_invoice, t.images, b.name_bank from transaction t
            join banks b on b.id = t.bank_id
            join users u on u.id = t.user_id
            where t.id = '.$id);
        // return $data;
        $data['order_list'] = db::select('select u.username, p.jdl_Pdk, s.name, o.kuantitas, o.total from orders o
            join products p on p.id = o.product_id
            join users u on u.id = p.freelancer_id
            join subcategories s on s.id = p.subcategory_id
            join transaction t on t.id = o.Transaction_id
            where o.Transaction_id = '.$id);
        // return $data['order_list'];
        return view('admin.order.order_show',$data);
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
        // return 'hai';
        $data = $request->all();
        $transaction = Transaction::find($id);
        $transaction->status=$request->status;
        // return $transaction;
        $transaction->save();
        $transaction -> update($data);
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
