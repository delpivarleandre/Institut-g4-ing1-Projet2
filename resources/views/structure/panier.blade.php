@extends('layouts.app')

@section('content')

@if (Cart::count() > 0)
<div class="px-4 px-lg-0">
    <div class="pb-5">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5"> -->
                <!-- Shopping cart table -->
                <div class="table-responsive col-lg-8">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="p-2 px-3 text-uppercase">Produit</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Prix</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Quantité</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Supprimer</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (Cart::content() as $product)
                            <tr>
                                <th scope="row" class="border-0">
                                    <div class="p-2">
                                        <img src="{{ $product->model->image }}" alt="" width="70" class="img-fluid rounded shadow-sm">
                                        <div class="ml-3 d-inline-block align-middle">
                                            <h5 class="mb-0"> <a href="{{ route('structure.affichage_produit', $product->model->id) }}" class="text-dark d-inline-block align-middle">{{ $product->model->title }}</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category:</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="border-0 align-middle"><strong>{{ $product->model->getPrice() }}</strong></td>
                                <td class="border-0 align-middle"><strong>1</strong></td>
                                <td class="border-0 align-middle">
                                    <form action="{{ route('panier.destroy', $product->rowId) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row py-5 p-4 bg-white rounded shadow-sm col-lg-4">
                    <div>Détails de la commande </div>
                    <ul class="list-unstyled mb-4">
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Sous-total </strong><strong>{{ getPrice(Cart::subtotal()) }}</strong></li>
                        <!-- <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$10.00</strong></li> -->
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Taxe</strong><strong>{{ getPrice(Cart::tax()) }}</strong></li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                            <h5 class="font-weight-bold">{{ getPrice(Cart::total()) }}</h5>
                        </li>
                    </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Passer à la caisse</a>
                </div>
                <!-- End -->
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>
@else
<div class="col-md-12">
    <p>Votre panier est vide.</p>
</div>
@endif
@endsection