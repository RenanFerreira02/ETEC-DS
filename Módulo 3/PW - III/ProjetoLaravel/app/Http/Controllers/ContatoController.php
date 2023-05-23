<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contato = Contato::all();
        return view('contatoTabela', compact('contato'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contato = Contato::all();
        return view('contato', compact('contato'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contato = new Contato();

        $contato -> nome = $request -> txNome;
        $contato -> email = $request -> txEmail;
        $contato -> assunto = $request -> txAssunto;
        $contato -> mensagem = $request -> txMensagem;

        $contato->save();

        return redirect('/mande-uma-sugestao');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contato $contato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contato $contato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contato $contato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idContato)
    {
        $contato = new Contato();
        $contato->where('id', $idContato)->delete();
        return redirect('/contato');
    }

    public function allContacts(){
        $contato = Contato::all();
        return $contato;
    }
}
