<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\Ulasan;

class UlasanController extends Controller
{
    // public function __construct () {
    //   $this->middleware('auth:api');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $user_id = Auth::user()->id;
        $ulasan = Ulasan::create([
          'user_id' => $user_id,
          'product_id' => $request->product_id,
          'rate' => $request->rate,
          'judul' => $request->judul,
          'komen' => $request->komen
        ]);
        $data = DB::table('ulasans')->join('users', 'ulasans.user_id', '=', 'users.id')
                                    ->select('ulasans.*', 'users.username')
                                    ->where('product_id', '=', $request->product_id)->get();
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('ulasans')
                                    ->join('users', 'ulasans.user_id', '=', 'users.id')
                                    ->select('ulasans.*', 'users.username')
                                    ->where('product_id', '=', $id)
                                    ->get();
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
}
