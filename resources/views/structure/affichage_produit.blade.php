@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6">
    <div class="row mb-2">
        <div class="col-md-12">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0">{{$product->title}}</h3>
                    <p class="mb-0">{{$product->getPrice()}}</p>
                    <form action="{{ route('panier.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit" class="btn btn-dark">Ajouter au panier</button>
                    </form>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{$product->image}}">
                </div>
            </div>
        </div>
    </div>
</div>
</div>



@endsection