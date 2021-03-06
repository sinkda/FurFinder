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

Route::get('/', 'HomeController@show');
Route::get('/about', 'HomeController@about');
Route::get('/dog/{id?}', 'DogController@show');
Route::get('/dogs', 'DogController@show');
Route::get('/organization/{id?}', 'OrgController@show');
Route::get('/organizations', 'OrgController@show');


// Fallback to the homepage.
Route::fallback(function() {
    return redirect('/');
});