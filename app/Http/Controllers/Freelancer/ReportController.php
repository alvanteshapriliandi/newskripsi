<?php

namespace App\Http\Controllers\Freelancer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\User;
use App\Models\Orders;
use App\Models\Report;

class ReportController extends Controller
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
        $data['report'] = db::select('select o.id, u.username, p.jdl_Pdk, s.name, p.harga_awal, o.total, o.status_frpay, t.status, o.created_at from orders o
            join products p on p.id = o.product_id
            join subcategories s on s.id = p.subcategory_id
            join transaction t on t.id = o.transaction_id
            join users u on u.id = o.user_id
            where p.freelancer_id = '.$id);
        // return $data;
        return view('freelancer.report.report_list',$data);
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
        $id = Auth::user()->id;
        $datas = array(
            'freelancer_id' => $id,
            'order_id' => $request->input('order_id'),
            'comment' => $request->input('comment')
        );
        // return $datas;
        Report::create($datas);
        return redirect()->route('report.index')->with('success', "<strong>Report Commnt</strong> has successfully been created.");
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
        $data['report'] = db::select('select o.id, p.jdl_Pdk from orders o join products p on p.id = o.product_id where o.id = '.$id);
        return view('freelancer.report.report_show',$data);

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
