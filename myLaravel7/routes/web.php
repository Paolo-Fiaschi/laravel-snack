<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'AutomobiliController@index') -> name('home');
Route::get('/show/{id}', 'AutomobiliController@show') -> name('show');
Route::get('/show/delete/{id}', 'AutomobiliController@delete') -> name('delete');
Route::get('/create', 'AutomobiliController@create') -> name('create');
Route::post('/store', 'AutomobiliController@store') -> name('store');
Route::get('/edit{id}', 'AutomobiliController@edit') -> name('edit');
Route::post('/update{id}', 'AutomobiliController@update') -> name('update');

