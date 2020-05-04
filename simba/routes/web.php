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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Route untuk menu kategori
Route::get('/home', 'HomeController@index')->name('home');
Route::get('panel/kategori', ['as' => 'kategori.index', 'uses' => 'KategoriController@index']);
Route::get('panel/kategori/create', ['as' => 'kategori.create', 'uses' => 'KategoriController@create']);
Route::post('panel/kategori/create', ['as' => 'kategori.store', 'uses' => 'KategoriController@store']);
Route::get('panel/kategori/edit/{id}', ['as' => 'kategori.edit', 'uses' => 'KategoriController@edit']);
Route::put('panel/kategori/edit/{id}', ['as' => 'kategori.update', 'uses' => 'KategoriController@update']);
Route::get('panel/kategori/delete/{id}', ['as' => 'kategori.delete', 'uses' => 'KategoriController@delete']);

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