<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            [
                'name' => 'Apple',
                'description' => 'Premium electronics and technology products.',
                'image_url' => 'https://brandlogos.net/wp-content/uploads/2012/12/apple-classic-logo-vector.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Samsung',
                'description' => 'Leading manufacturer of smartphones and home electronics.',
                'image_url' => 'https://brandlogos.net/wp-content/uploads/2014/08/samsung-logo-preview.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sony',
                'description' => 'High-quality audio, video, and gaming products.',
                'image_url' => 'https://brandlogos.net/wp-content/uploads/2013/05/sony-corporation-vector-logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dell',
                'description' => 'Reliable PCs, laptops, and business solutions.',
                'image_url' => 'https://www.logodesign.org/wp-content/uploads/2021/12/Screen-Shot-2021-12-03-at-8.29.01-AM.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Logitech',
                'description' => 'Peripherals like keyboards, mice, and webcams.',
                'image_url' => 'https://brandlogos.net/wp-content/uploads/2014/11/logitech_1997-2012-logo_brandlogos.net_dccsb-512x463.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'JBL',
                'description' => 'Audio equipment including speakers, headphones, and soundbars.',
                'image_url' => 'https://brandlogos.net/wp-content/uploads/2013/03/jbl-professional-vector-logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Xbox',
                'description' => 'Gaming consoles and services by Microsoft.',
                'image_url' => 'https://brandlogos.net/wp-content/uploads/2020/03/Xbox-icon-512x512.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nintendo',
                'description' => 'Innovative video game consoles and iconic franchises.',
                'image_url' => 'https://brandlogos.net/wp-content/uploads/2015/03/nintendo-logo-brandlogos.net_-512x512.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PlayStation',
                'description' => 'Gaming consoles and services by Sony Interactive Entertainment.',
                'image_url' => 'https://brandlogos.net/wp-content/uploads/2022/05/playstation-logo_brandlogos.net_vflvi-512x512.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Microsoft',
                'description' => 'Technology giant offering software, cloud, and hardware solutions.',
                'image_url' => 'https://brandlogos.net/wp-content/uploads/2014/08/microsoft-logo_brandlogos.net_y0fjb-512x512.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
