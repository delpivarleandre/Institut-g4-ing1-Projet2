<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Gloudemans\Shoppingcart\Facades\Cart;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
=======
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
>>>>>>> 14ef17750cff7fb76c82d0dc4a1265e686e17e5a

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        Stripe::setApiKey('sk_test_51Hz2YMKD73GROJG3kfW1wZhP8MV21BosFtIh1qLKFCuqfBn0a01LjFqEYxbuIcX5rD1Aznzb92tks1TE5fpDQR9Q0056p7jEaZ');

        $intent = PaymentIntent::create([
            'amount' => round(Cart::total()),
            'currency' => 'eur',
        ]);

        $clientSecret = Arr::get($intent, 'client_secret');

        return view('structure.paiement', [
            'clientSecret' => $clientSecret
        ]);
        // return view('structure.paiement');
    }

=======
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
>>>>>>> 14ef17750cff7fb76c82d0dc4a1265e686e17e5a
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
<<<<<<< HEAD
        //
=======
        Cart::destroy();
        return redirect('/merci');
>>>>>>> 14ef17750cff7fb76c82d0dc4a1265e686e17e5a
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
