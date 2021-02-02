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

    public function store(Request $request)
    {
        $data= $request->validate([
            'title' =>'required|min:1',
            'image'=>'required|min:1',
            'price'=>'required',
            'cat'=>'required'
        ]);
        $product=Product::create($data); 
        $ref_categorie= $data['cat'];
       
        $product->categories()->attach($ref_categorie);
       

        return redirect()->route('admin.produits.index');
    }

    public function destroy(Product $product)
    {

        //Product::destroy($product->id);

        $product->categories()->detach();
        $product->delete();

        return redirect('/gestionsarticle');
    }

    public function update(Request $request, Product $product)
    {

        $data= $request->validate([
            'title' =>'required|min:5',
            'image'=>'required|min:1',
            'price'=>'required|min:1',
            'cat'=>'required'

        ]);
            
        $product->update($data);
        $ref_categorie= $data['cat'];

        $product->categories()->sync($ref_categorie);


        return redirect()->route('admin.produits.index');
    }


}
