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


Route::get('profile','PageController@profile');
Route::get('home','PageController@home');
Route::get('about','PageController@about');
Route::get('contact','PageController@contact');
Route::get('team','PageController@team');
Route::get('get-feedback','PageController@storeFeedback');

//Database

Route::get('list','PageController@list');
Route::get('create','PageController@create');
Route::post('store','PageController@store');
Route::get('edit/{id}','PageController@edit')->name('edit');
Route::patch('update/{id}','PageController@update');
Route::get('delete/{id}','PageController@destroy');