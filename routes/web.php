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

Route::get('/skenario1', function () {
    return view('skenario1');
});

Route::get('/skenario2', function () {
    return view('skenario2');
});

Route::get('/skenario3', function () {
    return view('skenario3');
});

Route::get('/skenario4', function () {
    return view('skenario4');
});

