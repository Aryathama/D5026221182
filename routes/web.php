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

Route::get('', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('halo2', function () {
	return "<marquee>Halo apa kabar!</marquee>";
});

Route::get('/blog2', function () {
    return view('blog');
});

Route::get('/linktree', function () {
    return view('linktree');
});

Route::get('/pizza', function () {
    return view('pizza');
});

Route::get('/ets', function () {
    return view('ets');
});

Route::get('/week1', function () {
    return view('w1');
});

Route::get('/week2-1', function () {
    return view('w2_1');
});

Route::get('/week2-2', function () {
    return view('w2_2');
});

Route::get('/week2-3', function () {
    return view('w2_3');
});

Route::get('/week3', function () {
    return view('w3');
});

Route::get('/week5-1', function () {
    return view('w5_1');
});

Route::get('/week5-2', function () {
    return view('w5_2');
});

Route::get('/week5-3', function () {
    return view('w5_3');
});

Route::get('/perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('/show', 'App\Http\Controllers\DosenController@showBlog');

Route::get('/employee/{nama}', 'App\Http\Controllers\DosenController@showName');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');


Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');


Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@index');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiController@store');


Route::get('/televisi','App\Http\Controllers\TVController@index');
Route::get('/televisi/tambah','App\Http\Controllers\TVController@tambah');
Route::post('/televisi/store','App\Http\Controllers\TVController@store');
Route::get('/televisi/edit/{id}','App\Http\Controllers\TVController@edit');
Route::post('/televisi/update','App\Http\Controllers\TVController@update');
Route::get('/televisi/hapus/{id}','App\Http\Controllers\TVController@hapus');
Route::get('/televisi/cari','App\Http\Controllers\TVController@cari');
Route::get('/televisi/view/{id}','App\Http\Controllers\TVController@view');
