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
        $data['order_message'] = db::select('select u.username, o.id, o.status, i.images, p.jdl_Pdk, o.created_at from orders o
            join products p on p.id = o.product_id
            join images i on i.product_id = p.id
            join transaction t on t.id = o.transaction_id
            join users u on u.id = t.user_id
            where p.freelancer_id = '.$id.' limit 1');
        // return $data;
        // $data['message_in'] = db::select('select u.email, m.id,m.subject, m.message from messages m join users u on m.to_user_id = u.id where m.to_user_id = '.$id);
        // $data['message_out'] = db::select('select u.email, m.id,m.subject, m.message from messages m join users u on m.to_user_id = u.id where m.fr_user_id = '.$id);
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
        // $user = db::select('select * from users u where u.email ="'.$request->input('email').'"');
        // $to_user_id = $user[0]->id;
        $datas = array(
            'fr_user_id'     => $id,
            'to_user_id'     => $request->input('user_id'),
            'order_id'       => $request->input('order_id'),
            'message'        => $request->input('message'),
            'images'         => $data['images']
        );
        if ($request->file('images')) {
            $datas['images'] = $data['images'];
        }
        // return $datas;
        Messages::create($datas);
            return redirect()->route('message.show',['id'=>$data['order_id']]);
        
        
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
        $messages_id = Auth::user()->id;
        $data['message_in'] = db::select('select u.email, u.username, m.id, m.fr_user_id, m.images, m.message, m.created_at from messages m 
            join users u on m.fr_user_id = u.id 
            where m.to_user_id = '.$messages_id.'
            order by m.created_at desc');
        // return $data;
        $data['message_out'] = db::select('select u.*, m.id, m.images, m.message, m.created_at, m.updated_at from messages m 
            join users u on m.to_user_id = u.id
            join orders o on o.id = m.order_id 
            where m.fr_user_id = '.$messages_id.'
            and o.id = '.$id);
        $data['orders'] = db::select('select o.id, o.ket, t.user_id, u.username from orders o
            join transaction t on t.id = o.transaction_id
            join users u on u.id = t.user_id
            where o.id = '.$id);
        // return $data['orders'];
        return view('freelancer.messages.messages_view',$data);
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
