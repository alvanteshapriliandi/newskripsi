<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\FreelancePayment;
use App\Models\Orders;

class FreelancePaymentController extends Controller
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
        $data['pay'] = db::select('select u.username, p.jdl_Pdk, s.name, o.status, o.updated_at, o.id, p.harga_awal, o.status_frpay from orders o
            join products p on p.id = o.product_id
            join subcategories s on s.id = p.subcategory_id
            join users u on u.id = p.freelancer_id
            where o.status = 4');
        // return $data;
        return view('admin.freelancepayment.freelancepayment_list',$data);
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
        $datas = array(
          'order_id'    => $request->input('order_id'),
        );
        // return $datas;
        FreelancePayment::create($datas);
        $trans = Orders::find($datas['order_id']);
        $trans->status_frpay=1;
        $trans->save();
        return redirect()->route('freelance-payment.index')->with('success', "<strong>The Freelance Payment</strong> has successfully been created.");
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
