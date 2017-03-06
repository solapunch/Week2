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
	$tanggal = date("d-m-y H:i:s", time());
    return view('welcome') -> with('tanggal', $tanggal);
});

Route::get('halo', function () {
    return view('halo');
});

Route::get('halo/chick', function () {
    return view('Rooster.chick');
});

Route::get('chick', function () {
    return view('Rooster.chick');
});