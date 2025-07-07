<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(SearchRequest $request)
    {
        $filters = $request->validated(); // récupère les données validées

        $query = Product::query()->where('is_active', '1');

        if (!empty($filters['name'])) {
            $query->where('name', 'like', '%' . $filters['name'] . '%');
        }

        $products = $query->get(); // exécute la requête
        
        return view('products.search', [
            'products' => $products,
            'search' => $filters['name'] ?? '', // pour pré-remplir le champ
        ]);
    }

}
