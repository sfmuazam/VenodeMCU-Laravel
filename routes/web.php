<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [TransaksiController::class, 'index']);
Route::resource('/transaksi', TransaksiController::class);
Route::get('/getJumlahTransaksi', [TransaksiController::class, 'getJumlahTransaksi'])->name('jumlahTransaksi');
Route::get('/getJumlahTransaksiToday', [TransaksiController::class, 'getJumlahTransaksiToday'])->name('jumlahTransaksiToday');
Route::delete('/transaksi', [TransaksiController::class, 'deleteAll'])->name('transaksi.deleteAll');

Route::resource('/user', UserController::class);
Route::get('/getUID', [UserController::class, 'getUID'])->name('getUID');
Route::delete('/user', [UserController::class, 'deleteAll'])->name('user.deleteAll');

Route::resource('/barang', BarangController::class);
