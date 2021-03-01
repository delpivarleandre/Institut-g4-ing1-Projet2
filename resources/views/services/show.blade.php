@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6">
    <h1 class="text-center mb-4 mr-5 font-weight-bold text-4xl"> Le service {{$service->title}} </h1>
    <div class="row mb-2">
        <div class="col-md-12">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    <form action="{{ route('cart.store_service') }}" method="POST">
                        @csrf
                        <input type="hidden" name="service_id" value="{{ $service->id }}">
                        <button type="submit" class="mt-5 ml-5 btn btn-success">Saisi ta demande et génére ton devis !</button>
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