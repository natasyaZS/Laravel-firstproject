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

Route::get('/borang-penilaian', function () {
	
	$pdf = PDF::loadView('borang-penilaian-pdf');
	return $pdf->stream('document.pdf');
    //return view('borang-penilaian-pdf');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
