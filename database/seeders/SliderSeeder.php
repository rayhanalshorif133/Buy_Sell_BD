<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Slider::create([
            'title' => '1st',
            'description' => 'No description',
            'image' => '/storage/images/slider/1676188405.jpg',
            'status' => 'active',
        ]);
        Slider::create([
            'title' => '2nd',
            'description' => 'No description',
            'image' => '/storage/images/slider/1676188417.jpg',
            'status' => 'active',
        ]);
        Slider::create([
            'title' => '3rd',
            'description' => 'No description',
            'image' => '/storage/images/slider/1676188424.jpg',
            'status' => 'active',
        ]);
        Slider::create([
            'title' => '4th',
            'description' => 'No description',
            'image' => '/storage/images/slider/1676188430.png',
            'status' => 'active',
        ]);

    }
}
