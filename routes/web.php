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

Route::view('/', 'hp')->name('homepage');
Route::view('o-nas', 'pages.o-nas')->name('o-nas');
Route::view('co-umime', 'hp')->name('co-umime');
Route::view('cenik', 'hp')->name('cenik');
Route::view('reference', 'hp')->name('reference');
Route::view('kontakt', 'hp')->name('kontakt');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
