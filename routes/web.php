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

Route::get('/','UsersController@welcome_controller');

Route::get('/winwork', 'UsersController@winwork_controller');

Route::get('/winwork/pds', 'UsersController@pds_controller');

Route::get('/publish', 'UsersController@publish_controller');

Route::get('/winwork/pds/bid', 'UsersController@bid_controller');

Route::get('/publish/dashboard', 'UsersController@dashboard_controller');
