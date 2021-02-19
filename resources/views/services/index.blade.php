@extends('layouts.app')

@section('content')
<main class="my-8">
    <h1 class="text-center mb-4 mr-5 font-weight-bold text-4xl">Nos services </h1>
    <div class="container mx-auto px-6">
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
            @foreach ($services as $service)
            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                    <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('{{$service->image}}')"></div>
                <div class="px-5 py-3 text-center">
                    <a  href="{{route('services.show', $service)}}">{{$service->title}}</a>
                </div>
            </div>
            @endforeach
        </div>

    </div>

</main>

@endsection