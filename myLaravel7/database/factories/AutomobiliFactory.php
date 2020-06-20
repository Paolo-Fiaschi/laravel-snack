<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Automobile;
use Faker\Generator as Faker;

$factory->define(Automobile::class, function (Faker $faker) {
    return [
        'marca' => $faker -> randomElement($array = array('Volvo', 'Audi', 'BMW', 'Volkswagen', 'Fiat', 'Mercedes-Benz')),
        'peso' => $faker -> numberBetween(1000, 3000),
        'colore' => $faker -> safeColorName(),
        'proprietario' => $faker -> name(),
        'username' => $faker -> userName(),
        'pw' => $faker -> password(),
        'anno' => $faker -> year()
    ];
});
