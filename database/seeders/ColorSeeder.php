<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Color::create([
            'name' => 'Not Set',
            'code' => '#4c4848',
        ]);

        Color::create([
            'name' => 'Not Set',
            'code' => '#232323',
        ]);
        Color::create([
            'name' => 'Not Set',
            'code' => '#57A8CC',
        ]);
        Color::create([
            'name' => 'Not Set',
            'code' => '#459C98',
        ]);
        Color::create([
            'name' => 'Not Set',
            'code' => '#034B48',
        ]);
    }
}
