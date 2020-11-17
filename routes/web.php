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

// Route::get('/', function () {
//     return view('dashboard.index');
// });

Route::prefix('/')->group(function ()
{
Route::get('/','PegawaiController@index')->name('pegawai.index');
Route::post('/import_excel', 'PegawaiController@import_excel');
Route::get('/export', 'PegawaiController@export');
// Route::get('/show','PegawaiController@show')->name('pegawai.show');
// Route::get('/search','PegawaiController@search')->name('pegawai.search');
// Route::post('/add/pegawai','PegawaiController@store')->name('pegawai.store');
// Route::get('/hapus/{id}', 'PegawaiController@destroy')->name('pegawai.hapus');
// Route::get('/show/{id}', 'PegawaiController@tampil')->name('pegawai.tampil');
// Route::post('/ubah', 'PegawaiController@update')->name('pegawai.update');

});
