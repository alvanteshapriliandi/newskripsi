<?php

namespace App\Http\Controllers\Freelancer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Subcategory;
use App\Product;
use DB;
use Input;
use App\Helper;
use App\User;
use Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(!Helper::checkFreelancer()){return view('error.403');}
        $id = Auth::user()->id;
        $data['product']= $product = DB::select("select p.id, p.jdl_Pdk, p.status, p.created_at, p.updated_at, s.name, u.username from products p inner join subcategories s on p.subcategory_id = s.id inner join users u on p.freelancer_id = u.id where u.id = ".$id);

        return view('freelancer.product.product_list', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cat = Category::all();

        return view('freelancer.product.product_create', compact('cat'));
    }

    public function findSubCategoryname($id)
    {
        //echo "ID "+$id;
        $data=Subcategory::select('name','id')->where('category_id', $id)->take(100)->get();
        // $data = ['ID' => $id];
        return response()->json($data);
        //response()->json($data);
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
        if(!Helper::checkFreelancer()){return view('error.403');}
        $id = Auth::user()->id;
        $file=$request->file('images');
        $filename = $file->getClientOriginalName();
       // return $filename;

        $file->move(public_path().'/uploads/',$filename);
        $data = $request-> all();
        $data['images']= $filename;
        //return $data;
        $datas = array(
          'freelancer_id'  => $id,
          'jdl_Pdk'        => $request->input('jdl_Pdk'),
          'harga_awal'     => $request->input('harga_awal'),
          'subcategory_id' => $request->input('subcategory_id'),
          'description'    => $request->input('description'),
          'images'         => $data['images']
        );
        // return $datas;
        Product::create($datas);
        return redirect()->route('product.index')->with('success', "The product <strong>Product</strong> has successfully been created.");
        
        
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
        if(!Helper::checkFreelancer()){return view('error.403');}
        $data['product'] = Product::find($id);
        return view('freelancer.product.product_delete', $data);
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
        if(!Helper::checkFreelancer()){return view('error.403');}
        $data['cat'] = Category::all();
        $data['product'] = Product::find($id);
         // return $data['product'];
        return view('freelancer.product.product_edit',$data);
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
        if(!Helper::checkFreelancer()){return view('error.403');}
        $file=$request->file('images');
        $filename = $file->getClientOriginalName();
       // return $filename;

        $file->move(public_path().'/uploads/',$filename);
        $data = $request-> all();
        $data['images']= $filename;
        //return $data;
        $product = Product::find($id);
        // return [$data, $product];
        $product -> update($data);
        return redirect()->route('product.index')->with('success', "The product <strong>Product</strong> has successfully been updated.");
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
        if(!Helper::checkFreelancer()){return view('error.403');}
        try{
            $product = Product::find($id);
            // return $product;
            $product->delete();

            return redirect()->route('product.index')->with('success', "The product <strong>Product</strong> has successfully been archived.");
        }
        catch(ModelNotFoundException $ex){
            if ($ex instanceof  ModelNotFoundException) {
                return response()->view('errors.'.'404');
            }
        }

    }
}
