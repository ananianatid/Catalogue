<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFilterRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(ProductFilterRequest $request)
    {
        $filters = $request->validated();

        $query = Product::query()
            ->where('is_active', '1')
            ->orderBy('created_at', 'asc');

        // Tri par prix asc/desc
        if (!empty($filters['price_order'])) {
            $query->orderBy('price', $filters['price_order']); // 'asc' ou 'desc'
        }

        if (!empty($filters['category'])) {
            $query->where('category_id', $filters['category']);
        }

        if (!empty($filters['brand'])) {
            $query->where('brand_id', $filters['brand']);
        }

        $products = $query->get();

        $brands = Brand::all()->keyBy('id');
        $categories = Category::all()->keyBy('id');

        return view('products.index', [
            'products' => $products,
            'brands' => $brands,
            'categories' => $categories,
            'request' => $request,
        ]);
    }


    public function show(Product $product)
    {
        if ($product->is_active == '0') {
            return response()->json([
                'message' => 'The product you are looking for is currently unavailable.'
            ], 404);
        }

        // Requêtes séparées pour éviter les conflits de QueryBuilder (clone)
        $same_brand_products = Product::where('is_active', '1')
            ->where('brand_id', $product->brand_id)
            ->where('id', '!=', $product->id) // on exclut le produit actuel
            ->orderBy('updated_at', 'desc')
            ->limit(15)
            ->get();

        $same_category_products = Product::where('is_active', '1')
            ->where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->orderBy('updated_at', 'desc')
            ->limit(5)
            ->get();

        return view('products.show', [
            'product' => $product,
            'same_brand_products' => $same_brand_products,
            'same_category_products' => $same_category_products,
        ]);
    }
    public function discount(){
        $asc_discount = true;
        $desc_discount = false;
        $products = Product::query()->where('discount_percent','!=','0')->where('is_active','1');
        if($asc_discount == true)
            $products = $products->orderBy('discount_percent','asc');
        if($desc_discount == true)
            $products = $products->orderBy('discount_percent','desc');

        return $products;
    }

}
