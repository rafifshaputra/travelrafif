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

Route::get('/desk-hrsk1-20616', function () {
    return view('skenario1-desktop');
});

Route::get('/mob-hrsk1-20516', function () {
    return view('skenario1');
});

Route::get('/hrsk2-14818', function () {
    return view('skenario2');
});

Route::get('/mob-hrsk3-94314', function () {
    return view('skenario3');
});

Route::get('/mob-hrsk3d-94314', function () {
    return view('skenario3Detail');
});

Route::get('/desk-hrsk3-94914', function () {
    return view('skenario3-desktop');
});

Route::get('/hrsk4-30918', function () {
    return view('skenario4');
});

Route::get('/mob-h8sk5-73917', function () {
    return view('skenario5');
});

Route::get('/desk-h8sk5-23621', function () {
    return view('skenario5-desktop');
});

