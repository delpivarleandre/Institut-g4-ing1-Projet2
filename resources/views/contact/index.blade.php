@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('contact.store') }}">
                  
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <strong>Subject:</strong>
                <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ old('subject') }}">
                @if ($errors->has('subject'))
                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Message:</strong>
                <textarea name="contenu" rows="3" class="form-control">{{ old('contenu') }}</textarea>
                @if ($errors->has('contenu'))
                    <span class="text-danger">{{ $errors->first('contenu') }}</span>
                @endif
            </div>  
        </div>
    </div>

    <div class="form-group text-center">
        <button class="btn btn-success btn-submit">Save</button>
    </div>
</form>
@endsection