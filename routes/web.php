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
    return redirect('/home');
});

Route::get('/form', function () {
    return redirect('/home');
});

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

Route::get('/Blender Workshop','CommitteesController@index10');

Route::get('/English Heroes','CommitteesController@index11');

Route::get('/Linux Workshop','CommitteesController@index12');

Route::get('/Human Resources','CommitteesController@index13');

Route::get('/Public Relations','CommitteesController@index14');

Route::get('/Fundraising','CommitteesController@index15');

Route::get('/Web','CommitteesController@index16');

Route::get('/Projects','CommitteesController@index17');

//Route::get('/form', 'CommitteesController@index9');
//
//Route::get('/done','CommitteesController@done');
//
//Route::get('/refused','CommitteesController@refused');
//
//Route::post('/done','RegisterationForm@store');