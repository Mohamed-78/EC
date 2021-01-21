<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT');
header('Access-Control-Allow-Headers: Authorization, Content-Type');
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::group(['prefix' => 'v1'], function(){

	Route::get('annonces', 'MobileController@index');
	Route::get('all/picture', 'MobileController@allPicture');
	Route::get('produits', 'MobileController@produits');
	Route::get('promotions', 'MobileController@promotions');
	Route::get('details/{id}/annonce', 'MobileController@singleAnnonce');
	Route::get('detailsPromo/{id}', 'MobileController@singlePromo');
	Route::get('types/{categorie}', 'MobileController@typeAnnonces');
	Route::GET('/auth/connexion/{email}/{password}', 'MobileController@loginget');
	Route::POST('/auth/register', 'MobileController@register');
});
