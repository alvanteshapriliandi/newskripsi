<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Subcategory;
use DB;
use PDO;
use App\Models\Material;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['category'] = Category::all();
        $id = Category::find(1);
        // return $id;
        $data['subcategory'] = Subcategory::all();
        return view('admin.material.material_list',$data);
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
        $data['subcategory'] = Subcategory::find($id);
        return view('admin.material.material_create', compact('cat'));
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
// //         //
        $id = array($request->input('subcategory_id'));
        $user = 'root';
        $pass = '';
        $dbnm = 'new_again';
        try {
            $dbh = new PDO('mysql:host=localhost;dbname='.$dbnm, $user, $pass);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        $stmt = $dbh->prepare("INSERT INTO materials (subcategory_id, jlh_pesanan, jns_finishing, harga) VALUES (?, ?, ?, ?)");
        $stmt->bindParam(1, $subcategory_id);
        $stmt->bindParam(2, $jlh_pesanan);
        $stmt->bindParam(3, $jns_finishing);
        $stmt->bindParam(4, $harga);
        // $stmt->bindParam(4, $jns_kertas);
        
        $arr = $_POST; 
        for($i = 0; $i < count($arr['jlh_pesanan']);$i++){
            $subcategory_id = $arr['subcategory_id'][0];
            $jlh_pesanan = $arr['jlh_pesanan'][$i];
            $jns_finishing = $arr['jns_finishing'][$i];
            $harga = $arr['harga'][$i];
            // $jns_kertas = $arr['jns_kertas'][$i];
            // return $arr;
            $stmt->execute();
        }

        // $datas = array(
        //   'jlh_pesanan'    => $request->input('jlh_pesanan'),
        //   'jns_finishing'  => $request->input('jns_finishing'),
        //   'harga'          => $request->input('harga'),
        //   'subcategory_id' => $request->input('subcategory_id')
        // );
        // $data = $request->all();
        // // return $data;

        // for($i = 0; $i < count($datas);$i++){
            
        //     $arr = array(
        //         'jlh_pesanan'    => $datas['jlh_pesanan'],
        //         'jns_finishing'  => $datas['jns_finishing'],
        //         'harga'          => $datas['harga'],
        //         'subcategory_id' => $datas['subcategory_id']
        //     );
        //     // return $arr;
        //     Material::create([$arr]);
        // }
        
        return 'berhasil';
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
        $data['cat'] = Category::all();
        $data['subcategory'] = Subcategory::find($id);
        return view('admin.material.material_create',$data);
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
