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
    return view('index');
});
Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/form', 'PertanyaanController@create');
Route::post('/pertanyaan','PertanyaanController@store');
Route::get('/pertanyaan/detail/{id}','PertanyaanController@detail');
Route::get('/jawaban/{id}','JawabanController@index');
Route::post('/jawaban/{id}','JawabanController@store');
