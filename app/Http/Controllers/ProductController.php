<?php

namespace App\Http\Controllers;

use App\Models\Product;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()->take(8)->get();
        return view('structure.produit')->with('products', $products);
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('structure.affichage_produit')->with('product', $product);
    }
}
