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

Route::get('/', 'GeneralController@load')->name('home');

Route::post('/save', 'GeneralController@save')->name('save');

Route::get('/delete/{id}', 'GeneralController@delete')->name('delete');

Route::get('/find/{id}', 'GeneralController@find')->name('find');

Route::post('/modify', 'GeneralController@modify')->name('modify');
