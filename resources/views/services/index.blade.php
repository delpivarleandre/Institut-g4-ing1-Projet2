@extends('layouts.app')

@section('content')

<div class="circleServicesDroite">
    <img/>
</div>

<div class="circleServicesGauche">
    <img/>
</div>

<main class="my-8">

    <div class="md:container md:mx-auto">

        <div class="h2-title">
            <h1 class="text-center v-heading-v2">Les éco-Services !</h1>
        </div>



        <div class="text-center">
            <div class="col-sm-12">
                <h2 class="text-left col-lg-6 offset-lg-3">Solution complète: </h2>
                <p class="mt-8 col-lg-6 offset-lg-3 paveservices text-justify">• Triez tous les déchets de bureau - papiers, cartons, emballages, etc. - de la source au
                    recyclage en France. Cela inclut le support de vos collaborateurs, les outils de communication 24h / 24.<br/>
                    • Vos achats, vos choix de consommation sont des prises de position en faveur des valeurs et des causes
                    pour lesquelles votre entreprise est engagée.<br/>
                    • En choisissant des produits et services éco-responsables,
                    vous limitez l'impact environnemental de votre bureau et soutenez l'industrie française.</p>
            </div>
        </div>


        <div class="space"></div>

        <div class="container mx-auto px-6">
            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                @foreach ($services as $service)
                <div class="bg-white w-full shadowbox max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('{{$service->image}}')"></div>
                    <div class="px-5 py-3 text-center">
                        <a  href="{{route('services.show', $service)}}">{{$service->title}}</a>
                    </div>
                    <div class="text-center">
                        <a href="{{route('services.show', $service)}}">
                            <button class="center bg-green-500 font-semibold text-white p-2 w-32 rounded-full hover:bg-green-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2" @click="showModal3 = true">Sélectionner</button>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

        </div>


    </div>

</main>

@endsection
