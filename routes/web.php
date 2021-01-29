<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
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

/* Product Routes */
Route::get('/produit', 'ProductController@index')->name('products.index');
Route::get('/produit/{product}', 'ProductController@show')->name('products.show');
Route::resource('product', 'ProductController');

/*Comment Product Routes*/
Route::post('comments/{product}', 'CommentController@store')->name('comments.store');

/* Cart Routes */
Route::get('/panier', 'PanierController@index')->name('cart.index');
Route::post("/panier/ajouter", 'PanierController@store')->name('cart.store');
Route::delete('/panier/{rowId}', 'PanierController@destroy')->name('cart.destroy');
Route::patch("/panier/{rowId}", 'PanierController@update')->name('cart.update');
Route::get('/videpanier', function () {
    Cart::destroy(); 
});

/* Checkout Routes */
Route::get('/paiement', 'CheckoutController@index')->name('checkout.index');
Route::post('/paiement', 'CheckoutController@store')->name('checkout.store');
Route::get('/merci', 'CheckoutController@thankyou')->name('checkout.thankyou');

/* Admin Gestion Product Routes */
Route::get('/gestionsarticle', 'ProductController@gestion_article_index')->name('admin.produits.index')->middleware('auth');
Route::get('/gestionsarticle/ajouter', 'ProductController@gestion_article_ajouter')->name('admin.produits.ajouter');
Route::get('/gestionsarticle/modifier/{product}', 'ProductController@gestion_article_editer')->name('admin.produits.editer');

/* Authentification Routes */
Auth::routes();

/*Administration Users Routes */
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {
    Route::resource('users', 'UsersController');
});

//Affichage de la vue acceuil
Route::get('/', function () {
    return view('acceuil.index');
})->name('acceuil.index');

//Affichage de la vue présentation
Route::get('/presentation', function () {
    return view('presentation.index');
})->name('presentation.index');

//Affichage de la vue contact
Route::get('/contact', function () {
    return view('contact.index');
})->name('contact.index');

//Afiichage de la vue des services
Route::get('/service', function () {
    return view('services.index');
})->name('services.index');

//Affichage de la vue Mes commandes
Route::get('/mescommandes', function () {
    return view('orders.index');
})->name('orders.index');