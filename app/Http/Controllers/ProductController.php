<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        if(request()->categorie){
            $products = Product::with('categories')->whereHas('categories', function($query){
                $query->where('name', request()->categorie);
            })->paginate(4);
        }else{
            $products = Product::with('categories')->paginate(4);
        }
        return view('products.index')->with('products', $products);
    }

    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }   
}
