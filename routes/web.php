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

Auth::routes();


//Masyarakat
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/masyarakat', 'MasyarakatController@index')->name('masyarakat.index');
Route::get('/masyrarakat/add', 'MasyarakatController@add')->name('masyarakat.add');
Route::post('/masyrakat/store', 'MasyarakatController@store')->name('masyarakat.store');
Route::get('masyrakat/edit/{id}', 'MasyarakatController@edit')->name('masyarakat.edit');
Route::patch('masyarakat/update/{id}', 'MasyarakatController@update')->name('masyarakat.update');
Route::get('masyrakat/delete/{id}', 'MasyarakatController@delete')->name('masyarakat.delete');
