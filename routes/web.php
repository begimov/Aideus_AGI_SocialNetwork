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

/*
* Home
*/
Route::get('/', 'HomeController@show')->name('home');

/*
* Auth
*/
Route::get('/signup', 'AuthController@getSignUp')->name('auth.signup')->middleware('guest');
Route::post('/signup', 'AuthController@postSignUp')->middleware('guest');

Route::get('/signin', 'AuthController@getSignIn')->name('auth.signin')->middleware('guest');
Route::post('/signin', 'AuthController@postSignIn')->middleware('guest');

Route::get('/signout', 'AuthController@getSignOut')->name('auth.signout')->middleware('authenticated');

/*
* Search
*/
Route::get('/search', 'SearchController@search')->name('search.results')->middleware('authenticated');
