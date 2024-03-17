<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PasokController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategori/store',[KategoriController::class, 'store']);
Route::post('/kategori/update',[KategoriController::class, 'update']);
Route::get('/kategori/edit/{id_kategori}',[KategoriController::class, 'edit']);


Route::get('/user', [UserController::class, 'index']);
Route::post('/user/store',[UserController::class, 'store']);
Route::post('/user/update',[UserController::class, 'update']);
Route::get('/user/edit/{id}',[UserController::class, 'edit']);

Route::get('/kasir',[UserController::class, 'index2']);
Route::post('/kasir/store',[UserController::class, 'store2']);
Route::post('/kasir/update',[UserController::class, 'update2']);
Route::get('/kasir/edit/{id}',[UserController::class, 'edit2']);

Route::get('/barang',[BarangController::class, 'index']);
Route::get('/cetak',[BarangController::class, 'cetak']);
Route::post('/barang/store',[BarangController::class, 'store']);
Route::post('/barang/update',[BarangController::class, 'update']);
Route::get('/barang/edit/{id_barang}',[BarangController::class, 'edit']);

Route::get('/pasok',[PasokController::class, 'index']);
Route::post('/pasok/store',[PasokController::class, 'store']);
Route::post('/pasok/update',[PasokController::class, 'update']);
Route::get('/pasok/edit/{id_pasok}',[PasokController::class, 'edit']);



Route::get('/ambil',[TransaksiController::class, 'ambil']);
Route::get('/ambil2',[TransaksiController::class, 'ambil2']);

Route::get('/transaksi',[TransaksiController::class, 'index']);

Route::get('/nyokot',[TransaksiController::class, 'nyokot']);
Route::get('/nyokot2/{id}',[TransaksiController::class, 'nyokot2']);

Route::post('/masuk/sementara',[TransaksiController::class, 'store']);
Route::post('/masuk/semua',[TransaksiController::class, 'storesemua']);
Route::get('/cetak/{kode_transaksi}',[TransaksiController::class, 'cetak']);

Route::get('/laporan',[LaporanController::class, 'index']);
Route::get('/laporan/{kode_transaksi_kembalian}',[LaporanController::class, 'detail']);

Route::get('change-password', [ChangePasswordController::class, 'index']);
Route::post('change-password', [ChangePasswordController::class, 'store'])->name('change.password');