<?php

use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\ReclamacoesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/reclamacoes-api', [ReclamacoesController::class, 'recAll'])->name('reclamacoesApi');

// tem que deixar os campos nulos
Route::get('/reclamacoes-update-api', [ReclamacoesController::class, 'addRecApi'])->name('reclamacoesApi');
//fazer a de exclusao

Route::get('/laboratorio-api', [LaboratorioController::class, 'labAll'])->name('labApi');
