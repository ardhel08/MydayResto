<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasakanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TransaksiController;

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

Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('/login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/block', [AuthController::class, 'block'])->name('block');

Route::group(['middleware' => 'auth'], function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [MasakanController::class, 'dashboard'])->name('dashboard');
    Route::get('/', [MasakanController::class, 'awal'])->name('awal');
    Route::get('/daftarmenu', [MasakanController::class, 'daftarmenu'])->name('daftarmenu');
    Route::get('/masakan', [MasakanController::class, 'masakan'])->name('masakan');
    Route::get('/tambahmasakan', [MasakanController::class, 'tambahmasakan'])->name('tambahmasakan');
    Route::post('/simpanmasakan', [MasakanController::class, 'simpanmasakan'])->name('simpanmasakan');
    Route::get('/editmasakan/{id_masakan}', [MasakanController::class, 'editmasakan'])->name('editmasakan');
    Route::post('/updatemasakan', [MasakanController::class, 'updatemasakan'])->name('updatemasakan');
    Route::get('/hapusmasakan/{id_masakan}', [MasakanController::class, 'hapusmasakan'])->name('hapusmasakan');
    Route::get('/order', [MasakanController::class, 'order'])->name('order');
    Route::get('/detailorder', [MasakanController::class, 'detailorder'])->name('detailorder');
    Route::get('/detailorder', [OrderController::class, 'detailorder'])->name('detailorder');
    Route::get('/hapusorder/{id_order}', [OrderController::class, 'hapusorder'])->name('hapusorder');
    Route::post('/simpanorder', [OrderController::class, 'simpanorder'])->name('simpanorder');
    Route::get('/transaksi', [OrderController::class, 'transaksi'])->name('transaksi');
    Route::post('/simpantransaksi', [TransaksiController::class, 'simpantransaksi'])->name('simpantransaksi');
    Route::get('/laporantransaksi', [TransaksiController::class, 'laporantransaksi'])->name('laporantransaksi');
});
