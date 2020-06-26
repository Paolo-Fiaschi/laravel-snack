<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});
Route::get('post', 'PostsController@index') -> name('post');
Route::get('/show/{id}', 'PostsController@show') -> name('show');
Route::get('/show/delete/{id}', 'PostsController@delete') -> name('delete');
Route::get('/edit/{id}', 'PostLoggedController@edit') -> name('edit');
Route::post('/update/{id}', 'PostLoggedController@update') -> name('update');
Route::get('/create', 'PostsController@create') -> name('create');
Route::post('/store', 'PostsController@store') -> name('store');

