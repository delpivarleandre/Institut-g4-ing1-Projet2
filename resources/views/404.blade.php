@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous</title>
    <meta name="description" content="Contactez-nous dès maintenant">
</head>

<div id="wrapper">

    <header class="Page404 content-overlay">

        <h1 class="text-center text-white bold" style="font-size: 150px;" class="text-center cn">404</h1>
        <h3 class="text-center text-white bold" style="font-size: 25px;">Oups 😬 la planète B n’a pas été trouvée…</h3>
        <h3 class="text-center text-white bold" style="font-size: 25px;">Protégez l’unique planète Terre en découvrant nos produits</h3>

        <div class="space"></div>

        <div class="text-center">
            <a href="{{route('acceuil.index')}}"><button class="center bg-green-500 font-semibold text-white p-2 w-min rounded-full hover:bg-green-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2" @click="showModal3 = true">
            Accueil
                </button></a>
        </div>

    </header>

</div>


<body>


</body>

</html>

@include('layouts.footer')

@endsection
