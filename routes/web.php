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

Route::get('/intro','AdministrationController@index')->name('intro');
Route::get('/','WelcomeController@index')->name('home');
Route::get('/creintro','AdministrationController@create')->name('create');
route::post('/save','AdministrationController@store')->name('save');
route::get('/edit/{id}','AdministrationController@edit')->name('administrationch');
route::post('/upadte/{id}','AdministrationController@update')->name('update');
route::get('/delete/{id}','AdministrationController@destroy')->name('delete');
