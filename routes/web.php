<?php

use Illuminate\Support\Facades\Route;

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
    return view('login');
});

Route::resource('/roles', 'App\Http\Controllers\RoleController');
Route::resource('/departments', 'App\Http\Controllers\DepartmentController');
Route::resource('/recruitments', 'App\Http\Controllers\RecruitmentController');
Route::resource('/candidates', 'App\Http\Controllers\CandidateController');
Route::resource('/employees', 'App\Http\Controllers\EmployeeController');

Route::get('/candidate/create/{id}', 'App\Http\Controllers\CandidateController@create');
Route::get('/candidate{id}', 'App\Http\Controllers\CandidateController@index');

Route::get('/employee/create/{id}', 'App\Http\Controllers\EmployeeController@create');
Route::get('/employee{id}', 'App\Http\Controllers\EmployeeController@index');
