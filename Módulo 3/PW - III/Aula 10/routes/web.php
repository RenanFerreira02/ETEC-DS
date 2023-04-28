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

// Rota da página inicial
Route::get('/', function () {
    return view('index');
});

// Rota da página Sobre
Route::get('/sobre', function () {
    return view('quem-somos');
});

// Rotas da página Laboratorio com seus respectivos métodos

Route::get('/laboratorio', "LaboratorioController@index");

Route::post('/laboratorio', "LaboratorioController@store");

Route::get('/laboratorio/excluir/{idLab}', "LaboratorioController@destroy");


// Rota da página reclamações com seus respectivos métodos
Route::get('/reclamacao', "ReclamacaoController@index");

Route::post('/reclamacao', "ReclamacaoController@store");

Route::get('/reclamacao/excluir/{idRec}', "ReclamacaoController@destroy");