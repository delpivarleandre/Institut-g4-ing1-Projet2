@extends('layouts.app')

@section('content')
<form action="{{route('devis.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Nom  : </label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"></input>
        @error('name')
        <div class="invalid-feedback">{{$errors->first('name')}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email  : </label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"></input>
        @error('email')
        <div class="invalid-feedback">{{$errors->first('email')}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="phone">Phone : </label>
        <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone"></input>
        @error('phone')
        <div class="invalid-feedback">{{$errors->first('phone')}}</div>
        @enderror
    </div>



    <button type="submit" class="btn btn-primary"> Demander un devis</button>  

</form>

@endsection
    