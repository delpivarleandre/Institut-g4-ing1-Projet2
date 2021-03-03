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

    <header class="content-overlay">

        <h1 class="text-center cn">Contactez-nous</h1>


    </header>

</div>

<div class="space"></div>

<body>



<div class="md:container md:mx-auto">


    <form method="POST" action="{{ route('contact.store') }}">

        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Nom et Prénom</strong>
                    <input type="text" name="name" class="form-control w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="Nom et Prénom" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <strong>E-mail</strong>
                    <input type="text" name="email" class="form-control w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="E-mail" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>

            </div>
            <div class="col-md-6">

                <div class="form-group">
                    <strong>Sujet</strong>
                    <input type="text" name="subject" class="form-control w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="Sujet" value="{{ old('subject') }}">
                    @if ($errors->has('subject'))
                        <span class="text-danger">{{ $errors->first('subject') }}</span>
                    @endif
                </div>



                <div class="form-group">
                    <strong>Région</strong>
                    <select name="region" placeholder="Votre région" value="{{ old('region') }}" class="form-select w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                            <option value="01">Auvergne-Rhône-Alpes</option>
                            <option value="02">Bourgogne-Franche-Comté</option>
                            <option value="03">Bretagne</option>
                            <option value="04">Centre-Val de Loire</option>
                            <option value="05">Corse</option>
                            <option value="06">Grand Est</option>
                            <option value="07">Hauts-de-France</option>
                            <option value="08">Île-de-France</option>
                            <option value="09">Normandie</option>
                            <option value="10">Nouvelle-Aquitaine</option>
                            <option value="11">Occitanie</option>
                            <option value="12">Pays de la Loire</option>
                            <option value="13">Provence-Alpes-Côte d'Azur</option>
                            <option value="08">Régions ultramarines</option>
                    </select>
                    @if ($errors->has('region'))
                        <span class="text-danger">{{ $errors->first('region') }}</span>
                    @endif
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="form-group">
                    <strong>Message</strong>
                    <textarea name="contenu" rows="3" class="form-control w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="Message">{{ old('contenu') }}</textarea>
                    @if ($errors->has('contenu'))
                        <span class="text-danger">{{ $errors->first('contenu') }}</span>
                    @endif
                </div>

            </div>
        </div>


        <div class="form-group text-center">
            <button class="btn-submit bg-green-500 font-semibold text-white p-2 w-32 rounded-full hover:bg-green-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2">Envoyer</button>
        </div>
    </form>


</div>


</body>
</html>

@include('layouts.footer')

@endsection
