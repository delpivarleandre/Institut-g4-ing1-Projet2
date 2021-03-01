@extends('layouts.panel')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Gestion des catégories</div>

                <div class="card-body">

                    <table class="table">
                    <thread>
                        <tr>
                        <th scope ="col">Nom</th>
                        <th scope ="col">Actions</th>
                        </tr>
                    </thread>
                    <tbody> 
                   @foreach ($categories as $categorie)
                        <tr>
                        <td>{{$categorie->name}}</td>
                        <td>
                            <a href="{{route('category.edit', $categorie)}}" class=" btn btn-warning">Edit</a>
                            <form action="{{route('category.destroy', $categorie)}}" method="POST" class="d-inline">
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
