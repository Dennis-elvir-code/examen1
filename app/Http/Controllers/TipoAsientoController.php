<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipoAsiento;

class TipoAsientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tipohome()
    {
        //$tipoAsientos = TipoAsiento::all();
        return view('tipoAsientos');
    
    }

    public function tipoagregar()
    {
        //$tipoAsientos = TipoAsiento::all();
        return view('agregarTipodeAsiento');
    
    }
    public function tipoeditar()
    {
        //$tipoAsientos = TipoAsiento::all();
        return view('editarAsiento');
    
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
