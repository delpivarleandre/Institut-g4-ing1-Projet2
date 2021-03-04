@extends('layouts.app')
@section('title')
    Acceuil
@endsection

@section('content')

<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" type="text/css" href="{{asset("vendor/cookie-consent/css/cookie-consent.css")}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="éco-services votre entreprise de recyclage d'appareils éléctroniques">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Accueil</title>
</head>

<body>


    <video controls width="100%">

        <source src="{{asset('/img/accueil/accueil-video.mp4')}}" type="video/mp4">

        Désolé, votre navigateur ne prend pas en charge les vidéos intégrées.
    </video>



    <div class="md:container md:mx-auto">


        <h1 class="text-center qsm">Qui sommes-nous ?</h1>


        <div class="row">

            <div class="col-sm-4">

                <div class="circle">
                    <img />
                </div>

                <img class="imageRound" src="{{asset('/img/accueil/images-qsm-projet-ecommerce.jpg')}}" alt="éco-services l’innovation au service de nos clients" title="éco-services l’innovation au service de nos clients">


            </div>

            <div class="col-sm-8 qsm-text text-md whitespace-nowrap text-gray-800 font-semibold pl-0">



                <p>Chaque jour, les &eacute;quipes d&apos;&eacute;co-services mettent toute leur capacit&eacute; d&rsquo;innovation au service de leurs clients dans le passage d&rsquo;un mod&egrave;le lin&eacute;aire qui surconsomme les ressources &agrave; une &eacute;conomie circulaire qui les recycle et les valorise.</p>
                <p>Une entreprise fond&eacute;e par <strong>Arnaud PARADIS</strong>, engag&eacute; de passion pour la transition &eacute;cologique et solidaire.</p>
                <p>D&eacute;couvrez d&egrave;s maintenant l&apos;ensemble de nos produits pour les professionnels et particuliers.</p>
                <p>Apr&egrave;s 20 ans d&apos;exp&eacute;rience, &eacute;co-services se r&eacute;invente !</p>
                <p>En plus de son activit&eacute; principale, l&apos;entreprise esp&egrave;re &eacute;galement se diversifier et fournir des produits z&eacute;ro d&eacute;chet aux particuliers ayant des ventes de produits &eacute;cologiquement responsables.</p>


            </div>

        </div>
        <!--
        <div class="text-center">
            <a href="{{route('services.index')}}"><button class="center bg-green-500 font-semibold text-white p-2 w-32 rounded-full hover:bg-green-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2" @click="showModal3 = true">
                    Nos services
                </button></a>
        </div>
    -->


        <div class="space"></div>

        <div class="h2-title">
            <h2 class="text-center v-heading-v2">Nos certifications</h2>
        </div>

        <div class="row certifications">

            <div class="col-sm-4 text-right"><img src="{{asset('/img/accueil/label-1.png')}}" alt="Certifications 1" title="Certifications 1"></div>

            <div class="col-sm-4 text-center"><img src="{{asset('/img/accueil/label-2.jpg')}}" alt="Certifications 2" title="Certifications 2"></div>

            <div class="col-sm-4 text-left"><img src="{{asset('/img/accueil/label-3.png')}}" alt="Certifications 3" title="Certifications 3"></div>

        </div>



        <div class="space"></div>
        <!--
        <div class="text-center">
            <a href="{{route('products.index')}}"><button class="center bg-green-500 font-semibold text-white p-2 w-min rounded-full hover:bg-green-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2" @click="showModal3 = true">
                    Découvrez nos produits
                </button></a>
        </div>
    -->
        <div class="space"></div>


    </div>

</body>

</html>


@endsection
