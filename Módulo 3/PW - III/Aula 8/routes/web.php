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

Route::get('/principal', "PrincipalController@index");

// Rotas da página Laboratorio
Route::get('/laboratorio', "LaboratorioController@index");

Route::post('/laboratorio', "LaboratorioController@store");

Route::get('/laboratorio/excluir/{idLab}', "LaboratorioController@destroy");


// Rotas da página Contato
Route::get('/contato','ContatoController@index');

Route::post('/contato','ContatoController@store');

Route::get('/contato/excluir/{idContato}','ContatoController@destroy');
// Fim rotas da página contato


Route::get('/sobre', "QuemSomosController@index");

Route::get('/reclamacao', "ReclamacaoController@index");