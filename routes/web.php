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

Route::post('/add', 'TasksController@addTask');
Route::get('/get', 'TasksController@getTasks');
Route::post('/delete', 'TasksController@deleteTask');
Route::post('/show', 'TasksController@getOneTask');