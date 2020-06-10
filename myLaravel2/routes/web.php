<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $cards  = config('pasta');
    $collection = collect($cards);
    $lunga = $collection -> where('tipo', 'lunga');
    $corta = $collection -> where('tipo', 'corta');
    $cortissima = $collection -> where('tipo', 'cortissima');

    // foreach ($cards as $card) {

    //     if ($card['tipo'] === 'lunga') {
    //         $lunga[] = $card;
    //     }
    //     if ($card['tipo'] === 'corta') {
    //         $corta[] = $card;
    //     }
    //     if ($card['tipo'] === 'cortissima') {
    //         $cortissima[] = $card;
    //     }
    // }
    return view('home', compact('lunga', 'corta', 'cortissima'));
});
