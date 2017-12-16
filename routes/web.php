<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'freelance', 'namespace' => 'Freelancer', 'middleware' => 'auth'], function () {
    Route::resource('product', 'ProductsController');
    Route::resource('order-list', 'OrderListController');
    Route::resource('messages', 'MessagesController');
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
    Route::post('user/findSubCategoryname/{id}', 'MenuController@findSubCategoryname');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::resource('products', 'ProductController');
    Route::get('/', 'AdminController@index');
    Route::get('/login', 'AuthController@login')->name('login_admin');
    // Route::post('/process'.'AuthController@adminLogin')->name('process_login');
});
