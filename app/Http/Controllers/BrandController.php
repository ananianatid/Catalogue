<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        $brands  = Brand::all();
        return view('brand.brands_index',['brands'=>$brands]) ;
    }
    public function show(Brand $brand){
        $products = Product::where('brand_id', $brand->id)
            ->where('is_active', '1') // optionnel si tu veux filtrer uniquement les produits actifs
            ->orderBy('updated_at', 'desc')
            ->paginate(10);
        return $products->isEmpty()
            ? response()->json(['message' => 'No products found for this brand.'], 404)
            : view('brand.brands_show', ['brand' => $brand, 'products' => $products]);
    }
}
