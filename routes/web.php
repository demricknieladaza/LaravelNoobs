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

Route::get('/dashboard', 'UsersController@dashboard_controller');

Route::get('/dashboard/emp_dashboard', 'UsersController@emp_dashboard_controller');

Route::get('/dashboard/tend_dashboard', 'UsersController@tend_dashboard_controller');

Route::get('/dashboard/benchmark_dashboard', 'UsersController@benchmark_dashboard_controller');

Route::get('/dashboard/policies', 'UsersController@policies_controller');

Route::get('/publish/project_dashboard', 'UsersController@project_dashboard_controller');

Route::get('/publish/project_dashboard/datasheet', 'UsersController@datasheet_controller');

Route::get('login', 'UserLogin@checklogin');

Route::resource('register','UserAccountsController');

Route::get('/dashboard/tend_dashboard/active_page', 'UsersController@active_page_controller');

Route::get('/dashboard/tend_dashboard/success_page', 'UsersController@success_page_controller');

Route::get('/dashboard/tend_dashboard/unsuccess_page', 'UsersController@unsuccess_page_controller');

Route::get('/publish/canada_hover', 'UsersController@canada_hover_controller');

Route::get('/log_reg', 'UsersController@log_reg_controller');