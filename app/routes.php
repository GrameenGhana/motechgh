<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/** for Vas2Nets **/
Route::resource('users','ApiSubscriberController');
Route::post('insertUser',     array('uses' => 'ApiSubscriberController@store'));
Route::post('updateUser',     array('uses' => 'ApiSubscriberController@update'));
Route::post('updateSchedule', array('uses' => 'SchedulerController@updateSchedule'));
/** end Vas2Nets **/


/** System paths **/
//Route::resource('regs','RegistrationsController');
Route::resource('users','UserController');
Route::resource('uploads','ExcelUploadController');
Route::resource('langs','LanguageController');

Route::group(array('prefix' => 'api/v1'), function()
{
    Route::resource('subscriber','ApiSubscriberController');
    Route::resource('consumer','ApiConsumerController');
});

Route::get('/', array('uses' => 'HomeController@showHome'))->before('auth');
Route::get('scheduler/sendmessage', array('uses' => 'SchedulerController@sendMessage'));
Route::get('login', array('uses' => 'HomeController@showLogin'))->before('guest');
Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::get('logout', array('uses' => 'HomeController@doLogout'))->before('auth');
Route::get('regs/regClient','RegistrationsController@regClient');

// Patients Routes
Route::get('patients/outPatientVisit','PatientsController@outPatientVisit');
Route::get('patients/ANCVisit','PatientsController@ANCVisit');
Route::get('patients/CWCVisit','PatientsController@CWCVisit');

Blade::extend(function($value) {
    return preg_replace('/\{\?(.+)\?\}/', '<?php ${1} ?>', $value);
});

/**
Route::get('password/reset', array(
  'uses' => 'PasswordController@remind',
  'as' => 'password.remind'
));

Route::get('password/reset/{token}', array(
  'uses' => 'PasswordController@reset',
  'as' => 'password.reset'
));

Route::post('password/reset/{token}', array(
  'uses' => 'PasswordController@update',
  'as' => 'password.update'
));
 * 
 */

Route::controller('password', 'RemindersController');
