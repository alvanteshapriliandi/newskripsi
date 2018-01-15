<?php

namespace App\Http\Controllers\Freelancer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\User;
use App\Models\Freelance;

class PengaturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = Auth::user()->id;
        $data['pengaturan'] = db::select('select u.*, f.no_rekening from freelances f
            join users u on u.id = f.user_id
            where f.user_id = '.$id);
        return view('freelancer.pengaturan.pangaturan_show',$data);
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
        $id = Auth::user()->id;
        $data['pengaturan'] = db::select('select u.*, f.no_rekening, f.id from freelances f
            join users u on u.id = f.user_id
            where f.user_id = '.$id);
        return view('freelancer.pengaturan.pengaturan_edit',$data);
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
        $file=$request->file('photo');
        $filename = $file->getClientOriginalName();
       // return $filename;

        $file->move(public_path().'/member/',$filename);
        $data = $request-> all();
        $data['photo']= $filename;
        //return $data;
        $freelancer = array(
          'no_rekening'  => $request->input('no_rekening'),
        );
        $free = Freelance::find($request->input('freelancer_id'));

        $user_id = Auth::user()->id;
        $users = User::find($user_id);
        $user = array(
            'username'    => $request->input('username'),
            'email'       => $request->input('email'),
            'address'     => $request->input('address'),
            'gender'      => $request->input('gender'),
            'photo'       => $data['photo']
        );

        // return $free;
        // return [$user, $freelancer];
        $free -> update($freelancer);
        $users -> update($user);
        return redirect()->route('pengaturan.index')->with('success', "<strong>Profile</strong> has successfully been updated.");
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
