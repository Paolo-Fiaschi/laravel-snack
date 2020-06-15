<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/pasta', 'PastaController@index')->name('pasta');
