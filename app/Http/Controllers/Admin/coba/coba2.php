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
        $user = 'root';
        $pass = '';
        $dbnm = 'new_again';
        try {
            $dbh = new PDO('mysql:host=localhost;dbname='.$dbnm, $user, $pass);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        $stmt = $dbh->prepare("INSERT INTO mats (
            subcategory_id,
            jlh_pesanan, 
            jns_finishing, 
            harga,
            -- jns_kertas,  
            -- bentuk,  
            -- ukuran,  
            -- tipe_jilid,  
            -- jlh_lembar,  
            -- jns_material,    
            -- model_cetak,
            -- bahan,  
            -- sisi,    
            -- jns_mug, 
            -- model_bantal,    
            -- jenis_kain,  
            -- cetak_belakang,  
            -- cetak_depan, 
            -- cetak_kanan, 
            -- cetak_kiri,
            -- _token

        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        $stmt->bindParam(1, $subcategory_id);
        $stmt->bindParam(2, $jlh_pesanan);
        $stmt->bindParam(3, $jns_finishing);
        $stmt->bindParam(4, $harga);
        // $stmt->bindParam(5, $jns_kertas);
        // $stmt->bindParam(6, $bentuk);
        // $stmt->bindParam(7, $ukuran);
        // $stmt->bindParam(8, $tipe_jilid);
        // $stmt->bindParam(9, $jlh_lembar);
        // $stmt->bindParam(10, $jns_material);
        // $stmt->bindParam(11, $model_cetak);
        // $stmt->bindParam(12, $bahan);
        // $stmt->bindParam(13, $sisi);
        // $stmt->bindParam(14, $jns_mug);
        // $stmt->bindParam(15, $model_bantal);
        // $stmt->bindParam(16, $jenis_kain);
        // $stmt->bindParam(17, $cetak_belakang);
        // $stmt->bindParam(18, $cetak_depan);
        // $stmt->bindParam(19, $cetak_kanan);
        // $stmt->bindParam(20, $cetak_kiri);
        // $stmt->bindParam(20, $token);
        $arr = $_POST; 
        for($i = 0; $i <= count($arr['jlh_pesanan'])-1;$i++){
            $jns_finishing      = $arr['jns_finishing'][$i];
            $jlh_pesanan        = $arr['jlh_pesanan'][$i];
            $subcategory_id     = $arr['subcategory_id'][$i];
            // if (isset($arr['jlh_pesanan'][$i])) {
            //     $jlh_pesanan        = $arr['jlh_pesanan'][$i];
            // }
            // if (isset($arr['jns_finishing'][$i])) {
            //     $jns_finishing      = $arr['jns_finishing'][$i];
            // }
            $harga              = $arr['harga'][$i];
            // if (isset($arr['jns_kertas'][$i])) {
            //     $jns_kertas         = $arr['jns_kertas'][$i];
            // }
            // if (isset($arr['bentuk'][$i])) {
            //     $bentuk             = $arr['bentuk'][$i];
            // }
            // if (isset($arr['ukuran'][$i])) {
            //     $ukuran             = $arr['ukuran'][$i];
            // }
            // if (isset($arr['tipe_jilid'][$i])) {
            //     $tipe_jilid         = $arr['tipe_jilid'][$i];
            // }
            // if (isset($arr['jlh_lembar'][$i])) {
            //    $jlh_lembar         = $arr['jlh_lembar'][$i];
            // }
            // if (isset($arr['jns_material'][$i])) {
            //     $jns_material       = $arr['jns_material'][$i];
            // }
            // if (isset($arr['model_cetak'][$i])) {
            //     $model_cetak        = $arr['model_cetak'][$i];
            // }
            // if (isset($arr['bahan'][$i])) {
            //     $bahan              = $arr['bahan'][$i];
            // }
            // if (isset($arr['sisi'][$i])) {
            //     $sisi               = $arr['sisi'][$i];
            // }
            // if (isset($arr['jns_mug'][$i])) {
            //     $jns_mug            = $arr['jns_mug'][$i];
            // }
            // if (isset($arr['model_bantal'][$i])) {
            //     $model_bantal       = $arr['model_bantal'][$i];
            // }
            // if (isset($arr['jenis_kain'][$i])) {
            //     $jenis_kain         = $arr['jenis_kain'][$i];
            // }
            // if (isset($arr['cetak_belakang'][$i])) {
            //     $cetak_belakang     = $arr['cetak_belakang'][$i];
            // }
            // if (isset($arr['cetak_depan'][$i])) {
            //     $cetak_depan        = $arr['cetak_depan'][$i];
            // }
            // if (isset($arr['cetak_kanan'][$i])) {
            //     $cetak_kanan        = $arr['cetak_kanan'][$i];
            // }
            // if (isset($arr['cetak_kiri'][$i])) {
            //     $cetak_kiri         = $arr['cetak_kiri'][$i];
            // }
            
            return $arr;
            $stmt->execute();
        }

        // $datas = array(
        //   'jlh_pesanan'    => $request->input('jlh_pesanan'),
        //   'jns_finishing'  => $request->input('jns_finishing'),
        //   'harga'          => $request->input('harga'),
        // );

        // return $datas;
        // Material::create($datas);
        // $datas->bindParam(1, $jlh_pesanan);
        // $datas->bindParam(2, $jns_finishing);
        // $datas->bindParam(3, $harga);
        // $arr = $_POST; 
        // for($i = 0; $i <= count($arr['jlh_pesanan'])-1;$i++){
        //     $jlh_pesanan = $arr['jlh_pesanan'][$i];
        //     $jns_finishing = $arr['jns_finishing'][$i];
        //     $harga = $arr['harga'][$i];
        //     $datas->execute();
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
