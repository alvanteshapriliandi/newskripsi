<?php

namespace App\Http\Controllers\freelancer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Messages;
use DB;
use App\User;
use Auth;

class MessagesController extends Controller
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
        $data['message_in'] = db::select('select u.email, m.id,m.subject, m.message from messages m join users u on m.to_user_id = u.id where m.to_user_id = '.$id);
        $data['message_out'] = db::select('select u.email, m.id,m.subject, m.message from messages m join users u on m.to_user_id = u.id where m.fr_user_id = '.$id);
        // return $data;
        return view('freelancer.messages.messages_list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('freelancer.messages.messages_create');
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
            return redirect()->route('messages.index')->with('success', "The Messages <strong>Messages</strong> has successfully been Created.");
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
        return view('freelancer.messages.messages_view');
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
