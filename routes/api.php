<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['auth:api'])->group(function () {
	Route::post('/products','ApiProductsController@setProducts');
	Route::get('/products','ApiProductsController@getProducts');
});

/*#############################################*/
# +++++ rutas por defecto en caso de error ++++ #
/*#############################################*/
Route::get('/{any}', function ($any) {
   return response()->json(['mensaje'=>'ruta no encontrada...','ruta'=>false]);
})->where('any', '.*');

Route::post('/{any}', function ($any) {
   return response()->json(['mensaje'=>'ruta no encontrada...','ruta'=>false]);
})->where('any', '.*');