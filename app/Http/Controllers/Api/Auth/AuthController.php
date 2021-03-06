<?php
namespace App\Http\Controllers\Api\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transformers\UserTransformer;
use App\User;
use Auth;
use DB;
class AuthController extends Controller
{
    public function doRegister(Request $request, User $user){
      $this->validate($request, [
        'name'     => 'required',
        'email'    => 'required|email|unique:users',
        'password' => 'required|min:6'
      ]);
      $user = $user->create([
        'username'     => $request->name,
        'email'    => $request->email,
        'password' => bcrypt($request->password),
        'api_token'=> str_random(60),
        'role' => 1
      ]);

      return response()->json([
        'registered' => true,
        'message' => "Registrasi telah berhasil... silahkan konfirmasi email anda...."
      ]);
        return response()->json([
          'registered' => true,
          'message' => "Registrasi telah berhasil... silahkan konfirmasi email anda...."
          ]);
    }
    public function doLogin(Request $request, User $user){
      $this->validate($request, [
        'email'    => 'required|email',
        'password' => 'required'
      ]);
      if(!Auth::attempt(['email' => $request->email, 'password' => $request->password])){
        return response()->json(['error' => 'Your credential is wrong'], 401);
      }
      // $user = $user->find(Auth::user()->id);
      $user = DB::table('users')->where('id', '=', Auth::user()->id)->first();
      return response()
        ->json($user);
    }
}