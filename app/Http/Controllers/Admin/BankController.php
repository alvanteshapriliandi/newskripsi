<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Bank;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['bank'] = Bank::all();
        return view('admin.bank.bank_list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.bank.bank_create');
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
        $file=$request->file('images_bank_bank');
        $filename = $file->getClientOriginalName();
       // return $filename;

        $file->move(public_path().'/uploads/',$filename);
        $data = $request-> all();
        $data['images_bank_bank']= $filename;
        //return $data;
        $datas = array(
          'atas_nama'   => $request->input('atas_nama'),
          'name_bank'   => $request->input('name_bank'),
          'no_rekening' => $request->input('no_rekening'),
          'images_bank_bank' => $data['images_bank_bank']
        );
        // return $datas;
        Bank::create($datas);
        return redirect()->route('bank.index')->with('success', "The bank <strong>Bank</strong> has successfully been create.");
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
        $data['bank'] = Bank::find($id);
        return view('admin.bank.bank_delete',$data);
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
        $data['bank'] = Bank::find($id);
        return view('admin.bank.bank_edit',$data);
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
        $file=$request->file('images_bank');
        $filename = $file->getClientOriginalName();
       // return $filename;

        $file->move(public_path().'/uploads/',$filename);
        $data = $request-> all();
        $data['images_bank']= $filename;
        //return $data;
        $bank = Bank::find($id);
        // return $bank;
        $bank -> update($data);
        return redirect()->route('bank.index')->with('success', "The bank <strong>Bank</strong> has successfully been updated.");
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
        try{
            $bank = Bank::find($id);
            // return $product;
            $bank->delete();

            return redirect()->route('bank.index')->with('success', "The bank <strong>BAnk</strong> has successfully been delete.");
        }
        catch(ModelNotFoundException $ex){
            if ($ex instanceof  ModelNotFoundException) {
                return response()->view('errors.'.'404');
            }
        }
        
    }
}
