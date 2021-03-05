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

/* Middleware particulier */
Route::middleware('can:is_particulier')->group(function () {
    /* Product Routes */
    Route::get('/produit', 'ProductController@index')->name('products.index');
    Route::get('/produit/{product}', 'ProductController@show')->name('products.show');
    Route::get('/search', 'ProductController@search')->name('products.search');
    /* Cart Routes */
    Route::get('/panier/produit', 'PanierController@index_product')->name('cart.product');
    Route::post("/panier/produit/ajouter", 'PanierController@store_product')->name('cart.store_product');
    Route::delete('/panier/produit/{rowId}', 'PanierController@destroy_product')->name('cart.destroy_product');
    Route::patch("/panier/produit/{rowId}", 'PanierController@update_product')->name('cart.update_product');
    /*Comment Product Routes*/
    Route::post('comments/{product}', 'CommentController@store')->name('comments.store');
    /* Checkout Routes */
    Route::get('/paiements', 'CheckoutController@index_product')->name('checkout.index_product');
    Route::post('/paiements', 'CheckoutController@store_product')->name('checkout.store_product');
    Route::get('/mercis', 'CheckoutController@thankyou_product')->name('checkout.thankyou_product');
    //Affichage de la vue Mes commandes
    Route::get('/mescommandess', function () {
        return view('orders.index_product');
    })->name('orders.index_product');
});

/* Middleware pro */
Route::middleware('can:is_pro')->group(function () {
    /* Services Routes */
    Route::get('/service', 'ServiceController@index')->name('services.index');
    Route::get('/service/{service}', 'ServiceController@show')->name('services.show');
    /* Cart Routes */
    Route::get('/panier/service', 'PanierController@index_service')->name('cart.service');
    Route::post("/panier/service/ajouter", 'PanierController@store_service')->name('cart.store_service');
    Route::delete('/panier/service/{rowIds}', 'PanierController@destroy_service')->name('cart.destroy_service');
    Route::patch("/panier/service/{rowId}", 'PanierController@update_service')->name('cart.update_service');
    /* Checkout Routes */
    Route::get('/paiement', 'CheckoutController@index_service')->name('checkout.index_service');
    Route::post('/paiement', 'CheckoutController@store_service')->name('checkout.store_service');
    Route::get('/merci', 'CheckoutController@thankyou_service')->name('checkout.thankyou_service');
    /* Affichage de la vue mes commandes */
    Route::get('/mescommandes', function () {
        return view('orders.index_service');
    })->name('orders.index_service');
    
});

Route::middleware('can:is_commercial')->group(function () {
    /* Devis Routes */
    Route::get('/lesdevis', 'DevisController@index')->name('orders.index_devis');
});

Route::middleware('can:is_admin')->group(function () {
    /* Admin Gestion Categorie Routes */
    Route::get('/gestioncategorie', 'Admin\AjoutCategorieController@index')->name('admin.category.index');
    Route::get('/gestioncategorie/ajouter', 'Admin\AjoutCategorieController@create')->name('admin.category.ajouter');
    Route::resource('/admin/category', 'Admin\AjoutCategorieController');
    /* Admin Gestion Product Routes */
    Route::get('/gestionsarticle', 'Admin\AjoutProductController@index')->name('admin.produits.index');
    Route::get('/gestionsarticle/ajouter', 'Admin\AjoutProductController@create')->name('admin.produits.ajouter');
    Route::resource('/admin/product', 'Admin\AjoutProductController');
    /* Admin Gestion Service Routes */
    Route::get('/gestionsservice', 'Admin\AjoutServiceController@index')->name('admin.services.index');
    Route::get('/gestionsservice/ajouter', 'Admin\AjoutServiceController@create')->name('admin.services.ajouter');
    Route::resource('/admin/service', 'Admin\AjoutServiceController');
    /* Panel Routes*/ 
    Route::get('/paneladmin', function () {
        return view('admin.dashboard.index');
    })->name('admin.dashboard.index');
    
});
/*Administration Users Routes */
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:is_admin')->group(function () {
    Route::resource('users', 'UsersController');
});
/* Contact Routes */
Route::resource('contact', 'ContactController');
/*Authentification Routes */
Auth::routes();
/*Administration Users Routes */
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('users', 'UsersController');
});
//Telechargement du devis
Route::get('generate-pdf/{order}', 'DevisController@generate_PDF')->name('devis.pdf');
//Affichage de la vue acceuil
Route::get('/', function () {
    return view('acceuil.index');
})->name('acceuil.index');
//Affichage de la vue projet
Route::get('/projet', function () {
    return view('projet.index');
})->name('projet.index');
//Affichage de la vue présentation
Route::get('/presentation', function () {
    return view('presentation.index');
})->name('presentation.index');
//Affichage de la vue 404
 Route::fallback(function(){
    return view('errors.404'); 
 });

 