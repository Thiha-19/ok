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
    return view('welcome');
});

Route::resource('/roles', 'App\Http\Controllers\RoleController');
Route::resource('/departments', 'App\Http\Controllers\DepartmentController');
Route::resource('/recruitments', 'App\Http\Controllers\RecruitmentController');
Route::resource('/candidates', 'App\Http\Controllers\CandidateController');
