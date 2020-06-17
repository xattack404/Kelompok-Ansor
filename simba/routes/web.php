<?php

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

//Route Front End
Route::get('/', ['as' => 'frontend.home.index', 'uses' => 'FrontendController@index']);
Route::get('event/index', ['as' => 'frontend.event.index', 'uses' => 'EventController@index']);
Route::get('ajax/{id}', ['as' => 'frontend.registrasi.ajax', 'uses' => 'RegistrasiController@show']);
Route::get('ajaxkat/{id}', ['as' => 'frontend.registrasi.ajax', 'uses' => 'RegistrasiController@showkat']);
Route::get('registrasi/index', ['as' => 'frontend.registrasi.index', 'uses' => 'RegistrasiController@index']);
Route::get('konfirmasi/index', ['as' => 'frontend.konfirmasi.index', 'uses' => 'KonfirmasiController@index']);
Route::get('konfirmasi/form/{no_invoice}', ['as' => 'frontend.konfirmasi.form', 'uses' => 'KonfirmasiController@form']);
Route::put('konfirmasi/submit/{no_invoice}', ['as' => 'frontend.konfirmasi.submit', 'uses' => 'KonfirmasiController@store']);
Route::get('konfirmasi/form2/{nik_id}', ['as' => 'frontend.konfirmasi.form', 'uses' => 'KonfirmasiController@form2']);
Route::post('registrasi/simpan', ['as' => 'frontend.registrasi.store', 'uses' => 'RegistrasiController@store']);
Route::post('registrasikomunitas/simpan', ['as' => 'frontend.registrasi.store2', 'uses' => 'RegistrasiController@store2']);
Route::get('form/{jumlah}', ['as' => 'frontend.registrasi.form', 'uses' => 'RegistrasiController@form']);
Route::get('event/detailevent/{url}', ['as' => 'frontend.event.detailevent', 'uses' => 'EventController@show']);




//Route Back End
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('panel/profile', ['as' => 'profile.index', 'uses' => 'profileController@index']);
Route::get('panel/signout', ['as' => 'signout', 'uses' => 'Auth\LoginController@signout']);

//Route untuk menu kategori
Route::get('panel/kategori', ['as' => 'kategori.index', 'uses' => 'KategoriController@index']);
Route::get('panel/kategori/create', ['as' => 'kategori.create', 'uses' => 'KategoriController@create']);
Route::post('panel/kategori/create', ['as' => 'kategori.store', 'uses' => 'KategoriController@store']);
Route::get('panel/kategori/edit/{id}', ['as' => 'kategori.edit', 'uses' => 'KategoriController@edit']);
Route::put('panel/kategori/edit/{id}', ['as' => 'kategori.update', 'uses' => 'KategoriController@update']);
Route::get('panel/kategori/delete/{id}', ['as' => 'kategori.delete', 'uses' => 'KategoriController@delete']);

//Route Informasi Web
Route::get('panel/infoweb', ['as' => 'infoweb.index', 'uses' => 'InfowebController@index']);

//Route untuk menu subkategori
Route::get('panel/subkategori', ['as' => 'subkategori.index', 'uses' => 'SubkategoriController@index']);
Route::get('panel/subkategori/create', ['as' => 'subkategori.create', 'uses' => 'SubkategoriController@create']);
Route::post('panel/subkategori/create', ['as' => 'subkategori.store', 'uses' => 'SubkategoriController@store']);
Route::get('panel/subkategori/edit/{id}', ['as' => 'subkategori.edit', 'uses' => 'SubkategoriController@edit']);
Route::put('panel/subkategori/edit/{id}', ['as' => 'subkategori.update', 'uses' => 'SubkategoriController@update']);
Route::get('panel/subkategori/delete/{id}', ['as' => 'subkategori.delete', 'uses' => 'SubkategoriController@delete']);

//Route untuk menu Cabang Olahraga
Route::get('panel/cabangolahraga', ['as' => 'cabangolahraga.index', 'uses' => 'cabangolahragaController@index']);
Route::get('panel/cabangolahraga/create', ['as' => 'cabangolahraga.create', 'uses' => 'cabangolahragaController@create']);
Route::post('panel/cabangolahraga/create', ['as' => 'cabangolahraga.store', 'uses' => 'cabangolahragaController@store']);
Route::get('panel/cabangolahraga/edit/{id}', ['as' => 'cabangolahraga.edit', 'uses' => 'cabangolahragaController@edit']);
Route::put('panel/cabangolahraga/edit/{id}', ['as' => 'cabangolahraga.update', 'uses' => 'cabangolahragaController@update']);
Route::get('panel/cabangolahraga/delete/{id}', ['as' => 'cabangolahraga.delete', 'uses' => 'cabangolahragaController@delete']);

//Route untuk menu Manejemen Login
Route::get('panel/manejemenlogin', ['as' => 'manejemenlogin.index', 'uses' => 'manejemenlogincontroller@index']);
Route::get('panel/manejemenlogin/create', ['as' => 'manejemenlogin.create', 'uses' => 'ManejemenLoginController@create']);
Route::post('panel/manejemenlogin/create', ['as' => 'manejemenlogin.store', 'uses' => 'ManejemenLoginController@store']);
Route::get('panel/manejemenlogin/edit/{id}', ['as' => 'manejemenlogin.edit', 'uses' => 'ManejemenLoginController@edit']);
Route::put('panel/manejemenlogin/edit/{id}', ['as' => 'manejemenlogin.update', 'uses' => 'ManejemenLoginController@update']);
Route::get('panel/manejemenlogin/delete/{id}', ['as' => 'manejemenlogin.delete', 'uses' => 'ManejemenLoginController@delete']);

//Route Untuk Manejeme Atlet
Route::get('panel/manejemenatlet', ['as' => 'manejemenatlet.index', 'uses' => 'ManejemenAtletController@index']);
Route::get('panel/manejemenatlet/delete/{id}', ['as' => 'manejemenatlet.delete', 'uses' => 'ManejemenAtletController@delete']);

//Route Untuk Pembayaran
Route::get('panel/pembayaran', ['as' => 'pembayaran.index', 'uses' => 'PembayaranController@index']);
