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
Route::get('/template', function () {
    return view('template');
});
Route::get('/admin', function () {
    return view('page.admin.dashboard');
});
Route::get('/admin/sop', function () {
    return view('page.admin.sop.index');
});
Route::get('/admin/laporan', function () {
    return view('page.admin.laporan_harian.index');
});
Route::get('/admin/petani', function () {
    return view('page.admin.petani.index');
});
Route::get('/admin/petani/tambah', function () {
    return view('page.admin.petani.tambah');
});
Route::get('/admin/lahan', function () {
    return view('page.admin.lahan.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

\PWA::routes();
