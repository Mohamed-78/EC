<?php


Route::get('/', function () {
	return view('front.index');
});
//--------------------------SITE WEB-----------------------------------
Route::get('/', 'websiteController@index')->name('accueil');
Route::get('/cogitech/produits', 'websiteController@produits')->name('produits');
Route::get('/cogitech/connexion', 'websiteController@connexion')->name('connexion');
Route::get('/cogitech/inscription', 'websiteController@inscription')->name('inscription');
Route::get('/cogitech/promotion', 'websiteController@promotion')->name('promotion');
Route::get('/cogitech/serveur', 'websiteController@serveur')->name('serveur');
Route::get('/cogitech/details/serveur/{id}', 'websiteController@singleServeur');
Route::get('/cogitech/imprimante', 'websiteController@imprimante')->name('imprimante');
Route::get('/cogitech/details/imprimante/{id}', 'websiteController@singleImprimante');
Route::get('/cogitech/equipement', 'websiteController@equipement')->name('imprimante');
Route::get('/cogitech/details/equipement/{id}', 'websiteController@singleEquipement');
Route::get('/cogitech/telephonieIp', 'websiteController@telephonieIp')->name('telephonieIp');
Route::get('/cogitech/details/telephonieIp/{id}', 'websiteController@singleIp');
Route::get('/cogitech/routeur', 'websiteController@routeur')->name('routeur');
Route::get('/cogitech/details/routeur/{id}', 'websiteController@singleRouteur');
Route::get('/cogitech/cable', 'websiteController@cable')->name('cable');
Route::get('/cogitech/details/cable/{id}', 'websiteController@singleCable');
Route::get('/cogitech/disque', 'websiteController@disque')->name('disque');
Route::get('/cogitech/details/disque/{id}', 'websiteController@singleDisque');
Route::get('/cogitech/desktop', 'websiteController@desktop')->name('desktop');
Route::get('/cogitech/details/desktop/{id}', 'websiteController@singleDesktop');
Route::get('/cogitech/pc', 'websiteController@pc')->name('pc');
Route::get('/cogitech/details/pc/{id}', 'websiteController@singlePc');
Route::get('/cogitech/camera', 'websiteController@camera')->name('camera');
Route::get('/cogitech/details/camera/{id}', 'websiteController@singleCamera');
Route::post('/like', 'websiteController@like')->name('produit.like');

Route::get('/cogitech/details/produits/{id}', 'websiteController@singleProduit');
Route::get('/cogitech/details/promo/{id}', 'websiteController@singlePromo');
Route::get('/recherche', 'websiteController@search')->name('search');
Route::get('/cogitech/vider/panier', 'websiteController@vider')->name('vider');
Route::post('/cogitech/commande', 'websiteController@cmde')->name('cmde');
Route::get('/cogitech/commande/client', 'websiteController@voirCmde')->name('voirCmde');

Route::post('/cogitech/cart', 'CartController@store')->name('cart.store');
Route::get('/cogitech/voir/panier', 'CartController@index')->name('panier');
Route::patch('/panier/{rowId}', 'CartController@update')->name('cart.update');
Route::get('/panier/{rowId}', 'CartController@destroy')->name('cart.destroy');

/*Route::get('/cogitech/vider/panier', function(){
	Cart::destroy();
});*/

Route::post('/cogitech/inscription/client', 'websiteController@createClt')->name('createClt');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//------------------------ROLE CLIENT--------------------------------
Route::group(['prefix' => 'utilisateur', 'middleware' => 'auth'], function(){
	Route::group(['namespace' => 'Client', 'middleware' => 'client'], function ()
  		{

  		Route::get('/', 'ClientController@index')->name('Client');

  	});

});

//------------------------ROLE ADMIN--------------------------------
Route::group(['prefix' => 'administrateur', 'middleware' => 'auth'], function(){
	Route::group(['namespace' => 'Admin', 'middleware' => 'management'], function ()
  		{

  		Route::get('cogitech/espace/admin', 'AdminController@accueil')->name('Management');
  	});

});

Route::get('/cogitech/ajouter/produit', 'Admin\AdminController@ajouter_produit');
Route::post('/cogitech/save/produit', 'Admin\AdminController@save_produit');
Route::get('/cogitech/view/produit/{id}', 'Admin\AdminController@view_produit');
Route::post('/cogitech/updated/prod/{id}', 'Admin\AdminController@update_produit');
Route::get('/cogitech/delte/produit/{id}', 'Admin\AdminController@delete_produit');
Route::get('/cogitech/liste/promo', 'Admin\AdminController@liste_promo');
Route::get('/cogitech/faire/promotion', 'Admin\AdminController@ajouter_promo');
Route::post('/cogitech/save/promo', 'Admin\AdminController@save_promo');
Route::get('/cogitech/view/promo/{id}', 'Admin\AdminController@view_promo');
Route::post('/cogitech/updated/promo/{id}', 'Admin\AdminController@update_promo');
Route::get('/cogitech/delete/promo/{id}', 'Admin\AdminController@delete_promo');
Route::get('/cogitech/liste/commande', 'Admin\AdminController@liste_commande');
Route::get('/cogitech/liste/users', 'Admin\AdminController@liste_livraison');
Route::get('/cogitech/delete/client/{user_id}/{client_id}', 'Admin\AdminController@deleteUser');
Route::get('/cogitech/view/cmde/{id}', 'Admin\AdminController@SingleCmde')->name('SingleCmde');
Route::get('/cogitech/delete/cmde/{id}/', 'Admin\AdminController@deleteCmde');



