<?php

namespace App\Http\Controllers\Freelancer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Freelance;
use App\User;
use Auth;
use App\Helper;

class FreelanceRegisterController extends Controller
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
        if(!Helper::checkFreelancer()){return view('error.403');}
        $id = Auth::user()->id;
        $product = DB::select('SELECT COUNT(p.id) total FROM products p where p.id = '.$id);
        return view('freelancer.product.product_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if(!Helper::checkUser()){return view('error.403');}
      if(Helper::checkFreelancer()){
        return redirect('/freelance');
      }
      return view('user.freelanceRegister');
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
        $file->move(public_path().'/uploads/',$filename);
        $data = $request-> all();
        $data['images']= $filename;
        $datas = array(
          'user_id' => $id ,
          'no_tlp' => $request->input('no_tlp'),
          'no_rekening' => $request->input('no_rekening'),
          'alamat' => $request->input('alamat'),
          'images' => $data['images']
        );
        // return $datas;
        Freelance::create($datas);
        $user = User::find($id);
        $user->role=2;
        $user->save();
        return redirect('/freelance');
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

        // $data['user'] = User::find('id');
        // return view('user.freelanceRegis',$data);
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
