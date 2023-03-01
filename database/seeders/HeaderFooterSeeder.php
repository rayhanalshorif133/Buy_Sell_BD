<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\HeaderAndFooter;

class HeaderFooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        HeaderAndFooter::create([
            'site_logo' => '/storage/images/site_logo/1675931928.png',
            'favicon' => '/storage/images/favicon/1675931928.png',
            'email' => 'admin@gmail.com',
            'phone' => '123-456-789',
            'twitter' => 'https://twitter.com',
            'facebook' => 'https://facebook.com',
            'linkedin' => 'https://bd.linkedin.com/',
            'instagram' => 'https://www.instagram.com/',
            'footer_title' => 'Copyright © 2023 B2M Technologies. All rights reserved.',
        ]);
    }
}
