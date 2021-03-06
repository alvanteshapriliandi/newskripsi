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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'freelance', 'namespace' => 'Freelancer', 'middleware' => 'auth'], function () {
    Route::resource('upload-desain', 'CetakController');
    Route::resource('product', 'ProductsController');
    Route::delete('deleteimages/{$id}', 'ProductsController@deleteImg');
    Route::resource('pembayaran', 'PembayaranController');
    Route::resource('order', 'OrderController');
    Route::resource('new-messages', 'NewController');
    Route::resource('inbox', 'MasukController');
    Route::resource('outbox', 'KeluarController');
    Route::resource('cetak', 'CetakPesananController');
    Route::resource('pengaturan', 'PengaturanController');
    Route::resource('message', 'MessagesController');
    Route::resource('report', 'ReportController');
    Route::resource('ulasan', 'UlasanController');
    Route::resource('perubahan', 'PerubahanController');
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
    Route::resource('status_kirim', 'StatusController');
    Route::post('user/findSubCategoryname/{id}', 'MenuController@findSubCategoryname');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::resource('products', 'ProductController');
    Route::resource('userlist', 'UserListController');
    Route::resource('freelancelist', 'FreelanceListController');
    Route::resource('bank', 'BankController');
    Route::resource('cetakpesanan', 'CetakController');
    Route::resource('orderlist', 'OrderController');
    Route::resource('freelance-payment', 'FreelancePaymentController');
    Route::resource('cekpembayaran', 'CekPembayaranController');
    Route::resource('new-message', 'NewController');
    Route::resource('inbox-message', 'MasukController');
    Route::resource('material', 'MaterialController');
    Route::resource('report-list', 'ReportController');
    Route::resource('report-comment', 'ReportCommentController');
    Route::resource('submaterial', 'SubmaterialController');
    Route::resource('outbox-message', 'KeluarController');
    Route::post('material/findSubCategoryname/{id}', 'MaterialController@findSubCategoryname');
    Route::get('material/createbyid/{id}', 'MaterialController@createbyid');
    // Route::get('download', 'CetakController@getDownload');
    Route::get('/', 'AdminController@index');
    Route::get('/login', 'AuthController@login')->name('login_admin');
    // Route::post('/process'.'AuthController@adminLogin')->name('process_login');
});
