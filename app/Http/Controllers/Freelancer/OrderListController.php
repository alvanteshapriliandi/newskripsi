<?php

namespace App\Http\Controllers\Freelancer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\User;
use App\Models\Transaction;

class OrderListController extends Controller
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
        $list = db::select('select distinct t.id, u.username, t.status, t.updated_at from orders o
            join products p on p.id = o.product_id
            join transaction t on t.id = o.transaction_id
            join users u on u.id = o.user_id
            where p.freelancer_id = '.$id);

        // $arr = array();
        // foreach ($list as $item) {
        //     $tmp2 = db::select('select * from orders where transaction_id='.$item->id);
        //     array_push($arr, $tmp2);
        // }
        $data['transaction'] = $list;

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
        $data['transaction'] = db::select('select u.username, u.email, t.status from transaction t
            join users u on u.id = t.user_id
            where t.id = '.$id);
        $data['order_detail'] = db::select('select p.jdl_Pdk, s.name, o.* from orders o
            join products p on p.id = o.product_id
            join subcategories s on s.id = p.subcategory_id
            where p.freelancer_id = '.$freelancer_id);
        // return $data;
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
        $data['transaction'] = db::select('select u.username, t.* from transaction t
            join users u on t.user_id = u.id
            where t.id = '.$id);
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
        $transaction = Transaction::find($id);
        $transaction->status=$request->status;
        $transaction->save();
        // return [$data, $payment];
        $transaction -> update($data);
        return redirect()->route('order-list.index')->with('success', "The order <strong>Status Order</strong> has successfully been updated.");
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
