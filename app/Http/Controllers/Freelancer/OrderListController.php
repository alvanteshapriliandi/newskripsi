<?php

namespace App\Http\Controllers\Freelancer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\User;
use App\Models\Payment;

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
        $data['payment'] = db::select('select of.OF_perusahaan, pay.id, pay.status, pay.created_at, pay.updated_at, u.username, pr.jdl_Pdk from payments pay
            join offices of on pay.OF_ID = of.id 
            join products pr on of.OF_productid = pr.id
            join users u on pay.user_id = u.id
            where pr.freelancer_id = '.$id);
        // return $data['amplop'];
        // return $id;
        // return $data['payment'];
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
        //
        $data['payment'] = Payment::find($id);
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
        //

        $data['payment'] = Payment::find($id);
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
        $payment = Payment::find($id);
        $payment->status=$request->status;
        $payment->save();
        // return [$data, $payment];
        $payment -> update($data);
        return redirect()->route('order-list.index')->with('success', "The payment <strong>Status Payment</strong> has successfully been updated.");
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
