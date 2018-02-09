<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Subcategory;

class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $materials = DB::table('materials')->get();
      $subcategory = Subcategory::with('materials')->get();
      return response()->json($subcategory);
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
      
      $subcategory = Subcategory::with('materials')->where('id', '=', $id)->get();
      return response()->json($subcategory);
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

    public function getValue(Request $request) {
      // $materials = DB::select('select harga, berat from materials where 
      // subcategory_id = '.$request->id.
      // ' and jns_finishing = \''.$request->jenis_cetak.
      // '\' and jns_kertas = '.null
      // '\' and ukuran = \''.$request->ukuran.
      // '\' and jns_material = \''.$request->material.
      // '\' and bahan = \''.$request->bahan.
      // '\' and sisi = \''.$request->sisi.
      // '\' and jenis_kain = \''.$request->kain.
      // '\' and cetak_belakang = \''.$request->cetak_belakang.
      // '\' and cetak_depan = \''.$request->cetak_depan    
    // 
    $materials = DB::table('materials')->where([
      ['subcategory_id', '=', $request->subcategory_id],
      ['jns_finishing', '=', $request->jenis_cetak],
      ['jns_kertas', '=', $request->jenis_kertas],
      ['ukuran', '=', $request->ukuran],
      ['jns_material', '=', $request->material],
      ['bahan', '=', $request->bahan],
      ['sisi', '=', $request->sisi],
      ['jenis_kain', '=', $request->kain],
      ['cetak_belakang', '=', $request->cetak_belakang],
      ['cetak_depan', '=', $request->cetak_depan]      
  ])->select('harga', 'berat')->first();
    if($materials)
    {
      return response()->json($materials);

    } else {
        switch ($request->subcategory_id) {
          case 1:
            return response()->json(["harga"=> 20000, "berat" => 500]);
            break;
          case 2:
            return response()->json(["harga"=> 30000, "berat" => 500]);
            break;
          case 3:
            return response()->json(["harga"=> 32000, "berat" => 500]);
            break;
          case 4:
            return response()->json(["harga"=> 23000, "berat" => 500]);
            break;
          case 5:
            return response()->json(["harga"=> 20000, "berat" => 500]);
            break;
          case 6:
            return response()->json(["harga"=> 20000, "berat" => 500]);
            break;
          case 7:
            return response()->json(["harga"=> 20000, "berat" => 500]);
            break;
          case 8:
            return response()->json(["harga"=> 20000, "berat" => 500]);
            break;
          case 9:
            return response()->json(["harga"=> 20000, "berat" => 500]);
            break;
          case 10:
            return response()->json(["harga"=> 20000, "berat" => 500]);
            break;
          case 11:
            return response()->json(["harga"=> 20000, "berat" => 500]);
            break;
          case 12:
            return response()->json(["harga"=> 20000, "berat" => 500]);
            break;
          case 13:
            return response()->json(["harga"=> 20000, "berat" => 500]);
            break;
          case 14:
            return response()->json(["harga"=> 20000, "berat" => 500]);
            break;
          case 15:
            return response()->json(["harga"=> 20000, "berat" => 500]);
            break;
          case 16:
            return response()->json(["harga"=> 20000, "berat" => 500]);
            break;
          case 17:
            return response()->json(["harga"=> 20000, "berat" => 500]);
            break;
        }
      }      
    }
}
