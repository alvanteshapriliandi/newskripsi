<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use DB;
use App\Models\Messages;

class MasukController extends Controller
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
        $data['message_in'] = db::select('select u.email, m.id, m.fr_user_id, m.subject, m.message, m.created_at from messages m join users u on m.fr_user_id = u.id where m.to_user_id = '.$id);
        return view('admin.messages.inbox.inbox_list',$data);
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
        $data = $request-> all();
        
        if ($request->file('images')) {
            $file=$request->file('images');
            $filename = $file->getClientOriginalName();
            $file->move(public_path().'/messages/',$filename);
            $data['images']= $filename;
        }
        $id = Auth::user()->id;
        $user = db::select('select * from users u where u.email ="'.$request->input('email').'"');
        // $to_user_id = $user[0]->id;
            $datas = array(
              'fr_user_id'     => $id,
              'to_user_id'     => $request->input('to_user_id'),
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $tempin = db::select('select u.email, u.username, m.id, m.fr_user_id, m.subject, m.message, m.images, m.created_at, m.updated_at from messages m join users u on m.fr_user_id = u.id where m.id = '.$id);
        // return $temp;
        $data['message_in'] = $tempin[0];
        // return $data;
        return view('admin.messages.inbox.inbox_view',$data);
        
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
