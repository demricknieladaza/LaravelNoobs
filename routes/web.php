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

Route::get('/','UsersController@welcome_controller')->name('Landing');

Route::get('/winwork', 'UsersController@winwork_controller')->name('winwork');

Route::get('/winwork/pds', 'UsersController@pds_controller');

Route::get('/publish', 'UsersController@publish_controller');
Route::get('/publish/searchProjects', 'UsersController@searchProjects');

Route::get('/winwork/pds/bid', 'UsersController@bid_controller');

Route::get('/dashboard', 'UsersController@dashboard_controller');

Route::get('/dashboard/emp_dashboard', 'UsersController@emp_dashboard_controller')->name('Employer Dashboard');

Route::get('/dashboard/tend_dashboard', 'UsersController@tend_dashboard_controller')->name('Tenderer Dashboard');

Route::get('/dashboard/benchmark_dashboard', 'UsersController@benchmark_dashboard_controller');

Route::get('/dashboard/policies', 'UsersController@policies_controller');

Route::get('/publish/project_dashboard', 'UsersController@project_dashboard_controller')->name('Project Dashboard');

Route::get('/publish/project_dashboard/datasheet', 'UsersController@datasheet_controller');

Route::get('login', 'UserLogin@checklogin');

Route::get('logout', 'UserLogin@logout');

Route::resource('register','UserAccountsController');

Route::resource('addCountrys','Useradd@addCountry');

Route::get('/dashboard/tend_dashboard/active_page', 'UsersController@active_page_controller');

Route::get('/dashboard/tend_dashboard/success_page', 'UsersController@success_page_controller');

Route::get('/dashboard/tend_dashboard/unsuccess_page', 'UsersController@unsuccess_page_controller');

Route::get('/publish/canada_hover', 'UsersController@canada_hover_controller');

Route::get('/log_reg', 'UsersController@log_reg_controller');

Route::get('/dashboard/membership', 'UsersController@membership_controller');

Route::get('/dashboard/users', 'UsersController@users_controller');

Route::get('/dashboard/comp_orga', 'UsersController@comp_orga_controller');

Route::get('/dashboard/comp_indi', 'UsersController@comp_indi_controller');

// Route::get('/dashboard/organisation', 'UsersController@organisation_controller');

Route::get('/dashboard/organisation/{id}', 'OrganisationController@getmyorganisation');

Route::get('/dashboard/individuals', 'UsersController@individuals_controller');

Route::get('/dashboard/individuals', 'UsersController@individuals_controller');

Route::get('tenderget/{id}','TenderController@gettend');

Route::get('getproj/{id}','OrganisationController@getproj');

Route::post('project_info_tender_appointment', 'TenderController@appointmentStore');
Route::post('organisationStore', 'OrganisationController@organisationStore');
Route::post('individualStore', 'IndividualsController@individualStore');
// Route::resource('tenderget', 'TenderController');

// Route::post('')
// Route::get('winwork/bid/{id}', 'BidController@getCredentials');
Route::resource('winwork/bid', 'BidController', [
    'names' => [
        'edit' => 'Bid'
    ]
]);
Route::post('submit_bid', 'BidController@submitBid');

Route::post('edit_tender_service', 'TenderController@editTend');
// Route::resource('winwork/bid', 'BidController');
Route::post('winwork/bid/{id}/save', 'BidController@saveBid');
Route::post('winwork/bid/{id}/approach', 'BidController@saveApproach');

Route::post('tender_queries', 'BidController@saveQuery');

//Route::put('project_info/{id}', 'ProjectInformationController@Update');
Route::resource('project_info','ProjectInformationController');
Route::post('response_save', 'ProjectInformationController@saveResponse');
Route::resource('scope', 'ScopeController');
Route::resource('project_info_tender','TenderController');
Route::post('questionnaire', 'TenderController@questionnaireSave');
Route::post('questionnaireedit', 'TenderController@questionnaireEdit');
Route::post('autocomplete', 'UserAccountsController@autocomplete')->name('autocomplete');
Route::get('search', 'UserAccountsController@ind');
Route::resource('tenders', 'TenderDisplayController', [
    'names' =>[
        'index' => 'Tenders',
        'edit' => 'Tenders Table'
    ]
]);
Route::resource('dashboard/individuals', 'IndividualsController');
Route::resource('winwork', 'WinWorkController');
Route::post('move_to_saved', 'WinWorkController@moveToSavedOps');
Route::post('winwork/filtered_results', 'WinWorkController@searchFilters');

Route::post('tender_evaluation', 'TenderController@tenderEvalStore');
Route::post('tender_deliverables_save', 'TenderController@tenderScopeStore');
Route::post('tender_quality_assurance', 'TenderController@tenderQualityStore');
Route::post('start_tender_process', 'TenderController@updateTenderProcess');







