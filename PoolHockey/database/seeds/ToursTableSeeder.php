<?php

use Illuminate\Database\Seeder;

class ToursTableSeeder extends Seeder
{
    /**
     * Seeder pour le tour
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tour::class, 1)->create();
    }
}
