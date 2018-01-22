<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Orders;
use Auth;
use DB;
use App\User;
use App\Order;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders = Orders::all();
        return response()->json($orders);
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
      $checkout = $request->get('checkout');
      try {
        $user_id = Auth::user()->id;
        $data = array(
          'user_id' => $user_id
        );
        if(DB::table('transaction')->where('user_id', '=', $user_id)->exists()) {    
          
          $transaction = DB::table('transaction')->where('user_id', '=', Auth::user()->id)->first();                 
          return response()->json($transaction);
        } else {
          Cart::create($data);
          $transaction = DB::table('transaction')->where('user_id', '=', Auth::user()->id)->first();  
          for($i = 0; $i < count($checkout); $i++){
            Order::create([
              'product_id' => $checkout[$i]->product_id,
              'transaction_id' => $transaction->id,
              'jenis_kertas' => $checkout[$i]->jenis_kertas,
              'kuantitas' => $checkout[$i]->kuantitas,
              'model' => $checkout[$i]->model,
              'kain' => $checkout[$i]->kain,
              'ukuran' => $checkout[$i]->ukuran,
              'warna' => $checkout[$i]->warna,
              'jenis_cetak' => $checkout[$i]->jenis_cetak,
              'bahan' => $checkout[$i]->bahan,
              'sisi' => $checkout[$i]->sisi,
              'jilid' => $checkout[$i]->jilid,
              'lembar' => $checkout[$i]->lembar,
              'cetak_depan' => $checkout[$i]->cetak_depan,
              'cetak_belakang' => $checkout[$i]->cetak_belakang,
              'cetak_lengan_kanan' => $checkout[$i]->cetak_lengan_kanan,
              'cetak_lengan_kiri' => $checkout[$i]->cetak_lengan_kiri,
              'kaos_metode' => $checkout[$i]->kaos_metode
            ]);
          }
          return response()->json($transaction);
        }
       
      } catch (Exception $e ) {
        return response()->json($e);
      }
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
