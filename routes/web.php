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
	Route::get('/evento_classic_1', 'HomeController@evento_classic_1')->name('evento_classic_1');

Route::get('/classifica', 'HomeController@classifica')->name('classifica');
Route::get('/regolamento', 'HomeController@regolamento')->name('regolamento');



//AdminController

Route::get('/admin/form_assegnazione_auto_piloti', 'AdminController@form_assegnazione_auto_piloti')->name('form_assegnazione_auto_piloti');
Route::post('//admin/form_assegnazione_auto_piloti', 'AdminController@create')->name('auto.create');


Auth::routes();

