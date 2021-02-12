@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6">
    <div class="row mb-2">
        <div class="col-md-12">
            <h1 class="text-center mb-2 font-weight-bold">Faite votre choix et générer votre devis !</h1>
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <form action="{{route('devis.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="qty">Nombre de {{$service->title}} : </label>
                            <input type="number" class="form-control @error('qty') is-invalid @enderror" name="qty" id="qty"></input>
                            @error('qty')
                            <div class="invalid-feedback">{{$errors->first('qty')}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="time">Durée de location (en jours) : </label>
                            <input type="number" class="form-control @error('time') is-invalid @enderror" name="time" id="time"></input>
                            @error('time')
                            <div class="invalid-feedback">{{$errors->first('time')}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="size">Taille  : </label>
                            <select id="size" class="form-control" name="size">
                                <option disabled selected> Choisir une taille</option>
                                <option value="petit">Petit</option>
                                <option value="moyen">Moyen</option>
                                <option value="gros">Gros</option>
                            </select>
                            @error('size')
                            <div class="invalid-feedback">{{$errors->first('size')}}</div>
                            @enderror
                        </div>
                    
                    
                    
                        <button type="submit" class="btn btn-primary"> Demander un devis</button>  
                    
                    </form>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{$service->image}}">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection