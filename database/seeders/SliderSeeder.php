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
            'slider_category' => 'membership',
            'title' => json_encode(['Find Your','Best Activities']),
            'image' => '/web/assets/images/banner_image/membership/GOLF_PLAYER.png',
            'status' => 'active',
        ]);

        Slider::create([
            'slider_category' => 'membership',
            'title' => json_encode(['WANT TO JOIN','YOUR DESIRE CLUB']),
            'image' => '/web/assets/images/banner_image/membership/club.png',
            'status' => 'active',
        ]);

        Slider::create([
            'slider_category' => 'service',
            'title' => json_encode(['Want to hassle free license service']),
            'image' => '/web/assets/images/banner_image/line_for_license.png',
            'status' => 'active',
        ]);

        Slider::create([
            'slider_category' => 'property',
            'title' => json_encode(['Want to buy, sell and rent land, property']),
            'image' => '/web/assets/images/banner_image/home.png',
            'status' => 'active',
        ]);

        Slider::create([
            'slider_category' => 'ticket',
            'title' => json_encode(['Want to Booking','Air Ticket']),
            'image' => '/web/assets/images/banner_image/ticket.png',
            'status' => 'active',
        ]);


    }
}
