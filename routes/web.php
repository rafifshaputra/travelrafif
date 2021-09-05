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
Route::get('/scrs-rndm-12515','randomSurvei@randomSurvei');

Route::post('/get-form-survei','randomSurvei@randomSurvei2');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/scr-rndm-12515', function () {
    return view('random');
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

Route::get('/desk-hrsk4-30918', function () {
    return view('skenario4-desktop');
});

Route::get('/mob-hrsk4-123323', function () {
    return view('skenario4');
});


#LOW BRAND IMAGE LINK

Route::get('/mob-h8sk5-73917', function () {
    return view('skenario5');
});

Route::get('/desk-h8sk5-23621', function () {
    return view('skenario5-desktop');
});

Route::get('/h8sk6-104021', function () {
    return view('skenario6');
});

Route::get('/desk-h8sk7-11921', function () {
    return view('skenario7-desktop');
});

Route::get('/mob-h8sk7-104021', function () {
    return view('skenario7');
});

Route::get('/desk-h8sk8-25024', function () {
    return view('skenario8-desktop');
});

Route::get('/mob-h8sk8-30725', function () {
    return view('skenario8');
});

#INI UNTUK TRANSISI
Route::get('/sk1-12465',function(){
    return view('sk1');
});

Route::get('/sk3-11095',function(){
    return view('sk3');
});

Route::get('/sk4-12335',function(){
    return view('sk4');
});

Route::get('/sk5-12515',function(){
    return view('sk5');
});

Route::get('/sk7-1235',function(){
    return view('sk7');
});

Route::get('/sk8-12753',function(){
    return view('sk8');
});




