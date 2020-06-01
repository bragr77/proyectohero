<?php

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Endpoint de testeo
Route::get('/','APIController@index');

//Endpoint de Heroes
Route::get('heroes','APIController@getAllHeroes');
Route::get('heroes/{id}','APIController@getHeroe');

//Endpoint de Enemies
Route::get('enemies','APIController@getAllEnemies');
Route::get('enemies/{id}','APIController@getEnemy');

//Endpoint de Items
Route::get('items','APIController@getAllitems');
Route::get('items/{id}','APIController@getItem');

//Endpoint de Battle System
Route::get('bs/{heroId}/{enemyId}', 'APIController@runManualBS');
