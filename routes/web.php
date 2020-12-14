<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('structure.landing');
});

Route::get('/presentation', function () {
    return view('structure.presentation');
})->name('structure.presentation');

Route::get('/contact', function () {
    return view('structure.contact');
})->name('structure.contact');

Route::get('/service', function () {
    return view('structure.service');
})->name('structure.service');

Route::get('/produit', function () {
    return view('structure.produit');
})->name('structure.produit');

Route::get('/devis', function () {
    return view('structure.devis');
})->name('structure.devis');

Route::get('/panier', function () {
    return view('structure.panier');
})->name('structure.panier');



Route::get('/acceuil', function () {
    return view('structure.acceuil');
})->name('structure.acceuil');

Route::get('/dashboard', function () {
    return view('home');
})->name('dashboard'); //Attention Dashboard !!!

Auth::routes();

