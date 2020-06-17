<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'StudenteController@index') -> name('home');
Route::get('/showStudente/{id}', 'StudenteController@showStudente') -> name('studente');
Route::get('/showStudente/delete/{id}', 'StudenteController@delete') -> name('delete');
