<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TipeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\IncomingController;
use App\Http\Controllers\OutgoingController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\ReportController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//User
Route::resource('/user', UserController::class);
// Supplier
Route::resource('/supplier', SupplierController::class);
Route::post('/supplier/import', [SupplierController::class, 'import'])->name('supplier.import');
//Rak
Route::resource('/rak', RakController::class);
//Tipe
Route::resource('/tipe', TipeController::class);
//Kategori
Route::resource('/kategori', KategoriController::class);
//Produk
Route::resource('/produk', ProdukController::class);
//Incoming
Route::resource('/incoming', IncomingController::class);
//Outgoing
Route::resource('/outgoing', OutgoingController::class);
//Outgoing
Route::resource('/stok', StokController::class);
//Report
Route::resource('/report', ReportController::class);
