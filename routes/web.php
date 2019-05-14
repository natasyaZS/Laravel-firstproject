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

Route::get('/borang-penilaian', function () {
    return view('borang-penilaian');
});

Route::post('/borang-penilaian','PdfController@form_evaluation');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
