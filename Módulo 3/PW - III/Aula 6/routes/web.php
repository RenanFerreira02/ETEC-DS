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

// Route::get('/laboratorio', function () {
//     return view('laboratorio');
// });

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/quem-somos', function () {
    return view('quemsomos');
});

Route::get('/reclamacao', function () {
    return view('reclamacao');
});

Route::get('/laboratorio', "LaboratorioController@index");

Route::get('/reclamacaoController', "ReclamacaoController@index");

Route::get('/contatoController', "ContatoController@index");