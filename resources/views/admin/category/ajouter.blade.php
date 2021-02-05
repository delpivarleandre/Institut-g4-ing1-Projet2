@extends('layouts.app')

@section('content')

<div class="container">
    <h1 > Ajouter une catégorie</h1>
    <hr>
   
    <form action="{{route('category.store')}}" method="POST">
        @csrf 
        <div class="form-group">
            <label for="name">Nom  : </label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"></input>
            @error('name')
            <div class="invalid-feedback">{{$errors->first('name')}}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary"> Ajouter la categorie au catalogue </button>  
    </form> 
</div>

@endsection