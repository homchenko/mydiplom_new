<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class HomeController extends Controller
{
    public function index() {

        $categories = Category::all();
        $products = Product::where('is_active', 1)->limit(4)->get();
        return view('front.main-page', compact('products', 'categories'));
    }

    public function catalog() {

        $categories = Category::all();
        $products = Product::where('is_active', 1)->get();
        return view('front.inner-page', compact('products', 'categories'));
    }
}
