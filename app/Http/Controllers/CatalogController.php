<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CatalogController extends Controller
{
    public function catalog() {
        $categories = Category::all();
        $products = Product::where('is_active', 1)->get();
        return view('front.inner-page', compact('products', 'categories'));
    }
}
