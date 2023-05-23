<?php

namespace App\Http\Controllers;

use App\Models\Laboratorio;
use App\Models\Reclamacoes;
use Illuminate\Http\Request;

class ReclamacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $reclamacoes = Reclamacoes::all();
        $lab = Laboratorio::all();

        // Filtros
        $filtroLab = $request->input('filtroLab');
        if ($filtroLab) {
            $reclamacoes = $reclamacoes->where('idLab', $filtroLab);
        }


        return view('reclamacoesTabela', compact(
            'reclamacoes',
            'lab',
            'filtroLab'
        ));
    }

    public function recAll() {
        $reclamacoes = Reclamacoes::all();
        return $reclamacoes;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reclamacoes = Reclamacoes::all();
        $lab = Laboratorio::all();

        return view('reclamacoes', compact('reclamacoes', 'lab'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reclamacoes = new Reclamacoes();

        $reclamacoes->idLab = $request->txLab;
        $reclamacoes->pc = $request->txPc;
        $reclamacoes->titulo = $request->txTitulo;
        $reclamacoes->descricao = $request->txDescricao;

        $reclamacoes->save();

        return redirect('/mande-uma-reclamacoes');
    }
    public function addRecApi(Request $request)
    {
        $reclamacoes = new Reclamacoes();

        $reclamacoes->idLab = $request->txLab;
        $reclamacoes->pc = $request->txPc;
        $reclamacoes->titulo = $request->txTitulo;
        $reclamacoes->descricao = $request->txDescricao;

        $reclamacoes->save();

        return $reclamacoes;
    }

    /**
     * Display the specified resource.
     */
    public function show(Reclamacoes $reclamacoes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reclamacoes $reclamacoes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reclamacoes $reclamacoes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idRec)
    {
        $reclamacoes = new Reclamacoes();
        $reclamacoes->where('id', $idRec)->delete();
        return redirect('/reclamacoes');
    }

    public function allReclamacoes()
    {
        $reclamacoes = Reclamacoes::all();
        return $reclamacoes;
    }
}
