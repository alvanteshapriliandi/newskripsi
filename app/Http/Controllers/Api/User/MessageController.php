<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use DB;
use App\Message;
use App\Order;
use App\Models\Cetak;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    public function index()
    {
        //
        $id = Auth::user()->id;
        // $data['order_message'] = db::select('select o.id as, o.created_at, p.images, u.username, p.jdl_Pdk, p.id as product_id, p.freelancer_id, s.username as freelance from orders o
        //     join products p on p.id = o.product_id
        //     join freelances f on p.freelancer_id = f.id
        //     join users s on f.user_id = s.id
        //     join images i on i.product_id = p.id
        //     join transaction t on t.id = o.transaction_id
        //     join users u on t.user_id = u.id
            
        //     where t.user_id = '.$id);
        $data = DB::table('orders')->join('messages', 'messages.order_id', '=', 'orders.id')
                                  -> join('products', 'orders.product_id', '=', 'products.id')
                                  ->join('freelances', 'products.freelancer_id', '=', 'freelances.id')
                                  ->join('users', 'freelances.id', '=', 'users.id')
                                  // ->join('images', 'products.id', '=', 'images.product_id')
                                  ->join('transaction', 'orders.transaction_id', '=', 'transaction.id')
                                  // ->join('users', 'transaction.user_id', '=', 'users.id')
                                  ->where('transaction.user_id', '=', $id)
                                  ->select('orders.id as id', 'orders.created_at', 'products.images', 'users.username', 'products.jdl_Pdk', 'products.id as product_id', 'products.freelancer_id', 'users.username as freelance')
                                  ->distinct()
                                  ->get();
        return response()->json($data);
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
            'to_user_id'     => $request->input('user_id'),
            'order_id'       => $request->input('order_id'),
            'message'        => $request->input('message'),
            'images'         => $data['images']
        );
        if ($request->file('images')) {
            $datas['images'] = $data['images'];
        }
            // return $datas;
        Message::create($datas);
        return response()->json($datas);
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
        // $user_id = Auth::user()->id;
        // $data['message_in'] = db::select('select u.email, u.username, m.id, m.fr_user_id, m.images, m.message, m.created_at from messages m 
        //     join users u on m.fr_user_id = u.id   
        //     where m.to_user_id = '.$user_id);
        // // return $data;
        // $data['message_out'] = db::select('select u.*, m.id, m.images, m.message, m.created_at, m.updated_at from messages m 
        //     join users u on m.to_user_id = u.id
        //     join orders o on o.id = m.order_id 
        //     where m.fr_user_id = '.$user_id.'
        //     and o.id = '.$id);
        // $data['orders'] = db::select('select o.id, o.ket, t.user_id, u.username from orders o
        //     join transaction t on t.id = o.transaction_id
        //     join users u on u.id = t.user_id
        // //     where o.id = '.$id);
        $data = DB::table('messages')->join('orders', 'messages.order_id', '=', 'orders.id')
                                      ->join('products', 'orders.product_id', '=', 'products.id')
                                      ->join('freelances', 'products.freelancer_id', '=', 'freelances.id')
                                      ->join('users', 'freelances.user_id', '=', 'users.id')
                                      ->select('messages.*', 'users.username as freelance', 'freelances.id as freelances_id', 'orders.ket')
                                      ->where('order_id', '=', $id)->get();
        return response()->json($data);
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

    public function getOrder() {
      
    }

    public function sendMessage(Request $request) {

      $fileName= '';

      if($request->images) {
        $explode = explode(',' , $request->images);
        $decoded = base64_decode($explode[1]);

        if(str_contains($explode[0], 'jpg')) {
          $extension = 'jpg';
        } else {
          $extension = 'png';
        }
  
        $fileName = str_random().'.'.$extension;
  
        $path = public_path().'/messages/'.$fileName;
  
        file_put_contents($path, $decoded);
      }

      
     
      $message = Message::create([
        'fr_user_id' => Auth::user()->id,
        'to_user_id' => $request->to_user_id,
        'order_id' => $request->order_id,
        'message' => $request->message,
        'images' => $fileName
      ]);
      $data = DB::table('messages')->where('id','=', $message->id)->first();
      return response()->json($data);
    }

    public function perubahan(Request $request) {
      $message = Message::create([
        'fr_user_id' => Auth::user()->id,
        'to_user_id' => $request->to_user_id,
        'order_id' => $request->order_id,
        'message' => $request->message,
        'images' => $request->image
      ]);
      $order = Order::find($request->order_id);
      $order->ket -= 1;
      $order->save();

      return response()->json($order);
    }

    public function setuju (Request $request) 
    {
      $cetak = Cetak::create([
        'order_id' => $request->order_id,
        'message_id' => $request->message_id,
      ]);
      $message = Message::create([
        'fr_user_id' => Auth::user()->id,
        'to_user_id' => $request->to_user_id,
        'order_id' => $request->order_id,
        'message' => $request->message,
        'images' => $request->image
      ]);
      $cetak = Cetak::join('messages', 'cetaks.message_id', '=', 'messages.id')->where('messages.order_id', '=', $request->order_id)->first();
      return response()->json($message);
    }

    public function cetak($id) {
      $cetak = Cetak::join('messages', 'cetaks.message_id', '=', 'messages.id')->where('messages.order_id', '=', $id)->first();

      return response()->json($cetak);
    }
}
