<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

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
        // $id = Auth::user()->id;
        
        // return $data['banner'];

        $data['banner'] = DB::select('select u.username, bn.BN_status, p.jdl_Pdk, s.name, bn.created_at from banners bn
            join users u on u.id = bn.BN_userid
            join products p on p.id = bn.BN_productid
            join subcategories s on s.id = p.subcategory_id');

        $data['bantalfoto'] = DB::select('select u.username, bt.BT_status, p.jdl_Pdk, s.name, bt.created_at from bantalfotos bt
            join users u on u.id = bt.BT_userid
            join products p on p.id = bt.BT_productid
            join subcategories s on s.id = p.subcategory_id');

        $data['brosur'] = DB::select('select u.username, br.BR_status, p.jdl_Pdk, s.name, br.created_at from brosurs br
            join users u on u.id = br.BR_userid
            join products p on p.id = br.BR_productid
            join subcategories s on s.id = p.subcategory_id');

        $data['goodlebag'] = DB::select('select u.username, GD.GD_status, p.jdl_Pdk, s.name, GD.created_at from goodlebags GD
            join users u on u.id = GD.GD_userid
            join products p on p.id = GD.GD_productid
            join subcategories s on s.id = p.subcategory_id');

        $data['kalender'] = DB::select('select u.username, KL.KL_status, p.jdl_Pdk, s.name, KL.created_at from kalenders KL
            join users u on u.id = KL.KL_userid
            join products p on p.id = KL.KL_productid
            join subcategories s on s.id = p.subcategory_id');

        $data['kaos'] = DB::select('select u.username, KS.KS_status, p.jdl_Pdk, s.name, KS.created_at from kaos KS
            join users u on u.id = KS.KS_userid
            join products p on p.id = KS.KS_productid
            join subcategories s on s.id = p.subcategory_id');

        $data['kartu'] = DB::select('select u.username, KR.KR_status, p.jdl_Pdk, s.name, KR.created_at from kartus KR
            join users u on u.id = KR.KR_userid
            join products p on p.id = KR.KR_productid
            join subcategories s on s.id = p.subcategory_id');

        $data['mug'] = DB::select('select u.username, MG.MG_status, p.jdl_Pdk, s.name, MG.created_at from mugs MG
            join users u on u.id = MG.MG_userid
            join products p on p.id = MG.MG_productid
            join subcategories s on s.id = p.subcategory_id');

        $data['office'] = DB::select('select u.username, OF.OF_status, p.jdl_Pdk, s.name, OF.created_at from offices OF
            join users u on u.id = OF.OF_userid
            join products p on p.id = OF.OF_productid
            join subcategories s on s.id = p.subcategory_id');

        $data['polo'] = DB::select('select u.username, PL.PL_status, p.jdl_Pdk, s.name, PL.created_at from polos PL
            join users u on u.id = PL.PL_userid
            join products p on p.id = PL.PL_productid
            join subcategories s on s.id = p.subcategory_id');

        $data['poster'] = DB::select('select u.username, PT.PT_status, p.jdl_Pdk, s.name, PT.created_at from posters PT
            join users u on u.id = PT.PT_userid
            join products p on p.id = PT.PT_productid
            join subcategories s on s.id = p.subcategory_id');
        
        $data['stempel'] = DB::select('select u.username, SM.SM_status, p.jdl_Pdk, s.name, SM.created_at from stempels SM
            join users u on u.id = SM.SM_userid
            join products p on p.id = SM.SM_productid
            join subcategories s on s.id = p.subcategory_id');

        $data['stiker'] = DB::select('select u.username, ST.ST_status, p.jdl_Pdk, s.name, ST.created_at from stikers ST
            join users u on u.id = ST.ST_userid
            join products p on p.id = ST.ST_productid
            join subcategories s on s.id = p.subcategory_id');
        // return $data;
        return view('admin.order.order_list', $data);
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
