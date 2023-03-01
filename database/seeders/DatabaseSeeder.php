<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // run the seed
        $this->call([
            UserSeeder::class,
            HeaderFooterSeeder::class,
            AboutSeeder::class,
            ColorSeeder::class,
            SliderSeeder::class,
            ServiceSeeder::class,
        ]);
    }
}
