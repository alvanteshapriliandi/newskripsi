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
        // $data['payment'] = db::select('select pay.id, pay.status, pay.created_at, pay.updated_at, u.username, pr.jdl_Pdk from payments, products pay
        //     left join banners bn on pay.BN_ID = bn.id
        //     left join bantalfotos bt on pay.BT_ID = bt.id
        //     left join brosurs br on pay.BR_ID = br.id
        //     left join goodlebags gd on pay.GD_ID = gd.id
        //     left join kalenders kl on pay.KL_ID = kl.id
        //     left join kaos ks on pay.KS_ID = ks.id
        //     left join kartus kr on pay.KR_ID = kr.id
        //     left join mugs mg on pay.MG_ID = mg.id
        //     left join offices of on pay.OF_ID = of.id
        //     left join polos pl on pay.PL_ID = pl.id
        //     left join posters pt on pay.PT_ID = pt.id
        //     left join stempels sm on pay.SM_ID = sm.id
        //     left join stikers st on pay.ST_ID = st.id
        //     join products pr on of.OF_productid = pr.id
        //     left join banners bns on bns.BN_productid = pr.id
        //     left join bantalfotos bts on bts.BT_productid = pr.id
        //     left join brosurs brs on brs.BR_productid = pr.id
        //     left join goodlebags gds on gds.GD_productid = pr.id
        //     left join kalenders kls on kls.KL_productid = pr.id
        //     left join kaos kas on kas.KS_productid = pr.id
        //     left join kartus krs on krs.KR_productid = pr.id
        //     left join mugs mgs on mgs.MG_productid = pr.id
        //     left join polos pls on pls.PL_productid = pr.id
        //     left join posters pts on pts.PT_productid = pr.id
        //     left join stempels sms on sms.SM_productid = pr.id
        //     left join stikers sts on sts.ST_productid = pr.id
        //     join users u on pay.user_id = u.id
        //     where pr.freelancer_id = '.$id);


      // $data['payment'] = db::select('select pay. from payments pay 
      //   left join (select bn.id from products p inner join  banners bn on p.id = bn.BN_productid where p.freelancer_id ='.$id.') pbn on pbn.id = pay.BN_ID
      //   left join (select kr.id from products p inner join  kartus kr on p.id = kr.KR_productid where p.freelancer_id ='.$id.') pkr on pkr.id = pay.KR_ID');

      //  $data['payment2'] = db::select('select kr.id from products p inner join  kartus kr on p.id = kr.KR_productid where p.freelancer_id ='.$id);

        $data['payment'] = db::select('
            select distinct p.*, u.username from payments p
            inner join users u on u.id = p.user_id,
            (select pr.*, 
                bns.id as bns_id, krs.id as krs_id, bts.id as bts_id, brs.id as brs_id,
                gds.id as gds_id, kls.id as kls_id, kas.id as kas_id, mgs.id as mgs_id,
                ofs.id as ofs_id, pls.id as pls_id, pts.id as pts_id, sms.id as sms_id,
                sts.id as sts_id from products pr
                left join banners bns on bns.BN_productid = pr.id
                left join bantalfotos bts on bts.BT_productid = pr.id
                left join brosurs brs on brs.BR_productid = pr.id
                left join goodlebags gds on gds.GD_productid = pr.id
                left join kalenders kls on kls.KL_productid = pr.id
                left join kaos kas on kas.KS_productid = pr.id
                left join kartus krs on krs.KR_productid = pr.id
                left join mugs mgs on mgs.MG_productid = pr.id
                left join offices ofs on ofs.OF_productid = pr.id
                left join polos pls on pls.PL_productid = pr.id
                left join posters pts on pts.PT_productid = pr.id
                left join stempels sms on sms.SM_productid = pr.id
                left join stikers sts on sts.ST_productid = pr.id
                where pr.freelancer_id ='.$id.'
            ) pr
            
            WHERE 
            p.BN_ID = pr.bns_id or
            p.BT_ID = pr.bts_id or
            p.BR_ID = pr.brs_id or
            p.GD_ID = pr.gds_id or
            p.KL_ID = pr.kls_id or
            p.KS_ID = pr.kas_id or
            p.KR_ID = pr.krs_id or
            p.MG_ID = pr.mgs_id or
            p.OF_ID = pr.ofs_id or
            p.PL_ID = pr.pls_id or
            p.PT_ID = pr.pts_id or
            p.SM_ID = pr.sms_id or
            p.ST_ID = pr.sts_id
        ');
        // return $data;
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
        $data['payment'] = db::select('select p.*, u.* from payments p
            join users u on u.id = p.user_id
            where p.id = '.$id);

        $freelancer_id = Auth::user()->id;

        $data['banner'] = db::select('select pay.status, sub.name, bn.*, u.username, p.jdl_Pdk, p.images, pay.updated_at from banners bn
            right join payments pay on pay.BN_ID = bn.id
            join products p on p.id = bn.BN_productid
            join users u on u.id = pay.user_id
            join subcategories sub on sub.id = p.subcategory_id
            where p.freelancer_id  = '.$freelancer_id);

        $data['bantal'] = db::select('select pay.status, sub.name, bt.*, u.username, p.jdl_Pdk, p.images, pay.updated_at from bantalfotos bt
            right join payments pay on pay.BT_ID = bt.id
            join products p on p.id = bt.BT_productid
            join users u on u.id = pay.user_id
            join subcategories sub on sub.id = p.subcategory_id
            where p.freelancer_id  = '.$freelancer_id);

        $data['brosur'] = db::select('select pay.status, sub.name, br.*, u.username, p.jdl_Pdk, p.images, pay.updated_at from brosurs br
            right join payments pay on pay.BR_ID = br.id
            join products p on p.id = br.BR_productid
            join users u on u.id = pay.user_id
            join subcategories sub on sub.id = p.subcategory_id
            where p.freelancer_id  = '.$freelancer_id);

        $data['goodle'] = db::select('select pay.status, sub.name, gd.*, u.username, p.jdl_Pdk, p.images, pay.updated_at from goodlebags gd
            right join payments pay on pay.GD_ID = gd.id
            join products p on p.id = gd.GD_productid
            join users u on u.id = pay.user_id
            join subcategories sub on sub.id = p.subcategory_id
            where p.freelancer_id  = '.$freelancer_id);

        $data['kalender'] = db::select('select pay.status, sub.name, kl.*, u.username, p.jdl_Pdk, p.images, pay.updated_at from kalenders kl
            right join payments pay on pay.KL_ID = kl.id
            join products p on p.id = kl.KL_productid
            join users u on u.id = pay.user_id
            join subcategories sub on sub.id = p.subcategory_id
            where p.freelancer_id  = '.$freelancer_id);

        $data['kaos'] = db::select('select pay.status, sub.name, ks.*, u.username, p.jdl_Pdk, p.images, pay.updated_at from kaos ks
            right join payments pay on pay.KS_ID = ks.id
            join products p on p.id = ks.KS_productid
            join users u on u.id = pay.user_id
            join subcategories sub on sub.id = p.subcategory_id
            where p.freelancer_id  = '.$freelancer_id);

        $data['kartu'] = db::select('select pay.status, sub.name, kr.*, u.username, p.jdl_Pdk, p.images, pay.updated_at from kartus kr
            right join payments pay on pay.KR_ID = kr.id
            join products p on p.id = kr.KR_productid
            join users u on u.id = pay.user_id
            join subcategories sub on sub.id = p.subcategory_id
            where p.freelancer_id  = '.$freelancer_id);

        $data['mug'] = db::select('select pay.status, sub.name, mg.*, u.username, p.jdl_Pdk, p.images, pay.updated_at from mugs mg
            right join payments pay on pay.MG_ID = mg.id
            join products p on p.id = mg.MG_productid
            join users u on u.id = pay.user_id
            join subcategories sub on sub.id = p.subcategory_id
            where p.freelancer_id  = '.$freelancer_id);

        $data['office'] = db::select('select pay.status, sub.name, of.*, u.username, p.jdl_Pdk, p.images, pay.updated_at from offices of
            right join payments pay on pay.OF_ID = of.id
            join products p on p.id = of.OF_productid
            join subcategories sub on sub.id = p.subcategory_id
            join users u on u.id = pay.user_id
            where p.freelancer_id  = '.$freelancer_id);

        $data['polo'] = db::select('select pay.status, sub.name, pl.*, u.username, p.jdl_Pdk, p.images, pay.updated_at from polos pl
            right join payments pay on pay.PL_ID = pl.id
            join products p on p.id = pl.PL_productid
            join users u on u.id = pay.user_id
            join subcategories sub on sub.id = p.subcategory_id
            where p.freelancer_id  = '.$freelancer_id);

        $data['poster'] = db::select('select pay.status, sub.name, pt.*, u.username, p.jdl_Pdk, p.images, pay.updated_at from posters pt
            right join payments pay on pay.PT_ID = pt.id
            join products p on p.id = pt.PT_productid
            join users u on u.id = pay.user_id
            join subcategories sub on sub.id = p.subcategory_id
            where p.freelancer_id  = '.$freelancer_id);

        $data['stempel'] = db::select('select pay.status, sub.name, sm.*, u.username, p.jdl_Pdk, p.images, pay.updated_at from stempels sm
            right join payments pay on pay.SM_ID = sm.id
            join products p on p.id = sm.SM_productid
            join users u on u.id = pay.user_id
            join subcategories sub on sub.id = p.subcategory_id
            where p.freelancer_id  = '.$freelancer_id);

        $data['stiker'] = db::select('select pay.status, sub.name, st.*, u.username, p.jdl_Pdk, p.images, pay.updated_at from stikers st
            right join payments pay on pay.ST_ID = st.id
            join products p on p.id = st.ST_productid
            join users u on u.id = pay.user_id
            join subcategories sub on sub.id = p.subcategory_id
            where p.freelancer_id  = '.$freelancer_id);
        // return $data['banner'];
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
