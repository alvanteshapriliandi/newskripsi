<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\User;
use Auth;
use App\Helper;
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
use App\Models\Product;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
     {
         $this->middleware('auth');
     }
    
    public function index()
    {
        //
        if(!Helper::checkUser()){return view('error.403');}
        $id = Auth::user()->id;
        $data['banner'] = DB::select('select b.*, s.id as subcategory_id, s.name, p.images from banners b join products p on b.BN_productid = p.id join subcategories s on p.subcategory_id = s.id where BN_userid ='.$id);

        $data['bantalfoto'] = DB::select('select ba.*, s.id as subcategory_id, s.name, p.images from bantalfotos ba join products p on ba.BT_productid = p.id join subcategories s on p.subcategory_id = s.id where BT_userid ='.$id);

        $data['brosur'] = DB::select('select br.*, s.id as subcategory_id, s.name, p.images from brosurs br join products p on br.BR_productid = p.id join subcategories s on p.subcategory_id = s.id where BR_userid ='.$id);

        $data['goodlebag'] = DB::select('select gd.*, s.id as subcategory_id, s.name, p.images from goodlebags gd join products p on gd.GD_productid = p.id join subcategories s on p.subcategory_id = s.id where GD_userid ='.$id);

        $data['kalender'] = DB::select('select kl.*, s.id as subcategory_id, s.name, p.images from kalenders kl join products p on kl.KL_productid = p.id join subcategories s on p.subcategory_id = s.id where KL_userid ='.$id);

        $data['kaos'] = DB::select('select ks.*, s.id as subcategory_id, s.name, p.images from kaos ks join products p on ks.KS_productid = p.id join subcategories s on p.subcategory_id = s.id where KS_userid ='.$id);

        $data['kartu'] = DB::select('select kr.*, s.id as subcategory_id, s.name, p.images from kartus kr join products p on kr.KR_productid = p.id join subcategories s on p.subcategory_id = s.id where KR_userid ='.$id);

        $data['mug'] = DB::select('select m.*, s.id as subcategory_id, s.name, p.images from mugs m join products p on m.MG_productid = p.id join subcategories s on p.subcategory_id = s.id where MG_userid ='.$id);

        $data['office'] = DB::select('select o.*, s.id as subcategory_id, s.name, p.images from offices o join products p on o.OF_productid = p.id join subcategories s on p.subcategory_id = s.id where OF_userid ='.$id);

        $data['polo'] = DB::select('select pl.*, s.id as subcategory_id, s.name, p.images from polos pl join products p on pl.PL_productid = p.id join subcategories s on p.subcategory_id = s.id where PL_userid ='.$id);

        $data['poster'] = DB::select('select pt.*, s.id as subcategory_id, s.name, p.images from posters pt join products p on pt.PT_productid = p.id join subcategories s on p.subcategory_id = s.id where PT_userid ='.$id);

        $data['stempel'] = DB::select('select sm.*, s.id as subcategory_id, s.name, p.images from stempels sm join products p on sm.SM_productid = p.id join subcategories s on p.subcategory_id = s.id where SM_userid ='.$id);

        $data['stiker'] = DB::select('select st.*, s.id as subcategory_id, s.name, p.images from stikers st join products p on st.ST_productid = p.id join subcategories s on p.subcategory_id = s.id where ST_userid ='.$id);
        // return $data;
        return view('user.checkout.checkout_list', $data);
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
        $data['banner'] = Banner::find($id);
        return $data;
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
        try{
            
            $banner = Banner::find(5);
            $bantalfoto = Bantalfoto::find($id);
            $brosur = Brosur::find($id);
            $goodlebag = Goodlebag::find($id);
            $kalender = Kalender::find($id);
            $kaos = Kaos::find($id);
            $mug = Mug::find($id);
            $office = Office::find($id);
            $polo = Polo::find($id);
            $poster = Poster::find($id);
            $stempel = Stempel::find($id);
            $stiker = Stiker::find($id); 
            // return $stempel;
            $banner->delete();
            $bantalfoto->delete();
            $goodlebag->delete();
            $kalender->delete();
            $kaos->delete();
            $mug->delete();
            $office->delete();
            $polo->delete();
            $stempel->delete();
            $stiker->delete();
            
            return redirect()->route('checkout.index');    
        }
        catch(ModelNotFoundException $ex){
            if ($ex instanceof  ModelNotFoundException) {
                return response()->view('errors.'.'404');
            }
        }
    }
}
