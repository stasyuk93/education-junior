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
use Illuminate\Support\Facades\Route;

Route::get('ajax/search-junior','JuniorController@search');
Route::get('ajax/search-condition','TeamLeadController@searchCondition');
Route::post('ajax/is-complete-task','EmployeeTaskController@updateIsComplete');
Route::post('ajax/set-condition-employee','TeamLeadController@setCondition');

Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'team-lead/{account_id}', 'as' => 'team-lead.'], function(){
    Route::get('','TeamLeadController@index');
    Route::resource('task','TaskController');

    Route::group(['prefix' => 'task/{task_id}'], function(){
        Route::get('implementer/{employee_task_id}','TeamLeadController@getImplementer')->name('implementer');
        Route::resource('delegate-task','EmployeeTaskController');
        Route::post('update-criteria-task','EmployeeTaskController@updateCriteria')->name('update-criteria');
    });

});


Route::get('junior/{junior_id}','JuniorController@index')->name('junior');
Route::get('task-junior/{employee_task_id}','EmployeeTaskController@showTaskByJunior')->name('task-junior');

Route::get('manager/{manager_id}', 'ManagerController@index')->name('manager');

Route::resource('listener-condition','ListenerConditionController');

Route::get('listener-employee/subscribe-list','ListenerEmployeeController@subscribeList')->name('subscribe-list');

Route::get('influence-change-condition/{event}', 'InfluenceChangeConditionController@index')->name('influence');

Route::resource('listener-employee','ListenerEmployeeController');

