<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Comment;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $products = Product::all();
        return view('structure.produit')->with('products', $products);
    }

    public function show(Product $product)
    {
        return view('structure.affichage_produit',compact('product'));
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

    public function gestion_article_editer(Product $product)
    {
        return view('admin.produits.editer', compact('product'));
    }


    public function store(Request $request)
    {
        $data= $request->validate([
            'title' =>'required|min:1',
            'image'=>'required|min:1',
            'price'=>'required'

        ]);

        Product::create($data); 

        return redirect()->route('admin.produits.index');
    }

    public function destroy(Product $product)
    {

        Product::destroy($product->id);

        return redirect('/gestionsarticle');
    }

    public function update(Request $request, Product $product)
    {

        $data= $request->validate([
            'title' =>'required|min:5',
            'image'=>'required|min:1',
            'price'=>'required|min:1'

        ]);
            
        $product->update($data);

        return redirect()->route('admin.produits.index');
    }


}
