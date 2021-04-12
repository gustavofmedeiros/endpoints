<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//  Route::resource('cozinhas', 'CozinhaController');

// Route::get('/cozinhas/remove/', 'CozinhaController@remover')->name('cozinhas.remove');
// Route::resource('cozinhas', 'CozinhaController');


Route::get('/cozinhas/remove/{id}', 'CozinhaController@remover')->name('cozinhas.remove');

Route::resource('cozinhas', 'CozinhaController');
