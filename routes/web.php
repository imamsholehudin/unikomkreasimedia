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


Route::get('/imam', function () {
    return view('training');
});
Route::get('/admin-index', function () {
    return view('backendweb/admin-index');
});
Route::get('/detailproduct', function () {
    return view('backendweb/detailproduct/index');
});
Route::get('/kategoriproduct', function () {
    return view('backendweb/kategoriproduct/index');
});
Route::get('/admin', function () {
    return view('backendweb/admin/index');
});
Route::get('/album', function () {
    return view('backendweb/album/index');
});
Route::get('/artis', function () {
    return view('backendweb/artis/index');
});
Route::get('/jasa', function () {
    return view('backendweb/jasa/index');
});
Route::get('/berita', function () {
    return view('backendweb/berita/index');
});