<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('auth/register', 'Api\Auth\AuthController@doRegister');
Route::post('auth/login', 'Api\Auth\AuthController@doLogin');

Route::get('users', 'UserController@getUsers');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('productlist', 'Api\User\ProductController');
Route::resource('perubahan', 'Api\User\PerubahanController');
Route::resource('freelance-product', 'Api\User\ProductFreelacerController');
Route::resource('perubahan', 'Api\User\PerubahanController');
Route::resource('setuju', 'Api\User\SetujuController');
// Route::get('productlist/{id}', 'Api\User\ProductController@show');
Route::resource('cart', 'Api\User\CartController');
Route::resource('item', 'Api\User\ItemController');
Route::get('provinsi', 'Api\User\OngkirController@provinsi');
Route::get('city/{province}', 'Api\User\OngkirController@city');
Route::get('cost/berat/{berat}/kurir/{kurir}', 'Api\User\OngkirController@cost');
Route::post('user/alamat', 'Api\User\AlamatController@store');
Route::get('user/alamat', 'Api\User\AlamatController@index');
Route::get('categories', 'Api\CategoryController@index');
Route::resource('subcategory', 'Api\SubCategoryController');
Route::post('order', 'Api\User\OrdersController@store');
Route::resource('usermessage', 'Api\User\MessageController');
Route::get('products', 'Api\User\ProductController@products');
Route::get('sub/{id}', 'Api\SubCategoryController@subcategory');
Route::resource('materials', 'Api\MaterialController');
Route::resource('user', 'Api\UserController');
Route::resource('transaction', 'Api\OrderController');
Route::post('changephone', 'Api\ProfileController@changePhone');
Route::post('kelamin', 'Api\ProfileController@changeKelamin');
Route::resource('messages', 'Api\User\MessageController');
Route::post('freelance', 'Api\RegFreelancer@store');
Route::post('upload', 'Api\User\TranscationController@upload');
Route::post('sendmessage', 'Api\User\MessageController@sendMessage');
// Route::put('perubahan/{id}', 'Api\User\PerubahanController');
Route::resource('material', 'Api\MaterialsController');
Route::post('material', 'Api\MaterialsController@getValue');
Route::resource('ulasan', 'Api\User\UlasanController');
Route::get('products-freelancer/{id}', 'Api\User\ProductController@productsFreelancer');
Route::get('order/{id}', 'Api\User\OrdersController@show');
Route::post('message/perubahan', 'Api\User\MessageController@perubahan');
Route::post('message/setuju', 'Api\User\MessageController@setuju');
Route::get('message/cetak/{id}', 'Api\User\MessageController@cetak');
Route::get('rate/{id}', 'Api\User\ProductController@rating');
Route::get('order/diterima/{id}', 'Api\User\OrdersController@setDiterima');
Route::get('products-freelancer_/{id}', 'Api\User\ProductController@productsFreelancer_');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
  Route::resource('products', 'ProductController');
  Route::resource('userlist', 'UserListController');
  Route::resource('freelancelist', 'FreelanceListController');
  Route::resource('orderlist', 'OrderController');
  Route::resource('orderdetail', 'OrderDetailController');
  Route::resource('new-message', 'NewController');
  Route::resource('inbox-message', 'MasukController');
  Route::resource('outbox-message', 'KeluarController');
  Route::get('/', 'AdminController@index');
  Route::get('/login', 'AuthController@login')->name('login_admin');
  // Route::post('/process'.'AuthController@adminLogin')->name('process_login');
});
