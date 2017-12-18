<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        // $id = Auth::user()->id;
        $data['banner'] = DB::select('select b.*, s.id as subcategory_id, u.username, s.name, p.images from banners b 
            join products p on b.BN_productid = p.id
            join subcategories s on p.subcategory_id = s.id
            join users u on u.id = b.BN_userid
            left ' );

        $data['bantalfoto'] = DB::select('select ba.*, s.id as subcategory_id, s.name, p.images from bantalfotos ba 
            join products p on ba.BT_productid = p.id 
            join subcategories s on p.subcategory_id = s.id
            join users u on u.id = ba.BT_userid' );

        $data['brosur'] = DB::select('select br.*, s.id as subcategory_id, s.name, p.images from brosurs br join products p on br.BR_productid = p.id 
            join subcategories s on p.subcategory_id = s.id
            join users u on u.id = br.BR_userid' );

        $data['goodlebag'] = DB::select('select gd.*, s.id as subcategory_id, s.name, p.images from goodlebags gd 
            join products p on gd.GD_productid = p.id 
            join subcategories s on p.subcategory_id = s.id
            join users u on u.id = gd.GD_userid' );

        $data['kalender'] = DB::select('select kl.*, s.id as subcategory_id, s.name, p.images from kalenders kl join products p on kl.KL_productid = p.id 
            join subcategories s on p.subcategory_id = s.id
            join users u on u.id = kl.KL_userid' );

        $data['kaos'] = DB::select('select ks.*, s.id as subcategory_id, s.name, p.images from kaos ks 
            join products p on ks.KS_productid = p.id 
            join subcategories s on p.subcategory_id = s.id
            join users u on u.id = ks.KS_userid');

        $data['kartu'] = DB::select('select kr.*, s.id as subcategory_id, s.name, p.images from kartus kr 
            join products p on kr.KR_productid = p.id 
            join subcategories s on p.subcategory_id = s.id
            join users u on u.id = kr.KR_userid' );

        $data['mug'] = DB::select('select m.*, s.id as subcategory_id, s.name, p.images from mugs m 
            join products p on m.MG_productid = p.id 
            join subcategories s on p.subcategory_id = s.id
            join users u on u.id = m.MG_userid' );

        $data['office'] = DB::select('select o.*, s.id as subcategory_id, s.name, p.images from offices o 
            join products p on o.OF_productid = p.id 
            join subcategories s on p.subcategory_id = s.id
            join users u on u.id = o.OF_userid' );

        $data['polo'] = DB::select('select pl.*, s.id as subcategory_id, s.name, p.images from polos pl 
            join products p on pl.PL_productid = p.id 
            join subcategories s on p.subcategory_id = s.id
            join users u on u.id = pl.PL_userid' );

        $data['poster'] = DB::select('select pt.*, s.id as subcategory_id, s.name, p.images from posters pt 
            join products p on pt.PT_productid = p.id 
            join subcategories s on p.subcategory_id = s.id
            join users u on u.id = pt.PT_userid' );

        $data['stempel'] = DB::select('select sm.*, s.id as subcategory_id, s.name, p.images from stempels sm
            join products p on sm.SM_productid = p.id 
            join subcategories s on p.subcategory_id = s.id
            join users u on u.id = sm.SM_userid' );

        $data['stiker'] = DB::select('select st.*, s.id as subcategory_id, s.name, p.images from stikers st 
            join products p on st.ST_productid = p.id 
            join subcategories s on p.subcategory_id = s.id
            join users u on u.id = st.ST_userid' );
        // return $data;
        return view('user.checkout.checkout_list', $data);
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
