@extends('layouts.panel')
@section('title')
    Ajouter
@endsection
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajouter un nouveau service</div>
                <div class="card-body">
                    <form action="{{route('service.store')}}" method="POST">
                        @csrf 
                        <div class="form-group">
                            <label for="title">Titre : </label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"></input>
                            @error('title')
                            <div class="invalid-feedback">{{$errors->first('title')}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description : </label>
                            <input type="text" class=" form-control @error('description') is-invalid @enderror" name="description" id="description"></input>
                            @error('description')
                            <div class="invalid-feedback">{{$errors->first('description')}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Lien de l'image : </label>
                            <input type="text" class="form-control @error('image') is-invalid @enderror" name="image" id="image"></input>
                            @error('image')
                            <div class="invalid-feedback">{{$errors->first('image')}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control @error('price') is-invalid @enderror" name="price" id="price" value="2000"></input>
                            @error('price')
                            <div class="invalid-feedback">{{$errors->first('price')}}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary"> Ajouter le service au catalogue </button>  
                    </form> 
                </div>
            </div>
        </div>
    </div>  
</div>

@endsection