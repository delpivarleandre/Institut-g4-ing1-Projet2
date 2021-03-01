@extends('layouts.panel')

@section('content')

<div class="container">
    <h1>{{$category->title}}</h1>
    <hr>
    <form action="{{route('category.update', $category)}}" method="POST">
    @csrf 
    @method('PATCH')
        <div class="form-group">
            <label for="name">Nom de la catégorie : </label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value ="{{$category->name}}"></input>
            @error('name')
            <div class="invalid-feedback">{{$errors->first('name')}}</div>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary"> Modifier le nom de la catégorie </button>  
    </form> 
</div>

@endsection