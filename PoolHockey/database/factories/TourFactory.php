<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tour;
use Faker\Generator as Faker;

/**
 * Factory pour la création par seed du tour
 *
 * @return Faker Patern a suivre pour la création
 */
$factory->define(Tour::class, function (Faker $faker) {
    return [
        'id_participant' => $faker->numberBetween(1, 4),
    ];
});
