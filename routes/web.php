<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[GeneralController::class,'index'])->name("index");

Route::get('/brands',[BrandController::class, 'index'])->name("index.brand");
Route::get('/brands/{brand}',[BrandController::class, 'show'])->name("show.brand");

Route::get('/categories',[CategoryController::class, 'index'])->name("index.category");
Route::get('/categories/{category}',[CategoryController::class, 'show'])->name("show.category");

Route::get('/products',[ProductController::class, 'index'])->name("index.product");
Route::get('/product/{product}',[ProductController::class, 'show'])->name("show.product");

Route::get('/search',[SearchController::class, 'index'])->name("search");

Route::get('/about',function(){
    return view('about');
})->name("about");


