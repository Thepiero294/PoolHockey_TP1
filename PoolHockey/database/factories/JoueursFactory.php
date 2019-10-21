<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Joueur;
use Faker\Generator as Faker;

/**
 * Factory pour la création par seed des joueurs
 *
 * @return Faker Pattern a suivre pour la création
 */
$factory->define(Joueur::class, function (Faker $faker) {
    return [
        'nom_complet' => $faker->firstNameMale . ' ' . $faker->lastName,
        'equipe' => $faker->city,
        'nb_points_prevus' => $faker->numberBetween(0, 130),
        'position' => $faker->randomElement(['Défenseur', 'Attaquant', 'Gardien'])
    ];
});
