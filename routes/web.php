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

Route::get('/', 'HomeController@homepage')->name('homepage');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/hall_of_fame', 'HomeController@hof')->name('hof');
Route::get('/eventi', 'HomeController@eventi')->name('eventi');

Auth::routes();

