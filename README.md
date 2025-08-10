# Catalogue

Catalogue est une application Laravel permettant de gérer un catalogue de produits, catégories et marques, avec une interface d'administration moderne grâce à Filament.

## Fonctionnalités principales
- Gestion des produits, catégories et marques
- Interface d'administration avec Filament
- Recherche et filtrage avancés
- Seeders et factories pour les données de test
- Authentification utilisateur

## Installation

1. **Cloner le dépôt**
   ```bash
   git clone <repo-url>
   cd Catalogue
   ```
2. **Installer les dépendances PHP**
   ```bash
   composer install
   ```
3. **Installer les dépendances front-end**
   ```bash
   npm install
   # ou
   yarn install
   ```
4. **Configurer l'environnement**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
5. **Configurer la base de données**
   - Modifier les variables DB_* dans `.env`
6. **Lancer les migrations et seeders**
   ```bash
   php artisan migrate --seed
   ```
7. **Lancer le serveur de développement**
   ```bash
   php artisan serve
   ```
8. **Compiler les assets**
   ```bash
   npm run dev
   # ou
   yarn dev
   ```

## Structure du projet

- `app/Models/` : Modèles Eloquent (Product, Category, Brand, User)
- `app/Http/Controllers/` : Contrôleurs web et API
- `app/Filament/Resources/` : Ressources Filament pour l'admin
- `resources/views/` : Vues Blade (front office)
- `database/seeders/` : Seeders pour les données de test
- `routes/web.php` : Routes principales

## Commandes utiles
- `php artisan migrate:fresh --seed` : Réinitialiser la base et reseeder
- `php artisan make:model <Nom> -mcr` : Générer modèle + migration + contrôleur + ressource
- `npm run dev` : Compiler les assets en mode développement

## Contribution
Les PRs sont les bienvenues. Merci de respecter la structure du projet et d’ajouter des tests si possible.

## Licence
MIT
