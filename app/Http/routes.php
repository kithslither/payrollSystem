<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//Route::get('employees/create', 'EmployeesController@create');
//Route::resource('employees', 'EmployeesController', ['only' => ['index', 'store']]);
//Route::resource('employees/{id}', 'EmployeesController');
//Route::resource('employees/{id}', 'EmployeesController@show');
//Route::delete('employees/{id}', 'EmployeesController@destroy');
//Route::get('employees/{id}', 'EmployeesController@edit');
Route::resource('employees', 'EmployeesController');


//Route::get('admin','pagesController@getIndex');
//Route::get('employee', 'pagesController@getEmployees');
//Route::get('tab', 'pagesController@tab');

//Route::get('addemployees', array('as' => 'addemployees', 'uses' => 'pagesController@create'));

Route:: controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController', 
	]);