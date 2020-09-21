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

Route::get('/jurusan', 'JurusanController@index');
Route::get('/jurusan/create', 'JurusanController@create');
Route::get('/jurusan/{jurusan}', 'JurusanController@show');
Route::post('/jurusan', 'JurusanController@store');
Route::delete('/jurusan/{jurusan}', 'JurusanController@destroy');
Route::get('/jurusan/{jurusan}/editjrs', 'JurusanController@edit');
Route::patch('/jurusan/{jurusan}', 'JurusanController@update');
Route::resource('jurusan', 'JurusanController');


