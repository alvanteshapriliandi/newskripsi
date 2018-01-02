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


Route::group(['prefix' => 'freelance', 'namespace' => 'Freelancer', 'middleware' => 'auth'], function () {
  Route::resource('product', 'ProductsController');
  Route::resource('order-list', 'OrderListController');
  Route::resource('new-messages', 'NewController');
  Route::resource('inbox', 'MasukController');
  Route::resource('outbox', 'KeluarController');
  Route::post('product/findSubCategoryname/{id}', 'ProductsController@findSubCategoryname');
});
Route::group(['namespace' => 'Freelancer', 'middleware' => 'auth'], function () {

  Route::resource('freelance', 'FreelanceRegisterController');
});

Route::group(['namespace' => 'User'], function () {
  Route::resource('user', 'MenuController');
  Route::resource('amplop', 'AmplopController');
  Route::resource('bantalfoto', 'BantalFotoController');
  Route::resource('brosur', 'BrosurController');
  Route::resource('goodlebag', 'GoodleBagController');
  Route::resource('kalender', 'KalenderController');
  Route::resource('kaos', 'KaosController');
  Route::resource('kartunama', 'KartuNamaController');
  Route::resource('kopsurat', 'KopSuratController');
  Route::resource('mug', 'MugController');
  Route::resource('poloshirt', 'PoloShirtController');
  Route::resource('poster', 'PosterController');
  Route::resource('rollup', 'RollUpController');
  Route::resource('spanduk', 'SpandukController');
  Route::resource('squarecard', 'SquareCardController');
  Route::resource('stempel', 'StempelController');
  Route::resource('stiker', 'StikerController');
  Route::resource('xbanner', 'XbannerController');
  Route::resource('checkout', 'CheckoutController');
  Route::resource('payment', 'PaymentController');
  Route::resource('payment-upload', 'UploadsController');
  Route::resource('proses', 'ProsesController');
  Route::resource('user-new-message', 'NewController');
  Route::resource('user-inbox', 'MasukController');
  Route::resource('user-outbox', 'KeluarController');
  Route::post('user/findSubCategoryname/{id}', 'MenuController@findSubCategoryname');
});

Route::get('productlist', 'Api\User\ProductController@index');

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
