<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Material;
use App\Subcategory;

class SubmaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data['submaterial'] = db::select('select s.name, m.id, m.subcategory_id from materials m join subcategories s on s.id = m.subcategory_id where m.id = '.$id);
        // return $data;
        return view('admin.submaterial.submaterial_delete',$data);
        
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
        $data['submaterial'] = db::select('select s.name, m.* from materials m 
            join subcategories s on s.id = m.subcategory_id
            where m.id = '.$id);
        // return $data;
        return view('admin.submaterial.submaterial_edit',$data);
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
        // return "hai";
        $data = $request->all();
        $material = Material::find($id);
        // return $material->subcategory_id;
        $material -> update($data);
        // return $material;
        return redirect()->route('material.edit', [$id => $material->subcategory_id])->with('success', "<strong>The material</strong> has successfully been updated.");
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
            $material = Material::find($id);
            // return $material;
            $material->delete();

            return redirect()->route('material.edit', [$id => $material->subcategory_id])->with('success', "The product <strong>Product</strong> has successfully been archived.");
        }
        catch(ModelNotFoundException $ex){
            if ($ex instanceof  ModelNotFoundException) {
                return response()->view('errors.'.'404');
            }
        }
    }
}
