<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('registrasi/index', ['as' => 'frontend.registrasi.index', 'uses' => 'RegistrasiController@index']);
Route::post('registrasi/simpan', ['as' => 'frontend.registrasi.store', 'uses' => 'RegistrasiController@store']);
Route::post('registrasikomunitas/simpan', ['as' => 'frontend.registrasi.store2', 'uses' => 'RegistrasiController@store2']);
