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

Route::get('/campuspedia-siswa','SiswaController@index');
Route::post('/campuspedia-siswa/sukses','SiswaController@create');
Route::get('/campuspedia-siswa/{id}/update','SiswaController@update');
Route::post('/campuspedia-siswa/{id}/update_data','SiswaController@update_data');
Route::get('/campuspedia-siswa/{id}/delete','SiswaController@delete');