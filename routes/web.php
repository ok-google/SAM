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
Route::get('/masyarakat/add', 'MasyarakatController@add')->name('masyarakat.add');
Route::post('/masyrakat/store', 'MasyarakatController@store')->name('masyarakat.store');
Route::get('masyrakat/edit/{id}', 'MasyarakatController@edit')->name('masyarakat.edit');
Route::patch('masyarakat/update/{id}', 'MasyarakatController@update')->name('masyarakat.update');
Route::get('masyrakat/delete/{id}', 'MasyarakatController@delete')->name('masyarakat.delete');


Route::get('administrator/add', 'AdministratorController@add')->name('administrator.add');
Route::post('administrator/store', 'AdministratorController@store')->name('administrator.store');
Route::get('/administrator', 'AdministratorController@index')->name('administrator.index');
Route::get('administrator/edit/{id}', 'AdministratorController@edit')->name('administrator.edit');
Route::get('administrator/delete/{id}', 'AdministratorController@delete')->name('administrator.delete');
Route::patch('administrator/update/{id}', 'AdministratorController@update')->name('administrator.update');