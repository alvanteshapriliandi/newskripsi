<?php
namespace App\Http\Controllers\Api\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\User;
use App\Models\Orders;
use App\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $product = Product::where('status','=','1')->orderBy('created_at', 'asc')->with('images')->paginate(12);
      $product = Product::with(['images', 'materials'])->paginate(12);
                
      return response()->json($product);
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
        $id = Auth::user()->id;
        $file=$request->file('images');
        $filename = $file->getClientOriginalName();
        $file->move(public_path().'/orders/',$filename);
        $data = $request-> all();
        $data['images']= $filename;
        $datas = array(
            'user_id'           => $request->input('user_id'),
            'product_id'        => $request->input('productid'),
            'Transaction_id'    => $request->input('Transaction_id'),
            'nama'              => $request->input('nama'),
            'jabatan'           => $request->input('jabatan'),
            'nama_perushaan'    => $request->input('nama_perushaan'),
            'alamat'            => $request->input('alamat'),
            'no_telepon'        => $request->input('no_telepon'),
            'email'             => $request->input('email'),
            'jenis_kertas'      => $request->input('jenis_kertas'),
            'kuantitas'         => $request->input('kuantitas'),
            'model'             => $request->input('model'),
            'kain'              => $request->input('kain'),
            'ukuran'            => $request->input('ukuran'),
            'warna'             => $request->input('warna'),
            'jenis_cetak'       => $request->input('jenis_cetak'),
            'bahan'             => $request->input('bahan'),
            'sisi'              => $request->input('sisi'),
            'jilid'             => $request->input('jilid'),
            'lembar'            => $request->input('lembar'),
            'cetak_depan'       => $request->input('cetak_depan'),
            'cetak_belakang'    => $request->input('cetak_belakang'),
            'cetak_lengan_kanan'=> $request->input('cetak_lengan_kanan'),
            'cetak_lengan_kiri' => $request->input('cetak_lengan_kiri'),
            'kaos_metode'       => $request->input('kaos_metode'),
            'images'            => $data['images'],
            'description'       => $request->input('description'),
            'total'             => $request->input('total'),
        );  
        // return $datas;
        // return $order;
        Orders::create($datas);
        return response()->json($datas);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $product = Product::with('images')
                    ->join('users', 'products.freelancer_id', '=', 'users.id')
                    ->join('subcategories','subcategories.id', '=', 'products.subcategory_id')
                    ->select('products.*', 'users.username', 'subcategories.name', 'users.photo')  
                    ->where('products.id', '=', $id)
                    ->first();
      

      return response()->json($product);
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
        $product = DB::table('products')->where('id', '=', $id)->delete();
        return response()->json('code =', 200);
    }

    public function products() 
    {
      $product = DB::table('products')->get();

      return response()->json($product);
    }

    public function productsFreelancer($id) 
    {
      $product = Product::with(['images', 'materials'])->where('freelancer_id', '=', $id)->paginate(6);
      return response()->json($product);
    }

    public function rating($id) {
      $total = 0;
      $datas = DB::table('ulasans')->join('products', 'ulasans.product_id', '=', 'products.id')
                                  ->where('products.freelancer_id', '=', $id)
                                  ->get();
      foreach($datas as $data) {
        $total += $data->rate;
      }

      $average = $total/count($datas);

      return response()->json([
        'rate'=> $average
      ]);
    }
}