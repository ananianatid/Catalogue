<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('category.index',[
            'categories' => $categories
        ]); ;
    }
    public function show(Category $category){
        $products = Product::where('category_id', $category->id)->where('is_active','1')->paginate(10);
        return view('category.show',[
            'category' => $category,
            'products' => $products
        ]);
    }
}
