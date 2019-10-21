<?php

use Illuminate\Database\Seeder;

class JoueursTableSeeder extends Seeder
{
    /**
     * Seeder pour les joueurs
     *
     * @return void
     */
    public function run()
    {
        factory(App\Joueur::class, 150)->create();
    }
}
