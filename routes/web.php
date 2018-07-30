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
<<<<<<< HEAD
=======
});
<<<<<<< HEAD

Route::get('/winwork/pds', function () {
    return view('pds');
=======
Route::get('/publish', function () {
    return view('publish');
>>>>>>> c8bf34e7e125173b4d31213b9bd0a2354e4955a8
>>>>>>> 3acd0af5a86953c4ea61f93d213bda60a2c5b531
});