@extends('layouts.app')

@section('content')


@if (Cart::count() > 0)
<div class="px-4 px-lg-0">
    <div class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
                    <div class="table-responsive">
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
                                        <div class="py-2 text-uppercase">Actions</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (Cart::content() as $key => $product)
                                <tr>
                                    <th scope="row" class="border-0">
                                        <div class="p-2">
                                            <img src="{{ $product->model->image }}" alt="" width="70" class="img-fluid rounded shadow-sm">
                                            <div class="ml-3 d-inline-block align-middle">
                                                <h5 class="mb-0"><a href="{{ route('structure.affichage_produit', $product->model->id) }}" class="text-dark d-inline-block align-middle">{{ $product->model->title }}</a>
                                                </h5><span class="text-muted font-weight-normal font-italic d-block">Category:</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="border-0 align-middle">
                                        <strong>{{ getPrice($product->subtotal())}}</strong>
                                    </td>
                                    <td class="border-0 align-middle"><strong>
                                            <select name="qty" id="{{$key}}qty" data-id="{{ $product->rowId }}" class="custom-select" onchange="qty('{{ $product->rowId }}','{{$key}}')">
                                                @for ($i = 1; $i <= 10; $i++) <option value="{{ $i }}" {{ $i == $product->qty ? 'selected' : ''}}>
                                                    {{ $i }}
                                                    </option>
                                                    @endfor
                                            </select>
                                        </strong></td>
                                    <td class="border-0 align-middle">
                                        <form action="{{ route('panier.destroy', $product->rowId) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row  p-4 bg-white rounded shadow-sm">
                        <div class="col-lg-12">
                            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Détails
                                de la commande :
                            </div>
                            <div class="p-4">
                                <ul class="list-unstyled mb-4">
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted mr-2">Sous-total </strong><strong>{{ getPrice(Cart::subtotal()) }}</strong>
                                    </li>
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Taxe</strong><strong>{{ getPrice(Cart::tax()) }}</strong>
                                    </li>
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                                        <h5 class="font-weight-bold">{{ getPrice(Cart::total()) }}</h5>
                                    </li>
                                </ul>
                                <a href="{{route('checkout.index')}}" class="btn btn-dark rounded-pill py-2 btn-block ">Passer à la caisse</a>
                            </div>
                        </div>
                    </div>
                </div>
<<<<<<< HEAD
=======
<<<<<<< HEAD
                <div class="row py-5 p-4 bg-white rounded shadow-sm col-lg-4">
                    <div>Détails de la commande </div>
                    <ul class="list-unstyled mb-4">
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Sous-total </strong><strong>{{ getPrice(Cart::subtotal()) }}</strong></li>
                        <!-- <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$10.00</strong></li> -->
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Taxe</strong><strong>{{ getPrice(Cart::tax()) }}</strong></li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                            <h5 class="font-weight-bold">{{ getPrice(Cart::total()) }}</h5>
                        </li>
                    </ul><a href="{{ route('structure.paiement') }}" class="btn btn-dark rounded-pill py-2 btn-block">Passer à la caisse</a>
                </div>
                <!-- End -->
                <!-- </div> -->
=======
>>>>>>> 14ef17750cff7fb76c82d0dc4a1265e686e17e5a
>>>>>>> 5bf5c27822615a69c1d7a8c852a72ba889051f5c
            </div>
        </div>
    </div>
</div>
<select id="country">
    <option value=""></option>
    <option value="india">India</option>
    <option value="Austrelia">Austrelia</option>
    <option value="turkey">Turkey</option>
</select>
@else
<div class="col-md-12">
    <p>Votre panier est vide.</p>
</div>
@endif
@endsection


@section('extra-js')
<script>
    function qty(rowId, key) {
        console.log(rowId)
        var select = document.getElementById(key + 'qty')
        var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        fetch(`/panier/${rowId}`, {
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json, text-plain, */*",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": token
            },
            method: 'PATCH',
            body: JSON.stringify({
                qty: select.value
            })
        }).then((data) => {
            console.log(data);
            location.reload();
        }).catch((error) => {
            console.log(error);
        });
    }
</script>

@endsection
