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

Route::get('homework_show','App\Http\Controllers\HomeworksController@show');
Route::get('homework_delete/{id}','App\Http\Controllers\HomeworksController@destroy');
Route::get('homework_create','App\Http\Controllers\HomeworksController@create');
Route::post('homework_submit','App\Http\Controllers\HomeworksController@store');
Route::get('homework_edit/{id}','App\Http\Controllers\HomeworksController@edit');
Route::post('homework_update/{id}','App\Http\Controllers\HomeworksController@update');