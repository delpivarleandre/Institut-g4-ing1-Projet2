@extends('layouts.app')

@section('content')
    <div class="container">
    <section>
        <div class="row col-lg-12 pt-16 justify-content-center">
            <div class="col-lg-6 mb-4 font-weight-bold text-4xl">
                <h1 class="text-center productstitle">DÉCOUVREZ ÉCO-SERVICES </h1>
            </div>
        </div>
    </section>
    <section>
        <div class="row pt-16 justify-content-center">
            <div class="col-lg-6 text-justify">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus ut nisi turpis. Nullam tempor, nunc lacinia porttitor volutpat,
                    sapien lectus pellentesque purus, sit amet pellentesque tellus nisl quis nulla.
                    Morbi fringilla, dolor eu tristique suscipit, risus libero hendrerit velit,
                    in pretium nibh mauris sit amet lacus. Morbi aliquet libero in diam mattis,
                    et dignissim nisl ullamcorper. Etiam at tellus a ipsum gravida pulvinar ut vel sem.
                    Sed molestie aliquam nibh, a volutpat ante fermentum et. Duis aliquet ac sem id eleifend.<br/>
                    Nullam tempor, nunc lacinia porttitor volutpat,
                    sapien lectus pellentesque purus, sit amet pellentesque tellus nisl quis nulla.
                    Morbi fringilla, dolor eu tristique suscipit, risus libero hendrerit velit,
                    in pretium nibh mauris sit amet lacus. Morbi aliquet libero in diam mattis,
                    et dignissim nisl ullamcorper. Etiam at tellus a ipsum gravida pulvinar ut vel sem.
                    Sed molestie aliquam nibh, a volutpat ante fermentum et. Duis aliquet ac sem id eleifend.<br/>
                </p>
            </div>
            <div class="col-lg-4">
                <img src="{{asset('/img/titrepres.png')}}"/>
            </div>
        </div>
    </section>
    <section>
        <div class="row justify-content-center pt-16">
            <div class="col-lg-3">
                <div class="pb16">
                    <a>
                        <img src="{{asset('/img/presentation.png')}}" class="mx-auto p-2 roundedborder col-lg-8" alt="Logo" data-original-title="" title="" aria-describedby="tooltip591651"/>
                    </a>
                </div>
                <p class="text-center orange sanchez ml-4 mr-4 pt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus ut nisi turpis. Nullam tempor, nunc lacinia porttitor volutpat,
                    sapien lectus pellentesque purus</p>
            </div>
            <div class="col-lg-3">
                <div class="pb16">
                    <a>
                        <img src="{{asset('/img/presentation.png')}}" class="mx-auto p-2 roundedborder col-lg-8" alt="Logo" data-original-title="" title="" aria-describedby="tooltip591651"/>
                    </a>
                </div>
                <p class="text-center orange sanchez ml-4 mr-4 pt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus ut nisi turpis. Nullam tempor, nunc lacinia porttitor volutpat,
                    sapien lectus pellentesque purus</p>
            </div>
            <div class="col-lg-3">
                <div class="pb16">
                    <a>
                        <img src="{{asset('/img/presentation.png')}}" class="mx-auto p-2 roundedborder col-lg-8" alt="Logo" data-original-title="" title="" aria-describedby="tooltip591651"/>
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
            <a href="/produits" class="buttonsbis pl-8 pr-8 nounderline">DÉCOUVREZ NOS SERVICES</a>
        </div>
    </section>
    </div>
@endsection
