<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\UsersController;


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

Route::get('/produit', 'ProductController@index')->name('structure.produit');
Route::get('/produit/{slug}', 'ProductController@show')->name('structure.affichage_produit');


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {
    Route::resource('users', 'UsersController');
});


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

Route::get('/paiement', 'CheckoutController@index')->name('structure.paiement');

Route::get('/devis', function () {
    return view('structure.devis');
})->name('structure.devis');

Route::get('/panier', 'PanierController@index')->name('structure.panier');

Route::post("/panier/ajouter", 'PanierController@store')->name('panier.store');

Route::delete('/panier/{rowId}', 'PanierController@destroy')->name('panier.destroy');;

Route::get('/videpanier', function () {
    Cart::destroy();
});




Route::get('/acceuil', function () {
    return view('structure.acceuil');
})->name('structure.acceuil');

Route::get('/dashboard', function () {
    return view('home');
})->name('dashboard'); //Attention Dashboard !!!

Auth::routes();
