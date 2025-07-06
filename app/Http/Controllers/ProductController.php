<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $asc_price = false;
        $desc_price = false;
        $category_id = "";
        $brand_id = "";
        $query = Product::query()->orderBy('created_at','asc')->where('is_active','1');
        if($asc_price == true)
            $query = $query->orderBy('price','asc');

        if($desc_price == true)
            $query = $query->orderBy('price','desc');

        if($category_id !== "")
            $query = $query->where('category_id',$category_id);

        if($brand_id !== "")
            $query = $query->where('brand_id',$brand_id);
        // dd($query);
        $products = $query->paginate(10);
        return $products ;
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

        return response()->json([
            'product' => $product,
            'same_brand_products' => $same_brand_products,
            'same_category_products' => $same_category_products,
        ]);
    }
    public function discount(){
        $asc_discount = true;
        $desc_discount = false;
        $products = Product::query()->where('is_featured','1')->where('is_active','1');
        if($asc_discount == true)
            $products = $products->orderBy('discount_percent','asc');
        if($desc_discount == true)
            $products = $products->orderBy('discount_percent','desc');

        return $products;
    }

}
