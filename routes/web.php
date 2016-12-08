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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api'], function() {
  Route::group(['prefix' => 'contatos'], function() {
    // recuperando contatos
    Route::get('', ['uses' => 'ContatoController@todos']);
    // salvando um novo contato
    Route::post('', ['uses' => 'ContatoController@salvar']);
    // removendo contato
    Route::delete('{id}', ['uses' => 'ContatoController@apagar']);
  });
});