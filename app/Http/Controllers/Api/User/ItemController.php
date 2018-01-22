<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\Cart;
use App\Item;

class ItemController extends Controller
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
        $cart = DB::table('carts')->where('user_id', '=', Auth::user()->id)->first();
        $item = DB::table('items')->where('cart_id', '=', $cart->id)->get();
        $items = DB::table('items')->join('products', 'items.product_id', '=', 'products.id')
                                    ->select('items.*', 'products.freelancer_id', 'products.subcategory_id', 'products.jdl_Pdk', 'products.harga_awal', 'products.images')
                                    ->where('items.cart_id', '=', $cart->id)
                                    ->get();
        return response()->json($items);
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
      $cart = DB::table('carts')->where('user_id', '=', Auth::user()->id)->first();
      $items = DB::table('items')->where('product_id', '!=', $request->product_id);
      if(DB::table('items')->where('id', '=', $request->id)->exists()){
        $data = DB::table('items')->where('id', '=', $request->id)
                                  ->update([
                                    'jenis_kertas' => $request->jenis_kertas,
                                    'kuantitas' => $request->kuantitas,
                                    'model' => $request->model,
                                    'kain' => $request->kain,
                                    'ukuran' => $request->ukuran,
                                    'warna' => $request->warna,
                                    'jenis_cetak' => $request->jenis_cetak,
                                    'bahan' => $request->bahan,
                                    'sisi' => $request->sisi,
                                    'jilid' => $request->jilid,
                                    'lembar' => $request->lembar,
                                    'cetak_depan' => $request->cetak_depan,
                                    'cetak_belakang' => $request->cetak_belakang,
                                    'cetak_lengan_kanan' => $request->cetak_lengan_kanan,
                                    'cetak_lengan_kiri' => $request->cetak_lengan_kiri,
                                    'kaos_metode' => $request->kaos_metode
                                  ]);
        $detail = DB::table('items')->join('products', 'items.product_id', '=', 'products.id')
                                    ->select('items.*', 'products.freelancer_id', 'products.subcategory_id', 'products.jdl_Pdk', 'products.harga_awal', 'products.images')
                                    ->where('items.id', '=', $request->id)
                                    ->first();    
        return response()->json($detail);    
      } else {
        $data = array(
          'product_id' => $request->product_id,
          'cart_id' => $cart->id,
          'jenis_kertas' => $request->jenis_kertas,
          'kuantitas' => $request->kuantitas,
          'model' => $request->model,
          'kain' => $request->kain,
          'ukuran' => $request->ukuran,
          'warna' => $request->warna,
          'jenis_cetak' => $request->jenis_cetak,
          'bahan' => $request->bahan,
          'sisi' => $request->sisi,
          'jilid' => $request->jilid,
          'lembar' => $request->lembar,
          'cetak_depan' => $request->cetak_depan,
          'cetak_belakang' => $request->cetak_belakang,
          'cetak_lengan_kanan' => $request->cetak_lengan_kanan,
          'cetak_lengan_kiri' => $request->cetak_lengan_kiri,
          'kaos_metode' => $request->kaos_metode
        );
        $item = Item::create($data); 
        $detail = DB::table('items')->join('products', 'items.product_id', '=', 'products.id')
                                    ->select('items.*', 'products.freelancer_id', 'products.subcategory_id', 'products.jdl_Pdk', 'products.harga_awal', 'products.images')
                                    ->where('items.id', '=', $item->id)
                                    ->first();
        return response()->json($detail);
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
        $item = DB::table('items')->where('id', '=', $id)->get();

        return response()->json($item);
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
        $item = DB::table('items')
                    ->where('id', '=', $id)
                    ->update(
                      [ 
                      'product_id' => $request->product_id,
                      'Transaction_id' => $request->transaction_id,
                      'jenis_kertas' => $request->jenis_kertas,
                      'kuantitas' => $request->kuantitas,
                      'model' => $request->model,
                      'kain' => $request->kain,
                      'ukuran' => $request->ukuran,
                      'warna' => $request->warna,
                      'jenis_cetak' => $request->jenis_cetak,
                      'bahan' => $request->bahan,
                      'sisi' => $request->sisi,
                      'jilid' => $request->jilid,
                      'lembar' => $request->lembar,
                      'cetak_depan' => $request->cetak_depan,
                      'cetak_belakang' => $request->cetak_belakang,
                      'cetak_lengan_kanan' => $request->cetak_lengan_kanan,
                      'cetak_lengan_kiri' => $request->cetak_lengan_kiri,
                      'kaos_metode' => $request->kaos_metode
                      ]
                    );
                    return response()->json('code', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = DB::table('items')->where('id', '=', $id)->delete();
        $items = DB::table('items')->get();
        return response()->json($items);
    }
}
