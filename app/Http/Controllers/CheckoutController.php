<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Enter Your Stripe Secret
      Stripe::setApiKey('sk_test_51I0wFvAEUallKK3arCyv7FvOzNMo8BoZZzymOYUsi8Kea3j2rEhtaQS6E2pwCe5uLQZLGLu5LIqdAFPNXkRGfFcG00B3TfP21G');
        		
      
      $payment_intent = PaymentIntent::create([
          'description' => 'Stripe Test Payment',
          'amount' => round(Cart::total()),
          'currency' => 'eur',
          'description' => 'Nouveau paiement de client ',
          'payment_method_types' => ['card'],
      ]);
      $intent = $payment_intent->client_secret;

      return view('checkout.index',compact('intent'));;

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
    public function store(Request $request)
    {
        Cart::destroy();
        return redirect('/merci');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
