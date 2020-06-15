<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    return view('home');
}) ->name('home');
Route::get('/showPasta', function () {
    $cards  = config('pasta');
    $collection = collect($cards)->map(function($item, $key){
        $item['id'] = $key;
        return $item;
    });
    $lunga = $collection -> where('tipo', 'lunga');
    $corta = $collection -> where('tipo', 'corta');
    $cortissima = $collection -> where('tipo', 'cortissima');


    return view('tipiPasta', compact('lunga', 'corta', 'cortissima'));
}) ->name('tipiPasta');

Route::get('/showPasta/{id}', function ($id) {
    $cards  = config('pasta');
    $card = $cards[$id];
    return view('showPasta', compact('card'));
}) ->name('showPasta');
