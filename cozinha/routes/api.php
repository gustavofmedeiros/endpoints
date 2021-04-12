<?php

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




  Route::get('/', function () {
      return response()->json(['message' => 'Cozinha API', 'status' => 'Connected']);
  });


  Route::resource('cozinhas', 'CozinhaController');
  Route::resource('cozinhas/show', 'CozinhaController');
  Route::resource('cozinhas/destroy', 'CozinhaController');
  Route::resource('cozinhas/update', 'CozinhaController');

Route::get('/', function () {
    return redirect('api');
});
