<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PanierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_product()
    {
        return view('cart.product');
    }
    public function index_service()
    {
        return view('cart.service');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_product(Request $request)
    {
        $duplicata = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id == $request->product_id;
        });

        if ($duplicata->isNotEmpty()) {
            return redirect()->route('products.index')->with('success', 'Le produit a déjà été ajouté.');
        }

        $product = Product::find($request->product_id);

        Cart::add($product->id, $product->title, 1, $product->price)
            ->associate('App\Models\Product');
        return redirect()->route('products.index')->with('success', 'Le produit a bien été ajouté.');
    }

    public function store_service(Request $request)
    {
        $duplicata = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id == $request->service_id;
        });

        if ($duplicata->isNotEmpty()) {
            return redirect()->route('services.index')->with('success', 'Le Service a déjà été ajouté.');
        }

        $service = Service::find($request->service_id);

        Cart::add($service->id, $service->title, 1, $service->price)
            ->associate('App\Models\Service');
        return redirect()->route('services.index')->with('success', 'Le service a bien été ajouté.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_product(Request $request, $rowId)
    {
        $data = $request->json()->all();

        Cart::update($rowId, $data['qty']);
        session()->flash('success_message', 'La quantité a bien été ajouté');
        return response()->json(['success' => true]);
    }

    public function update_service(Request $request, $rowId)
    {
        $data = $request->json()->all();

        Cart::update($rowId, $data['qty']);
        session()->flash('success_message', 'La quantité a bien été ajouté');
        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_product($rowId)
    {
        Cart::remove($rowId);

        return back()->with('success', 'Le produit a été supprimé.');
    }
    public function destroy_service($rowId)
    {
        Cart::remove($rowId);

        return back()->with('success', 'Le service a été supprimé.');
    }
}
