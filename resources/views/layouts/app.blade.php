<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('extra-meta')

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('extra-script')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ae6899135a.js" crossorigin="anonymous"></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    @yield('extra-script')
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('structure.acceuil') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('structure.presentation') }}">Présentation</a>
                    </li>
                    @can('access-product')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('structure.produit') }}">Produits</a>
                    </li>
                    @elsecan('access-service')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('structure.service') }}">Services</a>
                    </li>
                    @endcan
                    @can('edit-users')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('structure.produit') }}">Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('structure.service') }}">Services</a>
                    </li>
                    @endcan


                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('structure.contact') }}">Contact</a>
                    </li>
                </ul>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
<<<<<<< HEAD
                                <a class="dropdown-item" href="{{ route('dashboard') }}">Mes commandes</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                @can('manage-users')
                                <a href="{{route('admin.users.index')}}" class="dropdown-item">Liste des utilisateurs</a>
                                @endcan
                            </div>
                        </li>
=======
                                @cannot('edit-users')
                                    <a class="dropdown-item" href="{{ route('dashboard') }}">Mes commandes</a>
                                @endcannot
                                @can('manage-users')
                                    <a href="{{route('admin.users.index')}}" class="dropdown-item">Liste des utilisateurs</a>
                                @endcan
                                @can('edit-users')
                                    <a href="{{route('admin.produits.ajouter')}}" class="dropdown-item">Ajouter des articles</a>
                                    <a href="{{route('admin.produits.index')}}" class="dropdown-item">Gestion des articles</a>
                                @endcan
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Déconnexion</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                </div>
                            </li>
>>>>>>> 14ef17750cff7fb76c82d0dc4a1265e686e17e5a
                        @endguest
                    </ul>
                </div>
            </div>
            <a href="{{route('structure.panier')}}"> Panier<span class="badge badge-pill badge-dark">{{ Cart::count() }}</span></a>
            <!-- le span permet d'afficher le nombre d'article dans le panier -->
        </nav>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @yield('extra-js')
</body>

</html>