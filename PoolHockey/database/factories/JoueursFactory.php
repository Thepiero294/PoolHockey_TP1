<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Joueur;
use Faker\Generator as Faker;

$factory->define(Joueur::class, function (Faker $faker) {
    return [
        'nom_complet' => $faker->firstNameMale . ' ' . $faker->lastName,
        'equipe' => $faker->city,
        'nb_points_prevus' => $faker->numberBetween(0, 130),
        'position' => $faker->randomElement(['Défenseur', 'Attaquant', 'Gardien'])
    ];
});
