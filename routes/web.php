<?php

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

Route::get('/', 'ProduitsController@clientindex');
Route::get('index', 'ProduitsController@clientindex');
Route::get('shop', 'ProduitsController@shopindex');
Route::get('womenWinterCollection', 'ProduitsController@womenWinterCollection');
Route::get('womensummerCollection', 'ProduitsController@womensummerCollection');
Route::get('womensportsCollection', 'ProduitsController@womensportsCollection');
Route::get('womenkidsrCollection', 'ProduitsController@womenkidsrCollection');
Route::get('menwintercollection', 'ProduitsController@menwintercollection');
Route::get('mensummercollection', 'ProduitsController@mensummercollection');
Route::get('mensportscollection', 'ProduitsController@mensportscollection');
Route::get('menkidscollection', 'ProduitsController@menkidscollection');

Route::get('cart', 'CartController@index');
Route::get('cart/{id}', 'CartController@remove');
Route::post('cart', 'CartController@add');


Route::get('404', function(){
    return view('404');
});
Route::get('contact', function(){
    return view('contact');
});
Route::get('privacy', function(){
    return view('privacy');
});
Route::get('conditions', function(){
    return view('conditions');
});
Route::post('contact', 'MessagesController@store');
Route::post('rating/{id}', 'AvisController@store');
Route::get('single-product/{id}', 'ProduitsController@uniqueproduit');
Route::get('checkout', function(){
    return view('checkout');
});
/*Admin Routes*/
Route::get('Admindashboard', 'UtilisateursController@dashboard');
Route::get('Users','UtilisateursController@index');
Route::get('Users/{id}','UtilisateursController@destroy');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('Admins','UtilisateursController@indexAdmins');
Route::get('Admins/{id}','UtilisateursController@destroyAdmin');
Route::get('AddAdmin','UtilisateursController@AddAdmin');
Route::resource('Messages', 'MessagesController');
Route::post('Messages/{email}', 'MessagesController@reply')->name('Messages.reply');
Route::post('Messagerespond', 'MessagesController@replysender');
Route::get('ProfilUser', 'UtilisateursController@adminprofil');
Route::get('Profilsettings', 'UtilisateursController@profilsettings');
Route::post('Profilsettings','UtilisateursController@stroreprofilsettings')->name('Profilsettings');
Route::get('adminproducts', 'ProduitsController@indexadmin');
Route::get('productsadmin/{id}', 'ProduitsController@admindestroy')->name('productsadmin.admindestroy');

/*Fournisseur Routes*/
Route::get('Fournisseur', function(){
	return View('/Fournisseur.Fournisseur');
});
Route::get('productsFornisseur', 'ProduitsController@index');

Route::get('AddProduct', function(){
	return View('/Fournisseur.AddProduct');
});
Route::post('AddProduct', 'ProduitsController@store');
Route::resource('productsFornisseur', 'ProduitsController');
Route::post('productedit/{id}', 'ProduitsController@editsave');
Route::get('ProfilFornisseur', 'UtilisateursController@fournisseurprofil');
Route::get('profil/{id}', 'UtilisateursController@profil');
Route::get('fournisseurmessage/{id}', 'UtilisateursController@fournisseurmessage');
Route::post('fournisseurmessage', 'MessagesController@fournisseurmessagesender');
Route::get('MessagesFornisseur', 'MessagesController@indexfournisseur')->name('Messages.indexfournisseur');




Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('{others}', function($others){
    return view('404');
});
