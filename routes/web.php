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
Route::get('/masyrakat/add', 'MasyarakatController@add')->name('masyarakat.add');
Route::post('/masyarakat/store', 'MasyarakatController@store')->name('masyarakat.store');
Route::get('masyarakat/edit/{id}', 'MasyarakatController@edit')->name('masyarakat.edit');
Route::patch('masyarakat/update/{id}', 'MasyarakatController@update')->name('masyarakat.update');
Route::get('masyrakat/delete/{id}', 'MasyarakatController@delete')->name('masyarakat.delete');

//Surat
Route::get('/surat', 'SuratController@index')->name('surat.index');
Route::get('/surat/add', 'SuratController@add')->name('surat.add');
Route::post('/surat/store', 'SuratController@store')->name('surat.store');
Route::get('surat/edit/{id}', 'SuratController@edit')->name('surat.edit');
Route::patch('surat/update/{id}', 'SuratController@update')->name('surat.update');
Route::get('surat/delete/{id}', 'SuratController@delete')->name('surat.delete');
