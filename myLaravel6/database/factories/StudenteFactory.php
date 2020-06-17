<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Studente;
use Faker\Generator as Faker;

$factory->define(Studente::class, function (Faker $faker) {
    return [
        'nome' => $faker -> name(),
        'cognome' => $faker -> lastName(),
        'email' => $faker -> email(),
        'data_di_nascita' => $faker -> date(),
        'numero_telefono' => $faker -> phoneNumber(),
        'indirizzo' => $faker -> address(),
        'tipo_carta_di_credito' => $faker -> creditCardType(),
        'numero_carta_di_credito' => $faker -> creditCardNumber()
    ];
});
