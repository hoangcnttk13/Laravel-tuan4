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
//tao group route cties

Route::get('/','CityController@index')->name('cities.index');
Route::get('/create','CityController@create')->name('cities.create');
Route::post('/create','CityController@store')->name('cities.store');
Route::get('/{id}/edit','CityController@edit')->name('cities.edit');
Route::post('/{id}/edit','CityController@update')->name('cities.update');
Route::get('/{id}/delete','CityController@destroy')->name('cities.destroy');

Route::get('/customers','CustomerController@index')->name('customers.index');
Route::get('/customers/create','CustomerController@create')->name('customers.create');
Route::post('/customers/create','CustomerController@store')->name('customers.store');
Route::get('/customers/{id}/edit','CustomerController@edit')->name('customers.edit');
Route::post('/customers/{id}/edit','CustomerController@update')->name('customers.update');
Route::get('/customers/{id}/delete','CustomerController@destroy')->name('customers.destroy');
Route::get('/filter','CustomerController@filterByCity')->name('customers.filterByCity');
Route::get('/search','CustomerController@search')->name('customers.search');