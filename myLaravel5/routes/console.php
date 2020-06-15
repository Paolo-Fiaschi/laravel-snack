<?php

use App\Pasta;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;


Artisan::command('inspire', function () {
$this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('fillPastaDB', function () {
    $cards = config('pasta');
    foreach ($cards as $card) {

        $pasta = new Pasta;

        $pasta -> src = $card['src'];
        $pasta -> titolo = $card['titolo'];
        $pasta -> tipo = $card['tipo'];
        $pasta -> cottura = $card['cottura'];
        $pasta -> peso = $card['peso'];
        $pasta -> descrizione = $card['descrizione'];

        $pasta -> save();
    }
})->describe('Fill PastaDB from config db');
