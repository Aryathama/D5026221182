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

Route::get('/blog', function () {
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
