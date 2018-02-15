<?php

namespace App\Http\Controllers\Freelancer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\User;
use Auth;
use App\Models\Transaction;
use App\Models\Cetak;

class CetakPesananController extends Controller
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
        $data['cetak'] = db::select('select u.username, p.jdl_Pdk, s.name, c.status, c.created_at from cetaks c
            join messages m on c.message_id = m.id 
            join orders o on  o.id = m.order_id
            join transaction t on o.transaction_id = t.id
            join users u on u.id = t.user_id
            join products p on p.id = o.product_id
            join subcategories s on s.id = p.subcategory_id
            where p.freelancer_id = '.$id);
        // return $data;
        return view('freelancer.cetak.cetak_list',$data);
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
