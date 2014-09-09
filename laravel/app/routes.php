<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/blog', 'PagesController@blog');
Route::get('/events', 'PagesController@events');
Route::get('/contact', 'PagesController@contact');
Route::get('/arrivals', 'PagesController@arrivals');

Route::get('/styleguide', 'PagesController@styleguide');
Route::get('/colors', 'PagesController@colors');
Route::get('/typography', 'PagesController@typography');
Route::get('/logos', 'PagesController@logos');
Route::get('/grids', 'PagesController@grids');
Route::get('/buttons', 'PagesController@buttons');
Route::get('/prodview', 'PagesController@prodview');