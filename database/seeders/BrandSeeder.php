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
                'image_url' => 'https://images.unsplash.com/photo-1621768216002-5ac171876625?q=80&w=1474&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Samsung',
                'description' => 'Leading manufacturer of smartphones and home electronics.',
                'image_url' => 'https://images.unsplash.com/photo-1662947995689-ec5165848ad0?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sony',
                'description' => 'High-quality audio, video, and gaming products.',
                'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Finterbrand.com%2Fbest-global-brands%2Fsony%2F&psig=AOvVaw07QwJi3ipQ0LWjXimu7NNW&ust=1751898630492000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMDH_I65qI4DFQAAAAAdAAAAABAE',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dell',
                'description' => 'Reliable PCs, laptops, and business solutions.',
                'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Feveryonesocial.com%2Fresources%2Fdell-empowers-workforce-social-media%2F&psig=AOvVaw0IdTnDJjIOFgbAnXVMRnTk&ust=1751898569543000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCOipg_y4qI4DFQAAAAAdAAAAABAg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Logitech',
                'description' => 'Peripherals like keyboards, mice, and webcams.',
                'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.wired.com%2F2015%2F07%2Fnew-logitech-logo-hey-dont-just-make-mice-anymore%2F&psig=AOvVaw2zvW_NYLYJhYw0EaDhUjpd&ust=1751898675563000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMDw1qS5qI4DFQAAAAAdAAAAABAE',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'JBL',
                'description' => 'Audio equipment including speakers, headphones, and soundbars.',
                'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Far.pinterest.com%2Fpin%2F1116259457657434498%2F&psig=AOvVaw3cLS1ZOqQoN7dTaOP2l9Zf&ust=1751898702277000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMDKkrG5qI4DFQAAAAAdAAAAABAE',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Xbox',
                'description' => 'Gaming consoles and services by Microsoft.',
                'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Failogomakerr.com%2Fblog%2Fx-box-logo&psig=AOvVaw3KKF37mjZAvsg5iDXmvTIs&ust=1751898722557000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCOjJ4rq5qI4DFQAAAAAdAAAAABAE',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nintendo',
                'description' => 'Innovative video game consoles and iconic franchises.',
                'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pinterest.com%2Fpin%2F823806956808190964%2F&psig=AOvVaw3k7E0CRfXhsWilepLWi1cG&ust=1751898742253000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMChsce5qI4DFQAAAAAdAAAAABAW',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PlayStation',
                'description' => 'Gaming consoles and services by Sony Interactive Entertainment.',
                'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fturbologo.com%2Farticles%2Fplaystation-logo%2F&psig=AOvVaw0jbFP0XjaBGHUc3Lgldcxm&ust=1751898775268000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMDezNO5qI4DFQAAAAAdAAAAABAW',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Microsoft',
                'description' => 'Technology giant offering software, cloud, and hardware solutions.',
                'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fph.pinterest.com%2Fpin%2Ffour-assortedcolor-squares-microsoft-windows-logo-scalable-graphics-microsoft-new-logo-simple--384354149461310817%2F&psig=AOvVaw0xVpP30y1FUKuHHI8HLBlJ&ust=1751898801836000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCPCg0uS5qI4DFQAAAAAdAAAAABAW',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
