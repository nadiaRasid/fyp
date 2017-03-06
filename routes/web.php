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

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index');

    //profile
    Route::get('/profile', 'ProfilesController@index');
    Route::get('/profile/{edit}/edit', 'ProfilesController@edit');
    Route::patch('/profile/{profile}', 'ProfilesController@update');

    //event
    Route::get('/event', 'EventsController@index');
    Route::get('/event/create', 'EventsController@create');
    Route::post('/event', 'EventsController@store');
    Route::get('/event/{event}', 'EventsController@show');
    Route::get('/event/{event}/edit', 'EventsController@edit');
    Route::patch('/event/{event}', 'EventsController@update');
    Route::delete('/event/{event}/delete', 'EventsController@destroy');

    //search
    // Route::get('/search', 'SearchController@index');
    // Route::get('/search/find', 'SearchController@find');

    // Route::get('profile', 'ProfilesController@profile');
    // Route::post('profile', 'ProfilesController@update_avatar');
});

Auth::routes();
