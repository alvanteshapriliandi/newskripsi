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
            left join banners bn on pay.BN_ID = bn.id
            left join bantalfotos bt on pay.BT_ID = bt.id
            left join brosurs br on pay.BR_ID = br.id
            left join goodlebags gd on pay.GD_ID = gd.id
            left join kalenders kl on pay.KL_ID = kl.id
            left join kaos ks on pay.KS_ID = ks.id
            left join kartus kr on pay.KR_ID = kr.id
            left join mugs mg on pay.MG_ID = mg.id
            left join offices of on pay.OF_ID = of.id
            left join polos pl on pay.PL_ID = pl.id
            left join posters pt on pay.PT_ID = pt.id
            left join stempels sm on pay.SM_ID = sm.id
            left join stikers st on pay.ST_ID = st.id
            join products pr on of.OF_productid = pr.id
            left join banners bns on bns.BN_productid = pr.id
            left join bantalfotos bts on bts.BT_productid = pr.id
            left join brosurs brs on brs.BR_productid = pr.id
            left join goodlebags gds on gds.GD_productid = pr.id
            left join kalenders kls on kls.KL_productid = pr.id
            left join kaos kas on kas.KS_productid = pr.id
            left join kartus krs on krs.KR_productid = pr.id
            left join mugs mgs on mgs.MG_productid = pr.id
            left join polos pls on pls.PL_productid = pr.id
            left join posters pts on pts.PT_productid = pr.id
            left join stempels sms on sms.SM_productid = pr.id
            left join stikers sts on sts.ST_productid = pr.id
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
