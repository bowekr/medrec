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


Auth::routes();

Route::get('/', function() {
	return redirect('/home');
});

Route::get('/home', 'RootController@index');
Route::resource('medicines', 'MedicinesController');
Route::resource('patients', 'PatientsController');
Route::resource('doctors', 'DoctorsController');

Route::resource('record', 'RecordController');