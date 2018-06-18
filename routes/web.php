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

// Route::get('/', function () {
//     return view('homepage.homepage');
// })->name('home');

Route::get('/', 'GeneralController@load')->name('home');

Route::post('/save', 'GeneralController@save')->name('save');

Route::get('/delete/{id}', 'GeneralController@delete')->name('delete');
