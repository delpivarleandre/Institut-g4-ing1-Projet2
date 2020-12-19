<?php

namespace App\Http\Controllers;

use App\Models\Product;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('structure.produit')->with('products', $products);
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('structure.affichage_produit')->with('product', $product);
    }

    public function gestion_article_index()
    {
        $products = Product::all();
        return view('admin.produits.index')->with('products', $products);
    }

    public function gestion_article_ajouter()
    {
        return view('admin.produits.ajouter');
    }


    public function store(Request $request)
    {
        $data= $request->validate([
            'title' =>'required|min:1',
            'image'=>'required|min:1',
            'price'=>'required',
            'slug'=>'required'

        ]);

        Product::create($data); 

        return redirect()->route('admin.produits.index');
    }

    public function destroy(Product $product)
    {

        Product::destroy($product->id);

        return redirect('/gestionsarticle');
    }



}
