<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;
use Exception;
use Auth;
use DB;
use App\Cart;

class CartController extends Controller
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
      $cart = DB::table('carts')
                ->join('items', 'carts.id', '=', 'items.cart_id')
                ->select('carts.*', 'items.*')
                ->where('carts.user_id', '=', Auth::user()->id)
                ->get();

      return response()->json($cart);
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
          $data = array(
            'user_id' => $user_id
          );
          if(DB::table('carts')->where('user_id', '=', $user_id)->exists()) {    
            
            $cart = DB::table('carts')->where('user_id', '=', Auth::user()->id)->first();                 
            return response()->json($cart);
          } else {
            Cart::create($data);
            $cart = DB::table('carts')->where('user_id', '=', Auth::user()->id)->first();  
            return response()->json($cart);
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
        $user_id = Auth::user()->id;
        $cart = DB::table('carts')->where('user_id', '=', $user_id)->first();

        $items = DB::table('items')->where('cart_id', '=', $cart->id)->delete();
        
        

        return response()->json(200);
    }
}
