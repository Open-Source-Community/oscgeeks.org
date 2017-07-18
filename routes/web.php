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

Route::get('/Linux', 'CommitteesController@index1');

Route::get('/about', 'CommitteesController@index2');

Route::get('/Blender', 'CommitteesController@index3');

Route::get('/Laravel', 'CommitteesController@index4');

Route::get('/Artwork', 'CommitteesController@index5');

Route::get('/Companies', 'CommitteesController@index6');

Route::get('/Logistics', 'CommitteesController@index7');

Route::get('/Content Creators','CommitteesController@index8');