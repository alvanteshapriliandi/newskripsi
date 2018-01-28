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
//         //
        $user = 'root';
        $pass = '';
        $dbnm = 'new_again';
        try {
            $dbh = new PDO('mysql:host=localhost;dbname='.$dbnm, $user, $pass);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        $stmt = $dbh->prepare("INSERT INTO materials (jlh_pesanan, jns_finishing, harga) VALUES (?, ?, ?)");
        $stmt->bindParam(1, $jlh_pesanan);
        $stmt->bindParam(2, $jns_finishing);
        $stmt->bindParam(3, $harga);
        $arr = $_POST; 
        for($i = 0; $i <= count($arr['jlh_pesanan'])-1;$i++){
            $jlh_pesanan = $arr['jlh_pesanan'][$i];
            $jns_finishing = $arr['jns_finishing'][$i];
            $harga = $arr['harga'][$i];
            return $arr;
            $stmt->execute();
        }

        // $datas = array(
        //   'jlh_pesanan'    => $request->input('jlh_pesanan'),
        //   'jns_finishing'  => $request->input('jns_finishing'),
        //   'harga'          => $request->input('harga'),
        // );
        // $arr = $_POST; 
        // for($i = 0; $i <= count($arr['jlh_pesanan'])-1;$i++){
        //     $jlh_pesanan = $arr['jlh_pesanan'][$i];
        //     $jns_finishing = $arr['jns_finishing'][$i];
        //     $harga = $arr['harga'][$i];
        //     $stmt->execute();
        // }
        // return $datas;
        // Material::create($datas);
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
