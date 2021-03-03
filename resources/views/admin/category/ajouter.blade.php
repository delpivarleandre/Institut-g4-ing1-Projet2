@extends('layouts.panel')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajouter une nouvelle catégorie</div>
                <div class="card-body">
                    <form action="{{route('category.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nom  : </label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"></input>
                            @error('name')
                            <div class="invalid-feedback">{{$errors->first('name')}}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary"> Ajouter la catégorie au catalogue </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
