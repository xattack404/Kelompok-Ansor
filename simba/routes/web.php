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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('panel/kategori', ['as' => 'kategori.index', 'uses' => 'KategoriController@index']);
Route::get('panel/kategori/edit/{id}', ['as' => 'kategori.edit', 'uses' => 'KategoriController@edit']);
Route::put('panel/kategori/edit/{id}', ['as' => 'kategori.update', 'uses' => 'KategoriController@update']);
Route::get('panel/kategori/delete/{id}', ['as' => 'kategori.delete', 'uses' => 'KategoriController@delete']);
Route::get('panel/kategori/create', ['as' => 'kategori.create', 'uses' => 'KategoriController@create']);
Route::post('panel/kategori/create', ['as' => 'kategori.store', 'uses' => 'KategoriController@store']);

Route::get('panel/subkategori', ['as' => 'subkategori.index', 'uses' => 'SubkategoriController@index']);
Route::get('panel/subkategori/create', ['as' => 'subkategori.create', 'uses' => 'SubkategoriController@create']);
Route::post('panel/subkategori/create', ['as' => 'subkategori.store', 'uses' => 'SubkategoriController@store']);