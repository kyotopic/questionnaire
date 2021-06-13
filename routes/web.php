<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@root')->name('root');
Route::get('index', 'PagesController@index')->name('index');
Route::get('showlist', 'PagesController@show');
Route::post('submit', 'PagesController@store')->name('submit');
Route::view('feedback','pages.feedback')->name('feedback');
