<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'title' => 'Membership',
            'description' => '',
            'image' => '/storage/images/service/1675855459.jpg',
            'status' => 'active',
        ]);
        Service::create([
            'title' => 'License',
            'description' => '',
            'image' => '/storage/images/service/1675855470.jpg',
            'status' => 'active',
        ]);
        Service::create([
            'title' => 'Property',
            'description' => '',
            'image' => '/storage/images/service/1675855480.png',
            'status' => 'active',
        ]);
        Service::create([
            'title' => 'Collectables',
            'description' => '',
            'image' => '/storage/images/service/1675855486.png',
            'status' => 'active',
        ]);
    }
}
