<?php

use Illuminate\Database\Seeder;

class JoueursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Joueur::class, 150)->create();
    }
}
