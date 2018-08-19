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
    return view('home');
});

Route::get('/events', 'EventsController@index');
Route::get('/Companies', 'CommitteesController@companies');
Route::get('/about', 'CommitteesController@about');

Route::get('/Linux', 'CommitteesController@Linux');
Route::get('/Blender', 'CommitteesController@Blender');
Route::get('/Laravel', 'CommitteesController@Laravel');
Route::get('/Artwork', 'CommitteesController@Artwork');
Route::get('/Logistics', 'CommitteesController@Logistics');
Route::get('/Content Creators', 'CommitteesController@CCC');
Route::get('/Blender Workshop', 'CommitteesController@BlenderWorkshop');
Route::get('/English Heroes', 'CommitteesController@EnglishHeroes');
Route::get('/Linux Workshop', 'CommitteesController@LinuxWorkshop');
Route::get('/Human Resources', 'CommitteesController@HumanResource');
Route::get('/Public Relations', 'CommitteesController@PublicRelations');
Route::get('/Fundraising', 'CommitteesController@fundraising');
Route::get('/Web', 'CommitteesController@Web');
Route::get('/Projects', 'CommitteesController@Projects');

Route::get('/apply', 'EventsController@show_apply');
Route::post('/apply', 'EventsController@apply');

Route::get('/done', 'EventsController@done');