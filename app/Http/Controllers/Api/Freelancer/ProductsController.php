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
use App\Image;
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
       //  $file=$request->file('images');
       //  // return 'hai';
       //  $filename = $file->getClientOriginalName();
       // // return $filename;

       //  $file->move(public_path().'/uploads/',$filename);
       //  $data = $request-> all();
       //  $data['images']= $filename;
       //  //return $data;
        $datas = Product::create([
          'freelancer_id'  => $id,
          'jdl_Pdk'        => $request->input('jdl_Pdk'),
          'harga_awal'     => $request->input('harga_awal'),
          'subcategory_id' => $request->input('subcategory_id'),
          'description'    => $request->input('description')
        ]);
        // foreach ($request->images as $photo) {
        //     $filename = $photo->store('images');
        //     // return $datas->id;
        //     Image::create([
        //         'product_id' => $datas->id,
        //         'images' => $filename
        //     ]);

        // }
        $images=array();
        if($files=$request->file('images')){
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $file->move(public_path().'/uploads/',$name);
                $images[]=$name;
                // return $images;
                Image::insert( [
                    'images'=>  $images[]=$name,
                    'product_id' =>$datas->id,
                    //you can put other insertion here
                ]);
            }
        }
        /*Insert your data*/

        

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
        // return 'hai';
        $data['cat'] = Category::all();
        $data['products'] = db::select('select c.cat_name, s.id, s.name, p.* from products p
            join subcategories s on s.id = p.subcategory_id
            join categories c on c.id = s.category_id
            where p.id = '.$id);
        $data['images'] = db::select('select * from images i where i.product_id = '.$id);
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
       //  $file=$request->file('images');
       //  $filename = $file->getClientOriginalName();
       // // return $filename;

       //  $file->move(public_path().'/uploads/',$filename);
       //  $data = $request-> all();
       //  $data['images']= $filename;
       //  //return $data;
       //  $product = Product::find($id);
       //  // return [$data, $product];
       //  $product -> update($data);
        $datas = $request-> all();
        $datas = DB::table('products')
                    ->where('id', '=', $id)
                    ->update([
          'freelancer_id'  => $id,
          'jdl_Pdk'        => $request->input('jdl_Pdk'),
          'harga_awal'     => $request->input('harga_awal'),
          'subcategory_id' => $request->input('subcategory_id'),
          'description'    => $request->input('description')
        ]);
        $images=array();
        if($files=$request->file('images')){
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $file->move(public_path().'/uploads/',$name);
                $images[]=$name;
                // return $images;
                Image::insert( [
                    'images'=>  $images[]=$name,
                    'product_id' =>$datas->id,
                    //you can put other insertion here
                ]);
            }
        }
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
        return 'hai';

    }
    public function showImage($id)
    {
        $data['imageslist'] = db::select('select * from images i where i.product_id = '.$id);
        return view('freelancer.product.product_create',$data);
    }
    public function deleteImg($id)
    {
        return 'hai';
        $images = Image::find($id);
        return $images;
    }
}
