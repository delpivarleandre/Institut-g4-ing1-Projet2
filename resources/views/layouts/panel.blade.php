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
                        <a class="nav-link" href="{{ route('acceuil.index') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('presentation.index') }}">Présentation</a>
                    </li>
                    @can('access-product')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Produits</a>
                    </li>
                    @elsecan('access-service')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services.index') }}">Services</a>
                    </li>
                    @endcan
                    @can('edit-users')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services.index') }}">Services</a>
                    </li>
                    @endcan


                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact.index') }}">Contact</a>
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
                                @can('manage-users')
                                    <a href="{{route('admin.dashboard.index')}}" class="dropdown-item">Panel d'administration</a>
                                @endcan
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Déconnexion</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                </div>
                            </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <main class="py-4">
            <div>                
                <div>
                    <div class="flex  bg-gray-100 dark:bg-gray-800 font-roboto">
                        <div class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>
                
                        <div class="fixed z-30 inset-y-0 left-0 w-60 transition duration-300 transform bg-white dark:bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
                
                            <nav class="flex flex-col mt-10 px-4 text-center">
                                <a href="{{route('admin.produits.index')}}"
                                    class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 text-decoration-none dark:hover:text-gray-100  hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Gestion des produits</a>
                                <a href="{{route('admin.category.index')}}"
                                    class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 text-decoration-none dark:hover:text-gray-100  hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Gestion des catégories</a> 
                                <a href="{{route('admin.services.index')}}"
                                    class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 text-decoration-none dark:hover:text-gray-100  hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Gestion des services</a>
                                <a href="{{route('admin.produits.ajouter')}}"
                                    class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 text-decoration-none dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Ajout de produits</a>
                                <a href="{{route('admin.category.ajouter')}}"
                                    class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 text-decoration-none dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Ajouts de catégories</a>
                                <a href="{{route('admin.services.ajouter')}}"
                                    class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 text-decoration-none dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Ajout des services</a>
                                <a href="{{route('admin.users.index')}}"
                                    class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 text-decoration-none dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Listes des utilisateurs</a>
                            </nav>
                        </div>
                
                        <div class="flex-1 flex flex-col overflow-hidden">    
                            <main class="flex-1 overflow-x-hidden overflow-y-auto">
                                @yield('content')
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    @yield('extra-js')
</body>

</html>