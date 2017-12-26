<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use DB;
use App\Models\Messages;

class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.messages.new.new_create');   
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
        $data = $request-> all();
        
        if ($request->file('images')) {
            $file=$request->file('images');
            $filename = $file->getClientOriginalName();
            $file->move(public_path().'/messages/',$filename);
            $data['images']= $filename;
        }
        $id = Auth::user()->id;
        $user = db::select('select * from users u where u.email ="'.$request->input('email').'"');
        if($user){
            $to_user_id = $user[0]->id;
            $datas = array(
              'fr_user_id'     => $id,
              'to_user_id'     => $to_user_id,
              'subject'        => $request->input('subject'),
              'message'        => $request->input('message'),
            );
            if ($request->file('images')) {
                $datas['images'] = $data['images'];
            }
            // return $datas;
            Messages::create($datas);
            return redirect()->route('outbox-message.index')->with('success', "The Messages <strong>Messages</strong> has successfully been Created.");
        }
        else{
            return "user tidak ditemukkan";
        }
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
