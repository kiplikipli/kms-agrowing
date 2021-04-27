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

Route::get('/login', function () {
    return view('welcome');
});
Route::get('/template', function () {
    return view('template');
});

// ====== Route untuk Admin ======
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
    return view('page.admin.petani.add');
});
Route::get('/admin/lahan', function () {
    return view('page.admin.lahan.index');
});
Route::get('/admin/sop', function () {
    return view('page.admin.sop.index');
});
Route::get('/admin/sop/tambah', function () {
    return view('page.admin.sop.add');
});

// ====== Route untuk Manajer Kebun ======

Route::get('/proyek', function () {
    return view('page.user.project.index');
});
// Route::get('/proyek/tambah', function () {
//     return view('page.user.project.add');
// });
Route::get('/konsultasi', function () {
    return view('page.user.konsultasi.index');
});
Route::get('/konsultasi/tambah', function () {
    return view('page.user.konsultasi.add');
});
Route::get('/profil', function () {
    return view('page.user.profile.index');
});
Route::get('/profil/edit', function () {
    return view('page.user.profile.edit');
});
Route::get('/pencatatan/1', function () {
    return view('page.user.pencatatan.index');
});
Route::get('/panduan/buah-naga', function () {
    return view('page.user.panduan');
});
Route::get('/riwayat/1', function () {
    return view('page.user.riwayat.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', "SOPController@index");
Route::get('/sop', "SOPController@show");

Route::get('/proyek/tambah', 'ProjectController@index');

Route::get('/login', 'LoginController@index')->name('login');
Route::get('/logout', 'LogoutController@index')->name('logout');

Route::middleware('auth:api')->get('/user', function (Request $request){
    return $request->user();
});

\PWA::routes();
