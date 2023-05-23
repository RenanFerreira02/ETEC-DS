<?php

namespace App\Http\Controllers;

use App\Models\Laboratorio;
use Illuminate\Http\Request;

class LaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lab = Laboratorio::all();
        return view('Laboratorio', compact('lab'));
    }

    public function labAll() {
        $lab = Laboratorio::all();
        return $lab;
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
        $laboratorio = new Laboratorio();

        $laboratorio -> laboratorio = $request -> txLab;

        $laboratorio->save();
        
        return redirect('/laboratorio');
    }

    /**
     * Display the specified resource.
     */
    public function show(Laboratorio $laboratorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laboratorio $laboratorio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laboratorio $laboratorio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idLab)
    {
        $laboratorio = new Laboratorio();
        $laboratorio->where('id', $idLab)->delete();
        return redirect('/laboratorio');
    }

    public function allLabs()
    {
        $laboratorio = Laboratorio::all();
        return $laboratorio;
    }
}
