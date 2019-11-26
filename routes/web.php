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

Route::get('/jquery', function () {
    return view('Jquery.video40.index');
});
Route::get('/social', function () {
    return view('Jquery.video38.social');
});

Route::resource('gatos', 'GatosController');
