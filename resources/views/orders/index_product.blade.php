@extends('layouts.app')
@section('title')
    Mes commandes
@endsection

@section('content')

<div class="space"></div>


<div class="container h-screen">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mes commandes</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach (Auth()->user()->orders as $order)
                        <div class="card mb-3">
                            <div class="card-header">
                                Commande passé le {{Carbon\Carbon::parse
                                ($order->payment_created_at)->format('d/m/Y ')}}
                                d'un montant de <strong>{{getPrice($order->amount)}}</strong>
                            </div>
                            <div class="card-body">
                                <h6>Liste des produits</h6>
                                @foreach (unserialize($order->products) as $product)
                                    <div>Nom du produit: {{ $product[0] }}</div>
                                    <div>Prix: {{ getPrice($product[1]) }}</div>
                                    <div>Quantité: {{ $product[2] }}</div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
