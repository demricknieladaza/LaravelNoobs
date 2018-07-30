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

Route::get('/winwork', function () {
    return view('winwork');
});

Route::get('/winwork/pds', function () {
    return view('pds');
});
Route::get('/publish', function () {
    return view('publish');
});