@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Gestion des articles</div>

                <div class="card-body">

                    <table class="table">
                    <thread>
                        <tr>
                        <th scope ="col">Nom</th>
                        <th scope ="col">Prix</th>
                        <th scope ="col">Actions</th>
                        </tr>
                    </thread>
                    <tbody> 
                   @foreach ($products as $product)
                        <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->getPrice()}}</td>
                        <td>
                            <a href="{{route('products.show', $product)}}" class=" btn btn-primary">Voir</a>
                            <a href="{{route('product.edit', $product)}}" class=" btn btn-warning">Edit</a>
                            <form action="{{route('product.destroy', $product)}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Sup</button>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
