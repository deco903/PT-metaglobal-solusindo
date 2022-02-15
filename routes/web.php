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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home','HomeController@index')->name('cat.index');
Route::post('/store','HomeController@store')->name('cat.input');
Route::get('/edit/{id}','HomeController@edit');
Route::post('/update','HomeController@update')->name('cat.update');
Route::get('/delete/{id}','HomeController@delete')->name('delete');













