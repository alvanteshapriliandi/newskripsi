<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\User;
use App\Order;
use App\Transaction;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
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
      try {
        $user_id = Auth::user()->id;
     
        $transaction = Transaction::create([
          'user_id' => $user_id,
          'bank_id' => $request->bank_id,
          'kode_invoice' => $this->generateRandomString(),
          'address' => $request->address,
          'city_id' => $request->city_id,
          'city_name' => $request->city_name,
          'province' => $request->province,
          'postal_code' => $request->postal_code,
          'kurir' => $request->kurir,
          'service' => $request->service,
          'biaya_kurir' => $request->biaya_kurir
        ]);
        for($i = 0; $i < count($request->items); $i++){
          Order::create([
            'product_id' => $request->items[$i]['product_id'],
            'transaction_id' => $transaction->id,
            'jenis_kertas' => $request->items[$i]['jenis_kertas'],
            'kuantitas' => $request->items[$i]['kuantitas'],
            'model' => $request->items[$i]['model'],
            'kain' => $request->items[$i]['kain'],
            'ukuran' => $request->items[$i]['ukuran'],
            'warna' => $request->items[$i]['warna'],
            'jenis_cetak' => $request->items[$i]['jenis_cetak'],
            'bahan' => $request->items[$i]['bahan'],
            'sisi' => $request->items[$i]['sisi'],
            'jilid' => $request->items[$i]['jilid'],
            'lembar' => $request->items[$i]['lembar'],
            'cetak_depan' => $request->items[$i]['cetak_depan'],
            'cetak_belakang' => $request->items[$i]['cetak_belakang'],
            'cetak_lengan_kanan' => $request->items[$i]['cetak_lengan_kanan'],
            'cetak_lengan_kiri' => $request->items[$i]['cetak_lengan_kiri'],
            'kaos_metode' => $request->items[$i]['kaos_metode'],
            'berat' => $request->items[$i]['berat'],
            'harga' => $request->items[$i]['harga']
          ]);
          DB::table('items')->where('id', '=', $request->items[$i]['id'])->delete();
        }
        return response()->json($transaction->with('orders')->where('id', '=', $transaction->id)->first());
       
       
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
        $data = DB::table('orders')->where('id', '=', $id)->fiist();
        return response()->json($data);
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

    public static function generateRandomString($length = 10) {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }
}
