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

Route::get('/laboratorio', "LaboratorioController@index");

Route::get('/contato', "ContatoController@index");

Route::get('/sobre', "QuemSomosController@index");

Route::get('/reclamacao', "ReclamacaoController@index");