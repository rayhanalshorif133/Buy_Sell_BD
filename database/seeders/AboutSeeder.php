<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'description' => "B2M Technologies Ltd. Incorporated in Bangladesh is connected to all major cell phone operators, providing value added services through mobile phone network. Zing Mobile Group, Singapore is 50% owner of B2M Technologies ltd. and 50% by Axiom Technologies Ltd. Bangladesh. We are in the business of Content Provider giving value added service to Telco's subscribers. We have been operating in Bangladesh for the past 3 years. The main focus of the company is to provide latest infotainment to the every growing Mobile phone subscribers in Bangladesh. Providing value added services through mobile phone network. Zing Mobile Group, Singapore is 50%. B2M Technologies Ltd. Incorporated in Bangladesh is connected to all major cell phone operators, providing value added services through mobile phone network. Zing Mobile Group, Singapore is 50% owner of B2M Technologies ltd. and 50% by Axiom Technologies Ltd. Bangladesh.We are in the business of Content Provider giving value added service to Telco's subscribers. We have been operating in Bangladesh for the past 3 years.",
            'image' => '/storage/images/about/1675749068.jpg',
        ]);

    }
}
