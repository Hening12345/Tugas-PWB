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
    return view('page.index');
});

Route::get('/about', function () {
    return view('page.about');
});

Route::get('/synopsis', function () {
    return view('page.synopsis');
});

Route::get('/character', function () {
    return view('page.character');
});

Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/siswa', 'SiswaController@index');

Route::get('/jurusan', 'JurusanController@index');
Route::get('/jurusan/create', 'JurusanController@create');
Route::get('/jurusan/{jurusan}', 'JurusanController@show');
Route::post('/jurusan', 'JurusanController@store');
Route::delete('/jurusan/{jurusan}', 'JurusanController@destroy');
Route::get('/jurusan/{jurusan}/editjrs', 'JurusanController@edit');
Route::patch('/jurusan/{jurusan}', 'JurusanController@update');
Route::resource('jurusan', 'JurusanController');
/**
Route::get('siswa','SiswaController@index');
Route::get('/siswa/create', 'SiswaController@create');
Route::get('/siswa/{siswa}', 'SiswaController@show');
Route::post('/siswa','SiswaController@create');
Route::delete('/siswa/{id}','SiswaController@destroy');
Route::get('/siswa/{siswa}/editsw', 'SiswaController@edit');
Route::patch('/siswa/{siswa}', 'SiswaController@update');
Route::resource('siswa', 'SiswaController');**/
