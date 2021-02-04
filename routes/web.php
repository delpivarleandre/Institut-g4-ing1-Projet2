<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\AjoutProductController;
use App\Http\Controllers\Admin\AjoutServiceController;
use App\Http\Controllers\Admin\AjoutCategorieController;

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

/* Admin Gestion Categorie Routes */
Route::get('/gestioncategorie', 'Admin\AjoutCategorieController@index')->name('admin.category.index');
Route::get('/gestioncategorie/ajouter', 'Admin\AjoutCategorieController@create')->name('admin.category.ajouter');
Route::resource('/admin/category', 'Admin\AjoutCategorieController');

/* Admin Gestion Product Routes */
Route::get('/gestionsarticle', 'Admin\AjoutProductController@index')->name('admin.produits.index');
Route::get('/gestionsarticle/ajouter', 'Admin\AjoutProductController@create')->name('admin.produits.ajouter');
Route::resource('/admin/product', 'Admin\AjoutProductController');

/* Admin Gestion Product Routes */
Route::get('/gestionsservice', 'Admin\AjoutServiceController@index')->name('admin.services.index');
Route::get('/gestionsservice/ajouter', 'Admin\AjoutServiceController@create')->name('admin.services.ajouter');
Route::resource('/admin/service', 'Admin\AjoutServiceController');

/* Contact Routes */
Route::resource('contact', 'ContactController');

/* Product Routes */
Route::get('/produit', 'ProductController@index')->name('products.index');
Route::get('/produit/{product}', 'ProductController@show')->name('products.show');
Route::get('/search', 'ProductController@search')->name('products.search');


/* Services Routes */
Route::get('/service', 'ServiceController@index')->name('services.index');
Route::get('/service/{service}', 'ServiceController@show')->name('services.show');

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


//Affichage de la vue Mes commandes
Route::get('/mescommandes', function () {
    return view('orders.index');
})->name('orders.index');

//
Route::get('/paneladmin', function () {
    return view('admin.dashboard.index');
})->name('admin.dashboard.index');

Route::get('/devis', [DevisController::class, 'showDevis']);

Route::get('/devis/pdf', [DevisController::class, 'createPDF']);