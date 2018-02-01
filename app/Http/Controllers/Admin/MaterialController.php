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
        $data['subcategory'] = db::table('subcategories')->paginate(9);
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
        $bentuk = db::select("select * from bentuk");
        $data['subcategory'] = Subcategory::find($id);
        return view('admin.material.material_create', compact('bentuk'));
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
        $stmt = $dbh->prepare("
            INSERT INTO materials (subcategory_id, satuan, jlh_pesanan, jns_finishing, harga, jns_kertas, bentuk, ukuran, tipe_jilid, jlh_lembar, jns_material, model_pegangan, bahan, sisi, jns_mug, model_bantal, jenis_kain, cetak_belakang, cetak_depan, cetak_lengan, cetak_kiri, berat ) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )
        ");
        $stmt->bindParam(1, $subcategory_id);
        $stmt->bindParam(2, $satuan);
        $stmt->bindParam(3, $jlh_pesanan);
        $stmt->bindParam(4, $jns_finishing);
        $stmt->bindParam(5, $harga);
        $stmt->bindParam(6, $jns_kertas);
        $stmt->bindParam(7, $bentuk);
        $stmt->bindParam(8, $ukuran);
        $stmt->bindParam(9, $tipe_jilid);
        $stmt->bindParam(10, $jlh_lembar);
        $stmt->bindParam(11, $jns_material);
        $stmt->bindParam(12, $model_pegangan);
        $stmt->bindParam(13, $bahan);
        $stmt->bindParam(14, $sisi);
        $stmt->bindParam(15, $jns_mug);
        $stmt->bindParam(16, $model_bantal);
        $stmt->bindParam(17, $jenis_kain);
        $stmt->bindParam(18, $cetak_belakang);
        $stmt->bindParam(19, $cetak_depan);
        $stmt->bindParam(20, $cetak_lengan);
        $stmt->bindParam(21, $cetak_kiri);
        $stmt->bindParam(22, $berat);


        // $stmt->bindParam(4, $jns_kertas);
        
        $arr = $_POST; 
        for($i = 0; $i < count($arr['jlh_pesanan']);$i++){
            $subcategory_id = $arr['subcategory_id'][0];
            if ($subcategory_id == 1 | $subcategory_id == 2 | $subcategory_id == 3 ) {
                $satuan = "Kotak";
            }
            elseif ($subcategory_id == 5) {
                $satuan = "Pics ";
            }
            elseif ($subcategory_id == 4 | $subcategory_id == 7 | $subcategory_id == 9 ) {
                $satuan = "Rim ";
            }
            elseif ($subcategory_id == 6 | $subcategory_id == 8 | $subcategory_id == 11 | $subcategory_id == 12 | $subcategory_id == 13 | $subcategory_id == 14 | $subcategory_id == 15 ) {
                $satuan = "Buah ";
            }
            else{
                $satuan = "Lusin ";
            }
            $jlh_pesanan = $arr['jlh_pesanan'][$i];
            $jns_finishing = $arr['jns_finishing'][$i];
            $harga = $arr['harga'][$i];
            if (isset($arr['jns_kertas'][$i])) {
                $jns_kertas = $arr['jns_kertas'][$i];
            }
            if (isset($arr['bentuk'][$i])) {
                $bentuk = $arr['bentuk'][$i];
            }
            if (isset($arr['jns_kertas'][$i])) {
                $jns_kertas = $arr['jns_kertas'][$i];
            }
            if (isset($arr['bentuk'][$i])) {
                $bentuk = $arr['bentuk'][$i];
            }
            if (isset($arr['ukuran'][$i])) {
                $ukuran = $arr['ukuran'][$i];
            }
            if (isset($arr['tipe_jilid'][$i])) {
                $tipe_jilid = $arr['tipe_jilid'][$i];
            }
            if (isset($arr['jlh_lembar'][$i])) {
                $jlh_lembar = $arr['jlh_lembar'][$i];
            }
            if (isset($arr['jns_material'][$i])) {
                $jns_material = $arr['jns_material'][$i];
            }
            if (isset($arr['model_pegangan'][$i])) {
                $model_pegangan = $arr['model_pegangan'][$i];
            }
            if (isset($arr['bahan'][$i])) {
                $bahan = $arr['bahan'][$i];
            }
            if (isset($arr['sisi'][$i])) {
                $sisi = $arr['sisi'][$i];
            }
            if (isset($arr['jns_mug'][$i])) {
                $jns_mug = $arr['jns_mug'][$i];
            }
            if (isset($arr['model_bantal'][$i])) {
                $model_bantal = $arr['model_bantal'][$i];
            }
            if (isset($arr['jenis_kain'][$i])) {
                $jenis_kain = $arr['jenis_kain'][$i];
            }
            if (isset($arr['cetak_belakang'][$i])) {
                $cetak_belakang = $arr['cetak_belakang'][$i];
            }
            if (isset($arr['cetak_depan'][$i])) {
                $cetak_depan = $arr['cetak_depan'][$i];
            }
            if (isset($arr['cetak_belakang'][$i])) {
                $cetak_belakang = $arr['cetak_belakang'][$i];
            }
            if (isset($arr['cetak_lengan'][$i])) {
                $cetak_depan = $arr['cetak_depan'][$i];
            }
            if (isset($arr['cetak_kiri'][$i])) {
                $cetak_kiri = $arr['cetak_kiri'][$i];
            }
            $berat = $arr['berat'][$i];
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
        
        return redirect()->route('material.edit',['id'=>$subcategory_id])->with('success', "The Material <strong>Material</strong> has successfully been Created.");
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
        $data['bentuk'] = db::select("select * from bentuk");
        $data['subcategory'] = Subcategory::find($id);
        return view('admin.material.material_create',$data);
    }
     public function find($id)
    {
        //echo "ID "+$id;
        // $data=Subcategory::select('name','id')->where('category_id', $id)->take(100)->get();
        $datas = db::select('select u.ukuran_bantal, u.id from ukuran_bantal u where bentuk_id = ',$id);
        // $data = ['ID' => $id];
        return response()->json($datas);
        //response()->json($data);
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
        $data['material'] = db::select('select m.id, s.name, m.jlh_pesanan, m.satuan, .m.jns_finishing, m.harga from materials m
            join subcategories s on s.id = m.subcategory_id
            where m.subcategory_id = '.$id);
        // return $data;
        return view('admin.material.material_edit',$data);
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
