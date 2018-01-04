<?php

namespace App\Http\Controllers\Freelancer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use DB;

class PembayaranController extends Controller
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
        $data['banner'] = db::select('select pay.status, sub.name, bn.BN_total, u.username, p.jdl_Pdk, pay.updated_at from banners bn
            right join payments pay on pay.BN_ID = bn.id
            join products p on p.id = bn.BN_productid
            join users u on u.id = pay.user_id
            join subcategories sub on sub.id = p.subcategory_id
            where p.freelancer_id  = '.$id);

        $data['bantal'] = db::select('select pay.status, sub.name, bt.BT_total, u.username, p.jdl_Pdk, pay.updated_at from bantalfotos bt
            right join payments pay on pay.BT_ID = bt.id
            join products p on p.id = bt.BT_productid
            join users u on u.id = pay.user_id
            join subcategories sub on sub.id = p.subcategory_id
            where p.freelancer_id  = '.$id);

        $data['brosur'] = db::select('select pay.status, sub.name, br.BR_total, u.username, p.jdl_Pdk, pay.updated_at from brosurs br
            right join payments pay on pay.BR_ID = br.id
            join products p on p.id = br.BR_productid
            join users u on u.id = pay.user_id
            join subcategories sub on sub.id = p.subcategory_id
            where p.freelancer_id  = '.$id);

        $data['goodle'] = db::select('select pay.status, sub.name, gd.GD_total, u.username, p.jdl_Pdk, pay.updated_at from goodlebags gd
            right join payments pay on pay.GD_ID = gd.id
            join products p on p.id = gd.GD_productid
            join users u on u.id = pay.user_id
            join subcategories sub on sub.id = p.subcategory_id
            where p.freelancer_id  = '.$id);

        $data['kalender'] = db::select('select pay.status, sub.name, kl.KL_total, u.username, p.jdl_Pdk, pay.updated_at from kalenders kl
            right join payments pay on pay.KL_ID = kl.id
            join products p on p.id = kl.KL_productid
            join users u on u.id = pay.user_id
            join subcategories sub on sub.id = p.subcategory_id
            where p.freelancer_id  = '.$id);

        $data['kaos'] = db::select('select pay.status, sub.name, ks.KS_total, u.username, p.jdl_Pdk, pay.updated_at from kaos ks
            right join payments pay on pay.KS_ID = ks.id
            join products p on p.id = ks.KS_productid
            join users u on u.id = pay.user_id
            join subcategories sub on sub.id = p.subcategory_id
            where p.freelancer_id  = '.$id);

        $data['kartu'] = db::select('select pay.status, sub.name, kr.KR_total, u.username, p.jdl_Pdk, pay.updated_at from kartus kr
            right join payments pay on pay.KR_ID = kr.id
            join products p on p.id = kr.KR_productid
            join users u on u.id = pay.user_id
            join subcategories sub on sub.id = p.subcategory_id
            where p.freelancer_id  = '.$id);

        $data['mug'] = db::select('select pay.status, sub.name, mg.MG_total, u.username, p.jdl_Pdk, pay.updated_at from mugs mg
            right join payments pay on pay.MG_ID = mg.id
            join products p on p.id = mg.MG_productid
            join users u on u.id = pay.user_id
            join subcategories sub on sub.id = p.subcategory_id
            where p.freelancer_id  = '.$id);

        $data['office'] = db::select('select pay.status, sub.name, of.OF_total, sub.name, u.username, p.jdl_Pdk from offices of
            right join payments pay on pay.OF_ID = of.id
            join products p on p.id = of.OF_productid
            join subcategories sub on sub.id = p.subcategory_id
            join users u on u.id = pay.user_id
            where p.freelancer_id  = '.$id);

        $data['polo'] = db::select('select pay.status, sub.name, pl.PL_total, u.username, p.jdl_Pdk, pay.updated_at from polos pl
            right join payments pay on pay.PL_ID = pl.id
            join products p on p.id = pl.PL_productid
            join users u on u.id = pay.user_id
            join subcategories sub on sub.id = p.subcategory_id
            where p.freelancer_id  = '.$id);

        $data['poster'] = db::select('select pay.status, sub.name, pt.PT_total, u.username, p.jdl_Pdk, pay.updated_at from posters pt
            right join payments pay on pay.PT_ID = pt.id
            join products p on p.id = pt.PT_productid
            join users u on u.id = pay.user_id
            join subcategories sub on sub.id = p.subcategory_id
            where p.freelancer_id  = '.$id);

        $data['stempel'] = db::select('select pay.status, sub.name, sm.SM_total, u.username, p.jdl_Pdk, pay.updated_at from stempels sm
            right join payments pay on pay.SM_ID = sm.id
            join products p on p.id = sm.SM_productid
            join users u on u.id = pay.user_id
            join subcategories sub on sub.id = p.subcategory_id
            where p.freelancer_id  = '.$id);

        $data['stiker'] = db::select('select pay.status, sub.name, st.ST_total, u.username, p.jdl_Pdk, pay.updated_at from stikers st
            right join payments pay on pay.ST_ID = st.id
            join products p on p.id = st.ST_productid
            join users u on u.id = pay.user_id
            join subcategories sub on sub.id = p.subcategory_id
            where p.freelancer_id  = '.$id);

        
        //  return $data;
        return view('Freelancer.pembayaran.pembayaran_list',$data);
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
