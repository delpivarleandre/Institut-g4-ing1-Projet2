@extends('layouts.app')
@section('title')
    Le Projet
@endsection
@section('content')
<div class="container">
    <section>
        <div class="row col-lg-12 pt-16 justify-content-center">
            <div class="col-lg-6 mb-4 font-weight-bold text-4xl">
                <h1 class="text-center productstitle">NOTRE PROJET </h1>
            </div>
        </div>
    </section>
    <section>
        <div class="row pt-16 justify-content-center align-items-center">
            <div class="col-lg-5 text-justify">
                <p class="paveservices">Éco-Services est une société créée en 2021 qui souhaite aller dans le sens de la transition écologique
                    en vous proposant des produits de tout type avec pour principal atout leur éco-responsabilité.<br/> Nous proposont
                    également des produits réutilisables, recyclés qui permettent de réduire au maximum votre empreinte carbone,
                    tout en profitant de leur qualité et de leur durabilité.<br/>  Un large panel d'articles vous est mit à disposition,
                    pour les besoins de tout un chacun :) <br />
                </p>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <img src="{{asset('/img/titrepres.png')}}" />
            </div>
        </div>
    </section>
    <section>
        <div class="row justify-content-center pt-16">
            <div class="col-lg-3">
                <div class="pb16">
                    <a>
                        <img src="{{asset('/img/presentation.png')}}" class="mx-auto p-2 roundedborder col-lg-8" alt="Logo" data-original-title="" title="" aria-describedby="tooltip591651" />
                    </a>
                </div>
                <p class="text-center orange sanchez ml-4 mr-4 pt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus ut nisi turpis. Nullam tempor, nunc lacinia porttitor volutpat,
                    sapien lectus pellentesque purus</p>
            </div>
            <div class="col-lg-3">
                <div class="pb16">
                    <a>
                        <img src="{{asset('/img/presentation.png')}}" class="mx-auto p-2 roundedborder col-lg-8" alt="Logo" data-original-title="" title="" aria-describedby="tooltip591651" />
                    </a>
                </div>
                <p class="text-center orange sanchez ml-4 mr-4 pt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus ut nisi turpis. Nullam tempor, nunc lacinia porttitor volutpat,
                    sapien lectus pellentesque purus</p>
            </div>
            <div class="col-lg-3">
                <div class="pb16">
                    <a>
                        <img src="{{asset('/img/presentation.png')}}" class="mx-auto p-2 roundedborder col-lg-8" alt="Logo" data-original-title="" title="" aria-describedby="tooltip591651" />
                    </a>
                </div>
                <p class="text-center orange sanchez ml-4 mr-4 pt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus ut nisi turpis. Nullam tempor, nunc lacinia porttitor volutpat,
                    sapien lectus pellentesque purus</p>
            </div>
        </div>
    </section>
    <section class="row col-lg-12 justify-content-center">
        <div class="pt-16 mb-48">
            @guest
                <a href={{route('products.index')}} class="buttonsbis pl-8 pr-8 nounderline">DÉCOUVREZ NOS PRODUITS/NOS SERVICES</a>
            @endguest('guest')

            @can('is_particuliers')
                <a href={{route('products.index')}} class="buttonsbis pl-8 pr-8 nounderline">DÉCOUVREZ NOS PRODUITS</a>
            @endcan

            @can('is_pros')
                <a href={{route('products.index')}} class="buttonsbis pl-8 pr-8 nounderline">DÉCOUVREZ NOS SERVICES</a>
            @endcan

        </div>

    </section>
</div>

@endsection

