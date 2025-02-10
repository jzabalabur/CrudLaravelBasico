<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMarcaRequest;
use App\Http\Requests\UpdateMarcaRequest;
use App\Models\Marca;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marcas=Marca::all();
        return view('marca.index', compact('marcas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('marca.form_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMarcaRequest $request)
    {
        $request->validated();
        $marca=new Marca;
        $marca->nombre=$request->nombre;
        $marca->save();
        try{
        return redirect()->route('marca.index')->with('success', 'Registro creado con exito');
        }catch(\Exception $e){
            return redirect()->route('marca.index')->with('error', 'Error al crear el registro');

        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Marca $marca)
    {
        return view('marca.form_show', compact('marca'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Marca $marca)
    {
        return view('marca.form_update', compact('marca'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMarcaRequest $request, Marca $marca)
    {
        $request->validated();
        $marca->nombre=$request->nombre;
        $marca->update();
        try{
            return redirect()->route('marca.index')->with('success', 'Registro modificado con exito');
        }catch(\Exception $e){
            return redirect()->route('marca.index')->with('error', 'Error al modificar el registro');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marca $marca)
    {
        try{
            $marca->delete();
            return redirect()->route('marca.index')->with('success', 'Registro eliminado con exito');
        }catch(\Exception $e){
            return redirect()->route('marca.index')->with('error', 'Error al eliminar el registro');

        }
    }
}
