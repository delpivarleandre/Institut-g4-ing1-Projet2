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

<<<<<<< HEAD
Route::get('/produit', 'ProductController@index')->name('structure.produit');
Route::get('/produit/{slug}', 'ProductController@show')->name('structure.affichage_produit');


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {
    Route::resource('users', 'UsersController');
=======
//--------------------------------------Paiement-----------------------------------------------
Route::get('/paiement','CheckoutController@index')->name('checkout.index');
Route::post('/paiement','CheckoutController@store')->name('checkout.store');
Route::get('/merci', function(){
    return view('checkout.thankyou');
>>>>>>> 14ef17750cff7fb76c82d0dc4a1265e686e17e5a
});

//---------------------------------------------------------------------------------------------
//-----------------------------------Commentaire---------------------------------------
Route::post('comments/{product}','CommentController@store')->name('comments.store');
//-----------------------------------------------------------------------------------

//-----------------------------------Acceuil---------------------------------------
Route::get('/', function () {
    return view('structure.acceuil');
})->name('structure.acceuil');

//----------------------------------------------------------------------------------

<<<<<<< HEAD
Route::get('/paiement', 'CheckoutController@index')->name('structure.paiement');
=======
//---------------------------------Mes commandes------------------------------------
Route::get('/dashboard', function () {
    return view('home');
})->name('dashboard'); 
//---------------------------------------------------------------------------------

>>>>>>> 14ef17750cff7fb76c82d0dc4a1265e686e17e5a

//-------------------------------------------Authentification-----------------------------------
Auth::routes();
//---------------------------------------------------------------------------------------------

//------------------------------------Produit-------------------------------------
//Affichage du catalogue des produits
Route::get('/produit', 'ProductController@index')->name('structure.produit');
//Affichage d'un produit
Route::get('/produit/{product}', 'ProductController@show')->name('structure.affichage_produit');
//Affichage de la gestion de articles (vendeur, admin)
Route::get('/gestionsarticle', 'ProductController@gestion_article_index')->name('admin.produits.index')->middleware('auth');
//Affichage de la vue pour créer des articles
Route::get('/gestionsarticle/ajouter', 'ProductController@gestion_article_ajouter')->name('admin.produits.ajouter');
//Affichage de la vue pour modifier des articles
Route::get('/gestionsarticle/modifier/{product}', 'ProductController@gestion_article_editer')->name('admin.produits.editer');
//Route pour supprimer et editer les articles
Route::resource('product', 'ProductController');
//-----------------------------------------------------------------------------------

//----------------------------------------Panier----------------------------------------
//Affichage du panier
Route::get('/panier', 'PanierController@index')->name('structure.panier');

//Route pour ajouter un produit au panier 
Route::post("/panier/ajouter", 'PanierController@store')->name('panier.store');

//Route pour supprimer un article du panier
Route::delete('/panier/{rowId}', 'PanierController@destroy')->name('panier.destroy');;

//Route pour vider le panier
Route::get('/videpanier', function () {
    Cart::destroy();
});
//--------------------------------------------------------------------------------------

//-----------------------------------------Admin---------------------------------
//Affichage des différentes vues liées au role admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('users', 'UsersController');
});

//-------------------------------------Autres vues-------------------------------------------
//Affichage de la vue présentation 
Route::get('/presentation', function () {
    return view('structure.presentation');
})->name('structure.presentation');

//Affichage de la vue contact
Route::get('/contact', function () {
    return view('structure.contact');
})->name('structure.contact');

//Afiichage des services
Route::get('/service', function () {
    return view('structure.service');
})->name('structure.service');
//-----------------------------------------------------------------------------------------------


