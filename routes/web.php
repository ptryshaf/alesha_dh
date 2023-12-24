<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\HewanController;
Route::resource('hewan', HewanController::class);
Route::get('/print', [HewanController::class, 'print'])->name('print');

use App\Http\Controllers\PembeliController;
Route::resource('pembeli', PembeliController::class);
Route::get('/printpbl', [PembeliController::class, 'printpbl'])->name('printpbl');


use App\Http\Controllers\TransaksiController;
Route::resource('transaksi', TransaksiController::class);

use App\Http\Controllers\PembayaranController;
Route::resource('pembayaran', PembayaranController::class);
// Route::get('pembayaran/struk', PembayaranController::class, 'views');


use App\Http\Controllers\UserController;
Route::resource('user', UserController::class);

use App\Http\Controllers\StrukController;
Route::resource('struk', StrukController::class);
// use App\Http\Controllers\Pem;
// Route::resource('', StrukController::class);


Route::get('getAlamat/{id}', function ($id){
    $alamat = App\Models\PembeliModel::where('id_transaksi', $id)->get();
    return response()->json($alamat);
});
