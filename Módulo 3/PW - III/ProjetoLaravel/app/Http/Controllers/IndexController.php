<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use App\Models\Index;
use App\Models\Laboratorio;
use App\Models\QuemSomos;
use App\Models\Reclamacoes;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reclamacoes = Reclamacoes::all();
        $lab = Laboratorio::all();
        $contato = Contato::all();
        $contato = QuemSomos::all();

        // Count
        $totalLaboratorios = Laboratorio::count();
        $totalReclamacoes = Reclamacoes::count();
        $totalContato = Contato::count();
        $totalDev = QuemSomos::count();

        // Última reclamação
        $ultimaRec = Reclamacoes::orderBy('dtCriacao', 'desc')->first();

        // Reclamção mais antiga
        $antigaRec = Reclamacoes::orderBy('dtCriacao', 'asc')->first();


        // Quantidade de rec por lab
        $reclamacoesPorLab = DB::table('tbReclamacao')
            ->join('tbLaboratorio', 'tbReclamacao.idLab', '=', 'tbLaboratorio.id')
            ->select('tbLaboratorio.laboratorio', DB::raw('count(tbReclamacao.id) as total'))
            ->groupBy('tbLaboratorio.laboratorio')
            ->get();

            // dd($reclamacoesPorLab);

        return view('dashboard', compact(
            'reclamacoes',
            'lab',
            'totalLaboratorios',
            'totalReclamacoes',
            'totalContato',
            'totalDev',
            'reclamacoesPorLab',
            'ultimaRec',
            'antigaRec',
        ));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Index $index)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Index $index)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Index $index)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Index $index)
    {
        //
    }
}
