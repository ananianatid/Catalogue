<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index(){
        $showcase = Product::query()
            ->where('is_active', '1')
            ->where('is_featured', '1')
            ->inRandomOrder()
            ->get();

        $brandNames = ['Apple', 'Samsung', 'JBL', 'Nintendo'];
        $brands = Brand::whereIn('name', $brandNames)->get()->keyBy('name');
        $result = [];

        $Apple = $brands['Apple'] ?? null;
        $Samsung = $brands['Samsung'] ?? null;
        $JBL = $brands['JBL'] ?? null;
        $Nintendo = $brands['Nintendo'] ?? null;

        foreach ($brands as $brand) {
            $products = Product::where('brand_id', $brand->id)
                ->with('brand')
                ->orderBy('updated_at', 'desc')
                ->take(4)
                ->get();

            if ($products->isNotEmpty()) {
                $result[] = [
                    'brand' => $brand,
                    'products' => $products,
                ];
            }
        }

        return view('index',['showcase'=>$showcase,'results'=>$result]);
    }

    public function discount(){
        $brands = Brand::all()->keyBy('id');
        $products = Product::query()
            ->where('is_active', '1')
            ->where('discount', '>', 0) // Filtrer les produits avec une remise
            ->orderBy('updated_at', 'desc')
            ->paginate(10);

        return view('products.discount', [
            'products' => $products,
            'brands' => $brands,
        ]);
    }
}
