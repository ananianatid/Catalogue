<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
// class ProductSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run(): void
//     {
//         $categories = DB::table('categories')->pluck('id')->toArray();
//         $brands = DB::table('brands')->pluck('id')->toArray();

//         $sampleImages = [
//             'https://images.unsplash.com/photo-1580894908361-9671950338c0',
//             'https://images.unsplash.com/photo-1517336714731-489689fd1ca8',
//             'https://images.unsplash.com/photo-1593642532400-2682810df593',
//             'https://images.unsplash.com/photo-1587202372775-9893fd80d5fe',
//             'https://images.unsplash.com/photo-1581291518831-6f0ae70c9b42',
//         ];

//         for ($i = 1; $i <= 30; $i++) {
//             $name = "Produit Tech #$i";
//             $slug = Str::slug($name . '-' . Str::random(4));
//             $category_id = $categories[array_rand($categories)];
//             $brand_id = $brands[array_rand($brands)];

//             DB::table('products')->insert([
//                 'name' => $name,
//                 'slug' => $slug,
//                 'price' => rand(5000, 500000) / 100,
//                 'stock' => rand(0, 100),
//                 'discount_percent' => rand(0, 30),
//                 'category_id' => $category_id,
//                 'brand_id' => $brand_id,
//                 'is_active' => rand(0, 1),
//                 'is_featured' => rand(0, 1),
//                 'visibility' => collect(['public', 'draft', 'archived'])->random(),
//                 'description' => 'Description générique du produit tech #' . $i . '.',
//                 'tech_sheet' => 'Caractéristiques techniques du produit #' . $i . '.',
//                 'images' => json_encode([
//                     $sampleImages[array_rand($sampleImages)],
//                     $sampleImages[array_rand($sampleImages)],
//                 ]),
//                 'created_at' => now(),
//                 'updated_at' => now(),
//             ]);
//         }
//     }
// }

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // --- 10 Produits en Promotion (is_active = true) ---
            [
                'name' => 'Samsung Galaxy S23 Ultra',
                'price' => 750000.00, // FCFA [1]
                'stock' => 30,
                'discount_percent' => 15, // En promotion
                'category_id' => 1, // Smartphones [9]
                'brand_id' => 2, // Samsung [3, 4]
                'is_active' => true, // Actif [1]
                'is_featured' => true, // Produit mis en avant [1]
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Un smartphone puissant** avec des capacités photo exceptionnelles.", // Description Markdown [2]
                'tech_sheet' => "- **Écran:** Dynamic AMOLED 2X\n- **Processeur:** Snapdragon 8 Gen 2\n- **Caméra:** 200MP\n- **Batterie:** 5000mAh", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Apple MacBook Air M2',
                'price' => 980000.00, // FCFA [1]
                'stock' => 25,
                'discount_percent' => 10, // En promotion
                'category_id' => 2, // Ordinateurs portables [9, 10]
                'brand_id' => 1, // Apple [3]
                'is_active' => true, // Actif [1]
                'is_featured' => true, // Produit mis en avant [1]
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Portable ultra-léger** et puissant, idéal pour la productivité.", // Description Markdown [2]
                'tech_sheet' => "- **Puce:** Apple M2\n- **RAM:** 8Go\n- **Stockage:** 256Go SSD\n- **Écran:** Liquid Retina 13.6 pouces", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Sony WH-1000XM5',
                'price' => 280000.00, // FCFA [1]
                'stock' => 40,
                'discount_percent' => 20, // En promotion
                'category_id' => 3, // Casques & Écouteurs [10, 11]
                'brand_id' => 3, // Sony [4]
                'is_active' => true, // Actif [1]
                'is_featured' => true, // Produit mis en avant [1]
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Casque à réduction de bruit** leader, pour une immersion totale.", // Description Markdown [2]
                'tech_sheet' => "- **Type:** Sans fil, circum-aural\n- **Réduction de bruit:** Oui\n- **Autonomie:** 30 heures\n- **Connectivité:** Bluetooth 5.2", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Dell XPS 15',
                'price' => 1200000.00, // FCFA [1]
                'stock' => 15,
                'discount_percent' => 12, // En promotion
                'category_id' => 2, // Ordinateurs portables [9, 10]
                'brand_id' => 4, // Dell [4, 5]
                'is_active' => true, // Actif [1]
                'is_featured' => true, // Produit mis en avant [1]
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Ordinateur portable premium** pour créateurs et professionnels.", // Description Markdown [2]
                'tech_sheet' => "- **Processeur:** Intel Core i7\n- **RAM:** 16Go\n- **Stockage:** 512Go SSD\n- **Carte graphique:** NVIDIA GeForce RTX 3050", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Logitech MX Master 3S',
                'price' => 75000.00, // FCFA [1]
                'stock' => 60,
                'discount_percent' => 18, // En promotion
                'category_id' => 5, // Accessoires [11, 12]
                'brand_id' => 5, // Logitech [5]
                'is_active' => true, // Actif [1]
                'is_featured' => true, // Produit mis en avant [1]
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Souris ergonomique** avancée pour une productivité maximale.", // Description Markdown [2]
                'tech_sheet' => "- **Capteur:** Darkfield 8000 DPI\n- **Connectivité:** Bluetooth, USB-C\n- **Boutons:** 7 programmables\n- **Autonomie:** 70 jours", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'JBL Flip 6',
                'price' => 90000.00, // FCFA [1]
                'stock' => 70,
                'discount_percent' => 25, // En promotion
                'category_id' => 3, // Casques & Écouteurs [10, 11]
                'brand_id' => 6, // JBL [5, 6]
                'is_active' => true, // Actif [1]
                'is_featured' => true, // Produit mis en avant [1]
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Enceinte portable** robuste avec un son puissant et clair.", // Description Markdown [2]
                'tech_sheet' => "- **Puissance:** 30W RMS\n- **Autonomie:** 12 heures\n- **Étanchéité:** IP67\n- **Connectivité:** Bluetooth 5.1", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Xbox Series X',
                'price' => 450000.00, // FCFA [1]
                'stock' => 20,
                'discount_percent' => 10, // En promotion
                'category_id' => 4, // Consoles de jeux [11]
                'brand_id' => 7, // Xbox [6]
                'is_active' => true, // Actif [1]
                'is_featured' => true, // Produit mis en avant [1]
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**La console la plus puissante** pour une expérience de jeu 4K immersive.", // Description Markdown [2]
                'tech_sheet' => "- **Processeur:** Zen 2 Octa-core\n- **GPU:** RDNA 2\n- **Stockage:** 1TB SSD\n- **Résolution:** Jusqu'à 8K HDR", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Nintendo Switch OLED',
                'price' => 320000.00, // FCFA [1]
                'stock' => 35,
                'discount_percent' => 8, // En promotion
                'category_id' => 4, // Consoles de jeux [11]
                'brand_id' => 8, // Nintendo [6, 7]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Console hybride** avec un écran OLED vibrant pour une expérience de jeu améliorée.", // Description Markdown [2]
                'tech_sheet' => "- **Écran:** OLED 7 pouces\n- **Stockage:** 64Go\n- **Mode TV:** Oui\n- **Batterie:** 4.5-9 heures", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'PlayStation 5 Disc Edition',
                'price' => 500000.00, // FCFA [1]
                'stock' => 18,
                'discount_percent' => 10, // En promotion
                'category_id' => 4, // Consoles de jeux [11]
                'brand_id' => 9, // PlayStation [7]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Console nouvelle génération** offrant des chargements ultra-rapides et des graphismes époustouflants.", // Description Markdown [2]
                'tech_sheet' => "- **Processeur:** AMD Zen 2\n- **GPU:** RDNA 2\n- **Stockage:** 825Go SSD\n- **Support:** Blu-ray 4K UHD", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Microsoft Surface Pro 9',
                'price' => 850000.00, // FCFA [1]
                'stock' => 22,
                'discount_percent' => 15, // En promotion
                'category_id' => 6, // Tablettes [12]
                'brand_id' => 10, // Microsoft [7, 8]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Tablette 2-en-1** polyvalente pour le travail et la créativité.", // Description Markdown [2]
                'tech_sheet' => "- **Écran:** PixelSense Flow 13 pouces\n- **Processeur:** Intel Core i5\n- **RAM:** 8Go\n- **Stockage:** 256Go SSD", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],

            // --- 30 Nouveaux Produits (non en promotion, non mis en avant sauf si déjà compté dans les 7) ---
            [
                'name' => 'Apple iPhone 15 Pro Max',
                'price' => 900000.00, // FCFA [1]
                'stock' => 45,
                'discount_percent' => 0,
                'category_id' => 1, // Smartphones [9]
                'brand_id' => 1, // Apple [3]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Le dernier cri d'Apple** avec des performances inégalées et une caméra révolutionnaire.", // Description Markdown [2]
                'tech_sheet' => "- **Puce:** A17 Bionic\n- **Écran:** Super Retina XDR\n- **Caméras:** Pro System", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Samsung Galaxy Tab S9',
                'price' => 600000.00, // FCFA [1]
                'stock' => 28,
                'discount_percent' => 0,
                'category_id' => 6, // Tablettes [12]
                'brand_id' => 2, // Samsung [3, 4]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Tablette Android premium** avec écran AMOLED et S Pen inclus.", // Description Markdown [2]
                'tech_sheet' => "- **Écran:** Dynamic AMOLED 2X\n- **Processeur:** Snapdragon 8 Gen 2\n- **S Pen:** Oui", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Sony PlayStation VR2',
                'price' => 400000.00, // FCFA [1]
                'stock' => 10,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires [11, 12]
                'brand_id' => 3, // Sony [4]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Plongez dans la réalité virtuelle** avec une fidélité graphique incroyable.", // Description Markdown [2]
                'tech_sheet' => "- **Affichage:** OLED 2000x2040 par œil\n- **Champ de vision:** 110 degrés\n- **Compatibilité:** PS5", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Dell Alienware Aurora R15',
                'price' => 2500000.00, // FCFA [1]
                'stock' => 5,
                'discount_percent' => 0,
                'category_id' => 2, // Ordinateurs portables [9, 10]
                'brand_id' => 4, // Dell [4, 5]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**PC de jeu extrême** pour les gamers exigeants.", // Description Markdown [2]
                'tech_sheet' => "- **Processeur:** Intel Core i9\n- **Carte graphique:** NVIDIA GeForce RTX 4090\n- **Refroidissement:** Liquide", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Logitech G Pro X Superlight',
                'price' => 120000.00, // FCFA [1]
                'stock' => 55,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires [11, 12]
                'brand_id' => 5, // Logitech [5]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Souris de gaming ultra-légère** pour une précision maximale.", // Description Markdown [2]
                'tech_sheet' => "- **Poids:** <63g\n- **Capteur:** HERO 25K DPI\n- **Connectivité:** Lightspeed Wireless", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'JBL Bar 9.1 True Wireless Surround',
                'price' => 350000.00, // FCFA [1]
                'stock' => 12,
                'discount_percent' => 0,
                'category_id' => 3, // Casques & Écouteurs [10, 11]
                'brand_id' => 6, // JBL [5, 6]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Barre de son immersive** avec enceintes surround détachables.", // Description Markdown [2]
                'tech_sheet' => "- **Canaux:** 9.1.4\n- **Puissance:** 820W\n- **Dolby Atmos:** Oui", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Microsoft Xbox Wireless Headset',
                'price' => 80000.00, // FCFA [1]
                'stock' => 40,
                'discount_percent' => 0,
                'category_id' => 3, // Casques & Écouteurs [10, 11]
                'brand_id' => 7, // Xbox (Microsoft) [6]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Casque gaming sans fil** optimisé pour Xbox, son immersif.", // Description Markdown [2]
                'tech_sheet' => "- **Connectivité:** Sans fil Xbox\n- **Son:** Windows Sonic, Dolby Atmos\n- **Autonomie:** 15 heures", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Nintendo Switch Pro Controller',
                'price' => 70000.00, // FCFA [1]
                'stock' => 65,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires [11, 12]
                'brand_id' => 8, // Nintendo [6, 7]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Manette professionnelle** pour la Nintendo Switch, confort et précision.", // Description Markdown [2]
                'tech_sheet' => "- **Connexion:** Bluetooth\n- **Vibration HD:** Oui\n- **Autonomie:** 40 heures", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Samsung Odyssey G9',
                'price' => 800000.00, // FCFA [1]
                'stock' => 8,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires (Moniteurs) [11, 12]
                'brand_id' => 2, // Samsung [3, 4]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Moniteur gaming incurvé** ultra-large, immersion totale.", // Description Markdown [2]
                'tech_sheet' => "- **Taille:** 49 pouces\n- **Résolution:** Dual QHD\n- **Taux de rafraîchissement:** 240Hz", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Apple iPad Air (5e génération)',
                'price' => 550000.00, // FCFA [1]
                'stock' => 38,
                'discount_percent' => 0,
                'category_id' => 6, // Tablettes [12]
                'brand_id' => 1, // Apple [3]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Tablette polyvalente** avec puce M1, idéale pour la créativité.", // Description Markdown [2]
                'tech_sheet' => "- **Puce:** Apple M1\n- **Écran:** Liquid Retina 10.9 pouces\n- **Compatibilité:** Apple Pencil 2", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Sony Alpha a7 IV',
                'price' => 1800000.00, // FCFA [1]
                'stock' => 7,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires (Photo) [11, 12]
                'brand_id' => 3, // Sony [4]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Appareil photo hybride** plein format, pour les professionnels.", // Description Markdown [2]
                'tech_sheet' => "- **Capteur:** 33MP Full-Frame\n- **Vidéo:** 4K 60p\n- **Stabilisation:** 5-axes", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Dell Latitude 7440',
                'price' => 950000.00, // FCFA [1]
                'stock' => 20,
                'discount_percent' => 0,
                'category_id' => 2, // Ordinateurs portables [9, 10]
                'brand_id' => 4, // Dell [4, 5]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Ordinateur portable professionnel** fiable et sécurisé.", // Description Markdown [2]
                'tech_sheet' => "- **Processeur:** Intel Core i7\n- **RAM:** 16Go\n- **Stockage:** 512Go SSD\n- **Écran:** 14 pouces FHD", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Logitech G920 Driving Force',
                'price' => 150000.00, // FCFA [1]
                'stock' => 25,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires [11, 12]
                'brand_id' => 5, // Logitech [5]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Volant de course sim** pour Xbox et PC, immersion réaliste.", // Description Markdown [2]
                'tech_sheet' => "- **Retour de force:** Double moteur\n- **Rotation:** 900 degrés\n- **Pédalier:** 3 pédales", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'JBL Charge 5',
                'price' => 120000.00, // FCFA [1]
                'stock' => 50,
                'discount_percent' => 0,
                'category_id' => 3, // Casques & Écouteurs [10, 11]
                'brand_id' => 6, // JBL [5, 6]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Enceinte Bluetooth portable** avec power bank intégré.", // Description Markdown [2]
                'tech_sheet' => "- **Autonomie:** 20 heures\n- **Étanchéité:** IP67\n- **Connectivité:** Bluetooth 5.1", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Microsoft Xbox Game Pass Ultimate (12 mois)',
                'price' => 100000.00, // FCFA [1]
                'stock' => 100,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires (Services) [11, 12]
                'brand_id' => 10, // Microsoft [7, 8]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Abonnement complet** pour Xbox et PC, des centaines de jeux.", // Description Markdown [2]
                'tech_sheet' => "- **Inclus:** Xbox Live Gold, EA Play, Cloud Gaming\n- **Durée:** 12 mois\n- **Plateformes:** Xbox, PC, Mobile", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Nintendo Joy-Con (Paire)',
                'price' => 85000.00, // FCFA [1]
                'stock' => 75,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires [11, 12]
                'brand_id' => 8, // Nintendo [6, 7]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Manettes polyvalentes** pour Nintendo Switch, jeu solo ou à deux.", // Description Markdown [2]
                'tech_sheet' => "- **Capteurs:** Accéléromètre, Gyroscope\n- **Vibration HD:** Oui\n- **Couleurs:** Diverses options", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Apple Watch Series 9',
                'price' => 300000.00, // FCFA [1]
                'stock' => 30,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires (Montres connectées) [11, 12]
                'brand_id' => 1, // Apple [3]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Montre connectée avancée** avec capteurs de santé et Siri.", // Description Markdown [2]
                'tech_sheet' => "- **Puce:** S9 SiP\n- **Écran:** Always-On Retina\n- **Fonctionnalités:** ECG, Oxygène sanguin", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Samsung Galaxy Buds2 Pro',
                'price' => 150000.00, // FCFA [1]
                'stock' => 40,
                'discount_percent' => 0,
                'category_id' => 3, // Casques & Écouteurs [10, 11]
                'brand_id' => 2, // Samsung [3, 4]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Écouteurs sans fil** avec audio Hi-Fi et réduction de bruit active.", // Description Markdown [2]
                'tech_sheet' => "- **Son:** 24-bit Hi-Fi\n- **ANC:** Oui\n- **Autonomie:** 5h (ANC) / 8h (sans ANC)", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Sony DualSense Edge Wireless Controller',
                'price' => 180000.00, // FCFA [1]
                'stock' => 20,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires [11, 12]
                'brand_id' => 9, // PlayStation (Sony) [7]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Manette PS5 pro personnalisable** pour les joueurs compétitifs.", // Description Markdown [2]
                'tech_sheet' => "- **Boutons:** Reconfigurables\n- **Gâchettes:** Ajustables\n- **Joysticks:** Remplaçables", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Dell UltraSharp U2723QE',
                'price' => 450000.00, // FCFA [1]
                'stock' => 10,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires (Moniteurs) [11, 12]
                'brand_id' => 4, // Dell [4, 5]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Moniteur 4K UHD** pour les professionnels exigeants, connectivité USB-C.", // Description Markdown [2]
                'tech_sheet' => "- **Taille:** 27 pouces\n- **Résolution:** 3840x2160\n- **Connectivité:** USB-C, HDMI, DisplayPort", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Logitech StreamCam',
                'price' => 90000.00, // FCFA [1]
                'stock' => 30,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires [11, 12]
                'brand_id' => 5, // Logitech [5]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Webcam Full HD** optimisée pour le streaming et la création de contenu.", // Description Markdown [2]
                'tech_sheet' => "- **Résolution:** 1080p 60fps\n- **Connectivité:** USB-C\n- **Orientation:** Paysage/Portrait", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'JBL Quantum 810 Wireless',
                'price' => 160000.00, // FCFA [1]
                'stock' => 35,
                'discount_percent' => 0,
                'category_id' => 3, // Casques & Écouteurs [10, 11]
                'brand_id' => 6, // JBL [5, 6]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Casque gaming sans fil** avec son spatial et réduction de bruit.", // Description Markdown [2]
                'tech_sheet' => "- **Son:** JBL QuantumSURROUND\n- **ANC:** Oui\n- **Autonomie:** 43 heures", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Microsoft Surface Laptop 5',
                'price' => 1100000.00, // FCFA [1]
                'stock' => 15,
                'discount_percent' => 0,
                'category_id' => 2, // Ordinateurs portables [9, 10]
                'brand_id' => 10, // Microsoft [7, 8]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Laptop élégant et performant** pour la productivité quotidienne.", // Description Markdown [2]
                'tech_sheet' => "- **Écran:** PixelSense tactile\n- **Processeur:** Intel Core i7\n- **RAM:** 16Go\n- **Stockage:** 512Go SSD", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Nintendo Switch Lite',
                'price' => 220000.00, // FCFA [1]
                'stock' => 50,
                'discount_percent' => 0,
                'category_id' => 4, // Consoles de jeux [11]
                'brand_id' => 8, // Nintendo [6, 7]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Console portable compacte** pour jouer en déplacement.", // Description Markdown [2]
                'tech_sheet' => "- **Écran:** LCD 5.5 pouces\n- **Mode TV:** Non\n- **Autonomie:** 3-7 heures", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Apple AirPods Pro (2e génération)',
                'price' => 190000.00, // FCFA [1]
                'stock' => 60,
                'discount_percent' => 0,
                'category_id' => 3, // Casques & Écouteurs [10, 11]
                'brand_id' => 1, // Apple [3]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Écouteurs sans fil** avec réduction de bruit adaptative et audio spatial.", // Description Markdown [2]
                'tech_sheet' => "- **Puce:** H2\n- **ANC:** Oui\n- **Autonomie:** 6 heures (écouteurs), 30 heures (avec boîtier)", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Samsung 990 Pro SSD 2TB',
                'price' => 250000.00, // FCFA [1]
                'stock' => 20,
                'discount_percent' => 0,
                'category_id' => 7, // Composants PC [12, 13]
                'brand_id' => 2, // Samsung [3, 4]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**SSD NVMe ultra-rapide** pour des performances PC ultimes.", // Description Markdown [2]
                'tech_sheet' => "- **Capacité:** 2 To\n- **Interface:** PCIe 4.0 x4 NVMe\n- **Vitesse lecture:** Jusqu'à 7450 MB/s", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Sony Bravia XR A95K QD-OLED',
                'price' => 3000000.00, // FCFA [1]
                'stock' => 3,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires (TV) [11, 12]
                'brand_id' => 3, // Sony [4]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Téléviseur OLED 4K** avec une qualité d'image époustouflante.", // Description Markdown [2]
                'tech_sheet' => "- **Type:** QD-OLED\n- **Résolution:** 4K UHD\n- **Processeur:** Cognitive Processor XR", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Dell PowerEdge R760',
                'price' => 5000000.00, // FCFA [1]
                'stock' => 2,
                'discount_percent' => 0,
                'category_id' => 2, // Ordinateurs (Serveurs) [9, 10]
                'brand_id' => 4, // Dell [4, 5]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Serveur rack performant** pour les infrastructures d'entreprise.", // Description Markdown [2]
                'tech_sheet' => "- **Processeurs:** 2x Intel Xeon Scalable\n- **RAM:** Jusqu'à 8To\n- **Facteur de forme:** 2U", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Logitech MX Keys S Combo',
                'price' => 120000.00, // FCFA [1]
                'stock' => 30,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires [11, 12]
                'brand_id' => 5, // Logitech [5]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Clavier et souris combo** pour une productivité sans faille.", // Description Markdown [2]
                'tech_sheet' => "- **Clavier:** Rétroéclairé, frappe silencieuse\n- **Souris:** MX Master 3S\n- **Connectivité:** Logi Bolt, Bluetooth", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'JBL PartyBox 710',
                'price' => 600000.00, // FCFA [1]
                'stock' => 10,
                'discount_percent' => 0,
                'category_id' => 3, // Casques & Écouteurs (Enceintes) [10, 11]
                'brand_id' => 6, // JBL [5, 6]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Enceinte de fête puissante** avec effets lumineux et son JBL Original Pro.", // Description Markdown [2]
                'tech_sheet' => "- **Puissance:** 800W RMS\n- **Étanchéité:** IPX4\n- **Effets lumineux:** Dynamiques", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Microsoft Xbox Elite Wireless Controller Series 2',
                'price' => 190000.00, // FCFA [1]
                'stock' => 15,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires [11, 12]
                'brand_id' => 7, // Xbox (Microsoft) [6]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Manette professionnelle** pour Xbox, entièrement personnalisable.", // Description Markdown [2]
                'tech_sheet' => "- **Composants:** Interchangeables\n- **Gâchettes:** Verrous réglables\n- **Autonomie:** 40 heures", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Nintendo Ring Fit Adventure',
                'price' => 80000.00, // FCFA [1]
                'stock' => 40,
                'discount_percent' => 0,
                'category_id' => 4, // Consoles de jeux (Jeu et Accessoire) [11]
                'brand_id' => 8, // Nintendo [6, 7]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Jeu de fitness** innovant pour la Switch, qui transforme l'exercice en aventure.", // Description Markdown [2]
                'tech_sheet' => "- **Inclus:** Ring-Con, Sangle de jambe\n- **Exercices:** Yoga, Force, Cardio\n- **Modes:** Aventure, Rapide, Personnalisé", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Apple HomePod mini',
                'price' => 100000.00, // FCFA [1]
                'stock' => 50,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires (Enceintes connectées) [11, 12]
                'brand_id' => 1, // Apple [3]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Enceinte connectée compacte** avec un son riche et Siri.", // Description Markdown [2]
                'tech_sheet' => "- **Assistant:** Siri\n- **Audio:** 360 degrés\n- **Maison connectée:** Thread, Matter", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Samsung The Frame TV 55"',
                'price' => 1500000.00, // FCFA [1]
                'stock' => 5,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires (TV) [11, 12]
                'brand_id' => 2, // Samsung [3, 4]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Téléviseur d'art** qui se fond dans votre décor quand il est éteint.", // Description Markdown [2]
                'tech_sheet' => "- **Type:** QLED 4K\n- **Mode Art:** Oui\n- **Capteur de mouvement:** Oui", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Sony WF-1000XM5',
                'price' => 250000.00, // FCFA [1]
                'stock' => 45,
                'discount_percent' => 0,
                'category_id' => 3, // Casques & Écouteurs [10, 11]
                'brand_id' => 3, // Sony [4]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Écouteurs sans fil** avec la meilleure réduction de bruit.", // Description Markdown [2]
                'tech_sheet' => "- **ANC:** Oui, Dual Processors\n- **Audio:** Hi-Res Audio Wireless\n- **Autonomie:** 8 heures (écouteurs)", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Dell G15 Gaming Laptop',
                'price' => 700000.00, // FCFA [1]
                'stock' => 18,
                'discount_percent' => 0,
                'category_id' => 2, // Ordinateurs portables [9, 10]
                'brand_id' => 4, // Dell [4, 5]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Ordinateur portable de jeu** abordable et performant.", // Description Markdown [2]
                'tech_sheet' => "- **Processeur:** Intel Core i5\n- **Carte graphique:** NVIDIA GeForce RTX 3050\n- **Écran:** 120Hz", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Logitech C920s HD Pro Webcam',
                'price' => 50000.00, // FCFA [1]
                'stock' => 70,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires [11, 12]
                'brand_id' => 5, // Logitech [5]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Webcam Full HD** pour des appels vidéo et enregistrements nets.", // Description Markdown [2]
                'tech_sheet' => "- **Résolution:** 1080p 30fps\n- **Microphones:** Stéréo\n- **Cache de confidentialité:** Oui", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'JBL Live 660NC',
                'price' => 140000.00, // FCFA [1]
                'stock' => 40,
                'discount_percent' => 0,
                'category_id' => 3, // Casques & Écouteurs [10, 11]
                'brand_id' => 6, // JBL [5, 6]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Casque sans fil** avec réduction de bruit adaptative et longue autonomie.", // Description Markdown [2]
                'tech_sheet' => "- **ANC:** Adaptative\n- **Autonomie:** 50 heures\n- **Assistant vocal:** Intégré", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Microsoft Office 365 Personal (1 an)',
                'price' => 60000.00, // FCFA [1]
                'stock' => 80,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires (Logiciels) [11, 12]
                'brand_id' => 10, // Microsoft [7, 8]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Suite bureautique complète** avec Word, Excel, PowerPoint, et 1To OneDrive.", // Description Markdown [2]
                'tech_sheet' => "- **Applications:** Word, Excel, PowerPoint, Outlook\n- **Stockage:** 1 To OneDrive\n- **Appareils:** 1 PC/Mac, 1 tablette, 1 téléphone", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Nintendo Switch Sports',
                'price' => 55000.00, // FCFA [1]
                'stock' => 55,
                'discount_percent' => 0,
                'category_id' => 4, // Consoles de jeux (Jeu) [11]
                'brand_id' => 8, // Nintendo [6, 7]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Collection de sports amusants** pour la famille et les amis.", // Description Markdown [2]
                'tech_sheet' => "- **Sports:** Football, Volley, Bowling, Tennis, Badminton, Chambara, Golf\n- **Accessoire:** Joy-Con\n- **Modes:** Local, Online", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Apple Magic Keyboard pour iPad Pro',
                'price' => 250000.00, // FCFA [1]
                'stock' => 20,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires [11, 12]
                'brand_id' => 1, // Apple [3]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Clavier flottant rétroéclairé** avec trackpad intégré pour iPad Pro.", // Description Markdown [2]
                'tech_sheet' => "- **Compatibilité:** iPad Pro 11/12.9\n- **Connectivité:** Smart Connector\n- **Port:** USB-C", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Samsung Galaxy Watch 6 Classic',
                'price' => 280000.00, // FCFA [1]
                'stock' => 25,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires (Montres connectées) [11, 12]
                'brand_id' => 2, // Samsung [3, 4]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Montre connectée classique** avec lunette rotative pour un contrôle intuitif.", // Description Markdown [2]
                'tech_sheet' => "- **OS:** Wear OS\n- **Capteurs:** Fréquence cardiaque, ECG, BIA\n- **Taille:** 43mm / 47mm", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Sony WF-C700N',
                'price' => 120000.00, // FCFA [1]
                'stock' => 50,
                'discount_percent' => 0,
                'category_id' => 3, // Casques & Écouteurs [10, 11]
                'brand_id' => 3, // Sony [4]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Écouteurs compacts** avec réduction de bruit et confort durable.", // Description Markdown [2]
                'tech_sheet' => "- **ANC:** Oui\n- **Autonomie:** 7.5 heures (écouteurs)\n- **Design:** Ergonomique", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Dell Gaming S2721DGF',
                'price' => 200000.00, // FCFA [1]
                'stock' => 15,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires (Moniteurs) [11, 12]
                'brand_id' => 4, // Dell [4, 5]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Moniteur gaming 1440p** avec taux de rafraîchissement élevé.", // Description Markdown [2]
                'tech_sheet' => "- **Taille:** 27 pouces\n- **Résolution:** QHD (2560x1440)\n- **Taux de rafraîchissement:** 165Hz", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Logitech Z906 5.1 Surround Sound Speakers',
                'price' => 300000.00, // FCFA [1]
                'stock' => 10,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires (Haut-parleurs) [11, 12]
                'brand_id' => 5, // Logitech [5]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Système audio surround 5.1** certifié THX pour une immersion home cinéma.", // Description Markdown [2]
                'tech_sheet' => "- **Puissance:** 500W RMS\n- **Certifié:** THX\n- **Connectivité:** Multi-entrées", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'JBL Go 3',
                'price' => 35000.00, // FCFA [1]
                'stock' => 80,
                'discount_percent' => 0,
                'category_id' => 3, // Casques & Écouteurs [10, 11]
                'brand_id' => 6, // JBL [5, 6]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Mini-enceinte portable** ultra-compacte, étanche et design.", // Description Markdown [2]
                'tech_sheet' => "- **Autonomie:** 5 heures\n- **Étanchéité:** IP67\n- **Connectivité:** Bluetooth 5.1", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Microsoft Azure Credit (5000 FCFA)',
                'price' => 5000.00, // FCFA [1]
                'stock' => 200,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires (Services) [11, 12]
                'brand_id' => 10, // Microsoft [7, 8]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Crédit Azure** pour expérimenter les services cloud de Microsoft.", // Description Markdown [2]
                'tech_sheet' => "- **Utilisation:** Plateforme cloud Microsoft Azure\n- **Valeur:** 5000 FCFA\n- **Expiration:** Selon conditions Azure", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Nintendo Switch Online (12 mois Individuel)',
                'price' => 25000.00, // FCFA [1]
                'stock' => 100,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires (Services) [11, 12]
                'brand_id' => 8, // Nintendo [6, 7]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Abonnement au service en ligne** pour Nintendo Switch.", // Description Markdown [2]
                'tech_sheet' => "- **Inclus:** Jeu en ligne, sauvegarde cloud, bibliothèque NES/SNES\n- **Durée:** 12 mois\n- **Type:** Individuel", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Apple Pencil (2e génération)',
                'price' => 130000.00, // FCFA [1]
                'stock' => 35,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires [11, 12]
                'brand_id' => 1, // Apple [3]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Stylet de précision** pour iPad Pro et iPad Air, idéal pour le dessin et la prise de notes.", // Description Markdown [2]
                'tech_sheet' => "- **Connectivité:** Magnétique, jumelage/charge sans fil\n- **Sensibilité:** Pression, inclinaison\n- **Compatibilité:** iPad Pro, iPad Air, iPad mini", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Samsung Galaxy Book3 Pro',
                'price' => 1300000.00, // FCFA [1]
                'stock' => 10,
                'discount_percent' => 0,
                'category_id' => 2, // Ordinateurs portables [9, 10]
                'brand_id' => 2, // Samsung [3, 4]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Laptop ultra-fin** avec écran AMOLED, performance et style.", // Description Markdown [2]
                'tech_sheet' => "- **Écran:** AMOLED 3K\n- **Processeur:** Intel Core i7\n- **RAM:** 16Go\n- **Poids:** 1.17 kg", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Sony INZONE H9',
                'price' => 220000.00, // FCFA [1]
                'stock' => 25,
                'discount_percent' => 0,
                'category_id' => 3, // Casques & Écouteurs [10, 11]
                'brand_id' => 3, // Sony [4]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Casque gaming sans fil** avec réduction de bruit et son spatial pour PC et PS5.", // Description Markdown [2]
                'tech_sheet' => "- **Son spatial:** 360 Spatial Sound\n- **ANC:** Oui\n- **Autonomie:** 32 heures", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Dell XPS Desktop',
                'price' => 900000.00, // FCFA [1]
                'stock' => 8,
                'discount_percent' => 0,
                'category_id' => 2, // Ordinateurs (Desktops) [9, 10]
                'brand_id' => 4, // Dell [4, 5]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Ordinateur de bureau puissant** pour le travail et les loisirs.", // Description Markdown [2]
                'tech_sheet' => "- **Processeur:** Intel Core i7\n- **RAM:** 16Go\n- **Stockage:** 1TB SSD\n- **Carte graphique:** NVIDIA GeForce RTX 3060", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Logitech G213 Prodigy Gaming Keyboard',
                'price' => 60000.00, // FCFA [1]
                'stock' => 50,
                'discount_percent' => 0,
                'category_id' => 5, // Accessoires [11, 12]
                'brand_id' => 5, // Logitech [5]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Clavier gaming** avec rétroéclairage RVB et repose-poignets intégré.", // Description Markdown [2]
                'tech_sheet' => "- **Touches:** Membraniques\n- **Rétroéclairage:** RVB Lightsync\n- **Résistance:** Éclaboussures", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'JBL Horizon 2',
                'price' => 65000.00, // FCFA [1]
                'stock' => 30,
                'discount_percent' => 0,
                'category_id' => 3, // Casques & Écouteurs (Radios-réveils) [10, 11]
                'brand_id' => 6, // JBL [5, 6]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Radio-réveil Bluetooth** avec son JBL puissant et éclairage d'ambiance.", // Description Markdown [2]
                'tech_sheet' => "- **Radio:** DAB/DAB+/FM\n- **Bluetooth:** Oui\n- **Chargement:** 2x USB", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Microsoft Xbox One S 1TB Console (reconditionnée)',
                'price' => 250000.00, // FCFA [1]
                'stock' => 10,
                'discount_percent' => 0,
                'category_id' => 4, // Consoles de jeux [11]
                'brand_id' => 7, // Xbox (Microsoft) [6]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Console de jeu d'entrée de gamme** pour le divertissement 4K.", // Description Markdown [2]
                'tech_sheet' => "- **Stockage:** 1 To\n- **Lecteur:** Blu-ray 4K\n- **Contenu:** Console + Manette", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
            [
                'name' => 'Nintendo Switch OLED Pokémon Scarlet & Violet Edition',
                'price' => 350000.00, // FCFA [1]
                'stock' => 12,
                'discount_percent' => 0,
                'category_id' => 4, // Consoles de jeux [11]
                'brand_id' => 8, // Nintendo [6, 7]
                'is_active' => true, // Actif [1]
                'is_featured' => false,
                'visibility' => 'public', // Public pour tous [1]
                'description' => "**Édition spéciale** de la Switch OLED aux couleurs de Pokémon.", // Description Markdown [2]
                'tech_sheet' => "- **Design:** Pokémon Scarlet & Violet\n- **Écran:** OLED 7 pouces\n- **Stockage:** 64Go", // Fiche technique Markdown [2]
                'images' => null, // Pas d'image [2]
            ],
        ];

        // Génération des slugs et insertion des timestamps dynamiquement pour chaque produit
        // Nous le faisons ici pour éviter de coder en dur les slugs et les dates
        // Note: L'utilisation de Str::slug() nécessite la facade Illuminate\Support\Str
        // et now() nécessite que Carbon soit accessible.
        $productsToInsert = [];
        foreach ($products as $product) {
            $product['slug'] = Str::slug($product['name'] . '-' . uniqid()); // Assurer un slug unique
            $product['created_at'] = now();
            $product['updated_at'] = now();
            $productsToInsert[] = $product;
        }

        DB::table('products')->insert($productsToInsert);
    }
}
