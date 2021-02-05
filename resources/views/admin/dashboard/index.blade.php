@extends('layouts.app')

@section('content')
    

<div>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    
    <div x-data="{ sidebarOpen: false, darkMode: false }" :class="{ 'dark': darkMode }">
        <div class="flex  bg-gray-100 dark:bg-gray-800 font-roboto">
            <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
                class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>
    
            <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
                class="fixed z-30 inset-y-0 left-0 w-60 transition duration-300 transform bg-white dark:bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
    
                <nav class="flex flex-col mt-10 px-4 text-center">
                    <a href="{{route('admin.produits.index')}}"
                        class="py-2 text-sm text-gray-700 dark:text-gray-100 bg-gray-200 dark:bg-gray-800 rounded">Gestion des produits</a>
                    <a href="{{route('admin.category.index')}}"
                        class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100  hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Gestion des catégories</a> 
                    <a href="{{route('admin.services.index')}}"
                        class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100  hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Gestion des services</a>
                        
                    <a href="{{route('admin.produits.ajouter')}}"
                        class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Ajout de produits</a>
                    <a href="{{route('admin.category.ajouter')}}"
                        class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Ajouts de catégories</a>
                    <a href="{{route('admin.services.ajouter')}}"
                        class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Ajout des services</a>
                    <a href="{{route('admin.users.index')}}"
                        class="mt-3 py-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800 rounded">Listes des utilisateurs</a>
                </nav>
            </div>
    
            <div class="flex-1 flex flex-col overflow-hidden">    
                <main class="flex-1 overflow-x-hidden overflow-y-auto">
                    
                </main>
            </div>
        </div>
    </div>
</div>

@endsection