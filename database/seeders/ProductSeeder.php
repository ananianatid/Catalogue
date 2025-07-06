<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; 
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = DB::table('categories')->pluck('id')->toArray();
        $brands = DB::table('brands')->pluck('id')->toArray();

        $sampleImages = [
            'https://images.unsplash.com/photo-1580894908361-9671950338c0',
            'https://images.unsplash.com/photo-1517336714731-489689fd1ca8',
            'https://images.unsplash.com/photo-1593642532400-2682810df593',
            'https://images.unsplash.com/photo-1587202372775-9893fd80d5fe',
            'https://images.unsplash.com/photo-1581291518831-6f0ae70c9b42',
        ];

        for ($i = 1; $i <= 30; $i++) {
            $name = "Produit Tech #$i";
            $slug = Str::slug($name . '-' . Str::random(4));
            $category_id = $categories[array_rand($categories)];
            $brand_id = $brands[array_rand($brands)];

            DB::table('products')->insert([
                'name' => $name,
                'slug' => $slug,
                'price' => rand(5000, 500000) / 100,
                'stock' => rand(0, 100),
                'discount_percent' => rand(0, 30),
                'category_id' => $category_id,
                'brand_id' => $brand_id,
                'is_active' => rand(0, 1),
                'is_featured' => rand(0, 1),
                'visibility' => collect(['public', 'draft', 'archived'])->random(),
                'description' => 'Description générique du produit tech #' . $i . '.',
                'tech_sheet' => 'Caractéristiques techniques du produit #' . $i . '.',
                'images' => json_encode([
                    $sampleImages[array_rand($sampleImages)],
                    $sampleImages[array_rand($sampleImages)],
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
