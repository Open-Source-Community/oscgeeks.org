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

Route::get('/home', function () {
    return view('home');
});

Route::get('/events', 'EventsController@index');

Route::get('/linux', 'CommitteesController@index1');

Route::get('/about', 'CommitteesController@index2');

Route::get('/blender', 'CommitteesController@index3');

Route::get('/laravel', 'CommitteesController@index4');

Route::get('/art', 'CommitteesController@index5');