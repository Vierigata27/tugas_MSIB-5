<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LihatNilaiController;
use App\Http\Controllers\DashboarddController;
use App\Http\Controllers\PagenotController;
use App\Http\Controllers\KartuController;
use App\Http\Controllers\JenisProdukController;

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

Route::get('/vieri', function () {
    return 'Selamat Datang Belajar Laravel';
});

//routing dengan parameter
Route::get('/staff/{nama}/{divisi}', function ($nama, $divisi) {
    return 'Nama Pegawai : ' .$nama. '<br> Departemen : ' .$divisi;
});

Route::get('/kondisi', function () {
    return view('kondisi');
});

Route::get('/nilai', function () {
    return view('coba.nilai');
});

Route::get('/daftarnilai', function () {
    return view('coba.daftar');
});

Route::get('/datamahasiswa', [LihatNilaiController::class, 'dataMahasiswa']);

Route::get('/dashboard', [DashboarddController::class, 'index']);
Route::get('/notfound', [PagenotController::class, 'index']);

//memanggil seluruh fungsi
Route::resource('kartu', KartuController::class);
Route::resource('jenis', JenisProdukController::class);
