<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Smartphones',
                'description' => 'Téléphones mobiles intelligents de toutes marques.',
                'image_url' => 'https://images.unsplash.com/photo-1604671368394-2240d0b1bb6c?q=80&w=1631&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ordinateurs portables',
                'description' => 'Laptops pour le travail, les études ou le gaming.',
                'image_url' => 'https://images.unsplash.com/photo-1611186871348-b1ce696e52c9?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Casques & Écouteurs',
                'description' => 'Audio haute qualité pour tous les usages.',
                'image_url' => 'https://images.unsplash.com/photo-1546435770-a3e426bf472b?q=80&w=1465&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Consoles de jeux',
                'description' => 'PlayStation, Xbox, Nintendo et autres plateformes.',
                'image_url' => 'https://images.unsplash.com/photo-1509198397868-475647b2a1e5?q=80&w=647&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Accessoires',
                'description' => 'Souris, claviers, webcams, housses et plus.',
                'image_url' => 'https://images.unsplash.com/photo-1595304739328-740de7b50281?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8QWNjZXNzb2lyZXMlMjB0ZWNofGVufDB8fDB8fHww',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tablettes',
                'description' => 'Tablettes tactiles pour le travail, l’éducation ou les loisirs.',
                'image_url' => 'https://images.unsplash.com/photo-1585770536735-27993a080586?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGlwYWR8ZW58MHx8MHx8fDA%3D',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Composants PC',
                'description' => 'Cartes graphiques, RAM, processeurs, SSD, etc.',
                'image_url' => 'https://images.unsplash.com/photo-1665055564667-7f84c351b4c9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGtleWJvcmRzfGVufDB8fDB8fHww',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
