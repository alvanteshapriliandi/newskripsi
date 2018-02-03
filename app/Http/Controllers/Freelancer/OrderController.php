<?php

namespace App\Http\Controllers\Freelancer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\User;
use App\Models\Orders;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return 'hai';
        $id = Auth::user()->id;
        // $list = db::select('select distinct t.id, u.username, t.status, t.updated_at from orders o
        //     join products p on p.id = o.product_id
        //     join transaction t on t.id = o.transaction_id
        //     join users u on u.id = t.user_id
        //     where p.freelancer_id = '.$id);

        // $arr = array();
        // foreach ($list as $item) {
        //     $tmp2 = db::select('select * from orders where transaction_id='.$item->id);
        //     array_push($arr, $tmp2);
        // }
        // $data['transaction'] = $list;
        $data['orderlist'] = db::select('select o.id, u.username, t.status_transaksi, o.status, o.updated_at from orders o
            join products p on p.id = o.product_id
            join transaction t on t.id = o.transaction_id
            join users u on u.id = t.user_id
            where p.freelancer_id = '.$id.'
            order by o.status asc');
        // return $data;
        return view('freelancer.orderlist.order_list',$data);

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
        $freelancer_id = Auth::user()->id;
        $data['order_user'] = db::select('select u.username, u.email, o.status from orders o
            join transaction t on t.id = o.transaction_id
            join users u on u.id = t.user_id
            where o.id = '.$id);
        $data['orderlist'] = db::select('select o.*, u.username, u.email, p.jdl_Pdk, s.name from orders o
            join transaction t on t.id = o.transaction_id
            join users u on u.id = t.user_id
            join products p on p.id = o.product_id
            join subcategories s on s.id = p.subcategory_id');
        // return $data['orderlist'];
        return view('freelancer.orderlist.order_detail',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['orderlist'] = db::select('select u.username, o.id, o.status from orders o
            join transaction t on t.id = o.transaction_id
            join users u on t.user_id = u.id
            where o.id = '.$id);
        // return $data;
        return view('freelancer.orderlist.order_edit',$data);
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
        $order = Orders::find($id);
        $order->status=$request->status;
        // return $order;
        $order->save();
        $order -> update($data);
        return redirect()->route('order.index')->with('success', "The order <strong>Status Order</strong> has successfully been updated.");
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
