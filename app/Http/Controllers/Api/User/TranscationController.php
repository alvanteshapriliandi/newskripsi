<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transaction;
use Auth;

class TranscationController extends Controller
{
    public function __construct() 
    {
      $this->middleware('auth:api');
    }

    public function upload(Request $request)
    {
      $explode = explode(',' , $request->image);
      $decoded = base64_decode($explode[1]);

      if(str_contains($explode[0], 'jpg')) {
        $extension = 'jpg';
      } else {
        $extension = 'png';
      }

      $fileName = str_random().'.'.$extension;

      $path = public_path().'/pembayaran/'.$fileName;

      file_put_contents($path, $decoded);

      $image = Transaction::where('id', '=', $request->id)->update([
        'bank_id' => 1,
        'images' => $fileName
      ]);

      return response()->json(200);
      
    }
}
