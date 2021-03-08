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
    return view('admin.dashboard');
});
Route::get('/admin/sop', function () {
    return view('admin.sop.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

\PWA::routes();
