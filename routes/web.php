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
    return view('login');
});

Route::post('/login', 'App\Http\Controllers\LoginController@login');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout');

// route untuk halaman admin dashboard
Route::get('/admin/dashboard',['App\Http\Controllers\KendaraanController','index'])->middleware('isLogin');

// route untuk halaman penyetuju dashboard
Route::get('/penyetuju/dashboard', function () {
    return view('dashboard_penyetuju');
});
Route::get('/admin/tambahkendaraan',['App\Http\Controllers\KendaraanController','TambahKendaraan']);
// menampilkan data kendaraan
Route::post('/admin/simpanKendaraan',['App\Http\Controllers\KendaraanController','SimpanKendaraan']);

// menampilkan data kendaraan
Route::get('/admin/kendaraan',['App\Http\Controllers\KendaraanController','TampilkanKendaran']);

Route::get('/admin/sewa',['App\Http\Controllers\SewaController','index']);

Route::get('/admin/driver/', ['App\Http\Controllers\admin','TampilkanDriver']);
Route::get('/admin/driver/tambah', function () {
    return view('tambah_driver');
});