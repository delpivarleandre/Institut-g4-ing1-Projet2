@extends('layouts.panel')

@section('content')

<div class="container">
    <h1>{{$service->title}}</h1>
    <hr>
    <form action="{{route('service.update', $service)}}" method="POST">
    @csrf 
    @method('PATCH')
        <div class="form-group">
            <label for="title">Titre : </label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value ="{{$service->title}}"></input>
            @error('title')
            <div class="invalid-feedback">{{$errors->first('title')}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">Url de l'image : </label>
            <input type="text" class="form-control @error('image') is-invalid @enderror" name="image" id="image" value ="{{$service->image}}"></input>
            @error('image')
            <div class="invalid-feedback">{{$errors->first('image')}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="price">Prix : </label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" id="price" value ="{{$service->price}}"></input>
            @error('price')
            <div class="invalid-feedback">{{$errors->first('price')}}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary"> Modifier le service </button>  
    </form> 
</div>

@endsection