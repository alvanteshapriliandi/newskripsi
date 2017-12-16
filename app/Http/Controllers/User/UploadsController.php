<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helper;
use App\User;
Use Auth;
use DB;
use App\Models\Payment;
use App\Models\Banner;
use App\Models\Bantalfoto;
use App\Models\Brosur;
use App\Models\Goodlebag;
use App\Models\Kalender;
use App\Models\Kaos;
use App\Models\Kartu;
use App\Models\Mug;
use App\Models\Office;
use App\Models\Polo;
use App\Models\Poster;
use App\Models\Stempel;
use App\Models\Stiker;

class UploadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['type'] = $_GET['type'];
        $data['invoice'] = Helper::generateRandomString(8);
        $id = Auth::user()->id;
        $data['banner'] = DB::select('select b.*, s.id as subcategory_id, s.name, p.images from banners b 
            join products p on b.BN_productid = p.id 
            join subcategories s on p.subcategory_id = s.id 
            where BN_userid ='.$id);

        $data['bantalfoto'] = DB::select('select ba.*, s.id as subcategory_id, s.name, p.images from bantalfotos ba 
            join products p on ba.BT_productid = p.id 
            join subcategories s on p.subcategory_id = s.id 
            where BT_userid ='.$id);

        $data['brosur'] = DB::select('select br.*, s.id as subcategory_id, s.name, p.images from brosurs br join products p on br.BR_productid = p.id 
            join subcategories s on p.subcategory_id = s.id 
            where BR_userid ='.$id);

        $data['goodlebag'] = DB::select('select gd.*, s.id as subcategory_id, s.name, p.images from goodlebags gd 
            join products p on gd.GD_productid = p.id 
            join subcategories s on p.subcategory_id = s.id 
            where GD_userid ='.$id);

        $data['kalender'] = DB::select('select kl.*, s.id as subcategory_id, s.name, p.images from kalenders kl join products p on kl.KL_productid = p.id 
            join subcategories s on p.subcategory_id = s.id 
            where KL_userid ='.$id);

        $data['kaos'] = DB::select('select ks.*, s.id as subcategory_id, s.name, p.images from kaos ks 
            join products p on ks.KS_productid = p.id 
            join subcategories s on p.subcategory_id = s.id 
            where KS_userid ='.$id);

        $data['kartu'] = DB::select('select kr.*, s.id as subcategory_id, s.name, p.images from kartus kr 
            join products p on kr.KR_productid = p.id 
            join subcategories s on p.subcategory_id = s.id 
            where KR_userid ='.$id);

        $data['mug'] = DB::select('select m.*, s.id as subcategory_id, s.name, p.images from mugs m 
            join products p on m.MG_productid = p.id 
            join subcategories s on p.subcategory_id = s.id 
            where MG_userid ='.$id);

        $data['office'] = DB::select('select o.*, s.id as subcategory_id, s.name, p.images from offices o 
            join products p on o.OF_productid = p.id 
            join subcategories s on p.subcategory_id = s.id 
            where OF_userid ='.$id);

        $data['polo'] = DB::select('select pl.*, s.id as subcategory_id, s.name, p.images from polos pl 
            join products p on pl.PL_productid = p.id 
            join subcategories s on p.subcategory_id = s.id 
            where PL_userid ='.$id);

        $data['poster'] = DB::select('select pt.*, s.id as subcategory_id, s.name, p.images from posters pt 
            join products p on pt.PT_productid = p.id 
            join subcategories s on p.subcategory_id = s.id 
            where PT_userid ='.$id);

        $data['stempel'] = DB::select('select sm.*, s.id as subcategory_id, s.name, p.images from stempels sm
            join products p on sm.SM_productid = p.id 
            join subcategories s on p.subcategory_id = s.id 
            where SM_userid ='.$id);

        $data['stiker'] = DB::select('select st.*, s.id as subcategory_id, s.name, p.images from stikers st 
            join products p on st.ST_productid = p.id 
            join subcategories s on p.subcategory_id = s.id 
            where ST_userid ='.$id);
        // return $data;
        return view('user.uploads.uploads',$data);
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
        $file->move(public_path().'/pembayaran/',$filename);
        $data = $request-> all();
        $data['images']= $filename;
        $datas = array(
            'user_id'    => $id, 
            'BN_ID'      => $request->input('BN_ID'),
            'BT_ID'      => $request->input('BT_ID'),   
            'BR_ID'      => $request->input('BR_ID'),   
            'GD_ID'      => $request->input('GD_ID'),   
            'KL_ID'      => $request->input('KL_ID'),   
            'KS_ID'      => $request->input('KS_ID'),   
            'KR_ID'      => $request->input('KR_ID'),   
            'MG_ID'      => $request->input('MG_ID'),   
            'OF_ID'      => $request->input('OF_ID'),   
            'PL_ID'      => $request->input('PL_ID'),   
            'PT_ID'      => $request->input('PT_ID'),   
            'SM_ID'      => $request->input('SM_ID'),   
            'ST_ID'      => $request->input('ST_ID'),
            'kd_invoice' => $request->input('kd_invoice'),
            'namaBank'   => $request->input('namaBank'),    
            'alamat'     => $request->input('alamat'),  
            'kelurahan'  => $request->input('kelurahan'), 
            'kecamatan'  => $request->input('kecamatan'),
            'kota'       => $request->input('kota'),
            'images'     => $data['images']
        );
        // return $datas;
        Payment::create($datas);

        $banner = Banner::find($datas['BN_ID']);
        if ($banner) {
            $banner->BN_status=1;
            $banner->save();
        }   

        $bantalfoto = Bantalfoto::find($datas['BT_ID']);
        if ($bantalfoto) {
            $bantalfoto->BT_status=1;
            $bantalfoto->save();
        }
        

        $brosur = Brosur::find($datas['BR_ID']);
        if ($brosur) {
            $brosur->BR_status=1;
            $brosur->save();
        }
        

        $goodlebag = Goodlebag::find($datas['GD_ID']);
        if ($goodlebag) {
            $goodlebag->GD_status=1;
            $goodlebag->save();
        }
        

        $kalender = Kalender::find($datas['KL_ID']);
        if ($kalender) {
            $kalender->KL_status=1;
            $kalender->save();
        }
        

        $kaos = Kaos::find($datas['KS_ID']);
        if ($kaos) {
            $kaos->KS_status=1;
            $kaos->save();
        }
        

        $kartu = Kartu::find($datas['KR_ID']);
        if ($kartu) {
            $kartu->KR_status=1;
            $kartu->save();
        }
        

        $mug = Mug::find($datas['MG_ID']);
        if ($mug) {
            $mug->MG_status=1;
            $mug->save();
        }
        

        $office = Office::find($datas['OF_ID']);
        if ($office) {
            $office->OF_status=1;
        $office->save();
        }
        

        $polo = Polo::find($datas['PL_ID']);
        if ($polo) {
            $polo->PL_status=1;
            $polo->save();
        }
        

        $poster = Poster::find($datas['PT_ID']);
        if ($poster) {
            $poster->PT_status=1;
            $poster->save();
        }
        

        $stempel = Stempel::find($datas['SM_ID']);
        if ($stempel) {
            $stempel->SM_status=1;
            $stempel->save();
        }
        

        $stiker = Stiker::find($datas['ST_ID']);
        if ($stiker) {
            $stiker->ST_status=1;
            $stiker->save();
        }
        
        return redirect()->route('proses.index');
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
