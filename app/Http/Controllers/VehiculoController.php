<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehiculoRequest;
use App\Http\Requests\UpdateVehiculoRequest;
use App\Models\Vehiculo;
use App\Models\Marca;


class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos=Vehiculo::all();
        return view('vehiculo.index', compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $marcas=Marca::all();
        return view('vehiculo.form_create', compact('marcas'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVehiculoRequest $request)
    {
        $request->validated();
        $vehiculo=new Vehiculo;
        $vehiculo->modelo=$request->modelo;
        $vehiculo->año=$request->año;
        $vehiculo->precio=$request->precio;
        $vehiculo->marca_id=$request->marca_id;

        try{
            $vehiculo->save();
            return redirect()->route('vehiculo.index')->with('success', 'Registro creado con exito');
        }catch(\Exception $e){
            return redirect()->route('vehiculo.index')->with('error', 'Error al crear el registro');

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehiculo $vehiculo)
    {
        $marcaActual=Marca::where('id', $vehiculo->marca_id)->first();

        return view('vehiculo.form_show', compact('vehiculo', 'marcaActual'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehiculo $vehiculo)
    {
        $marcaActual=Marca::where('id', $vehiculo->marca_id)->first();
        $marcas=Marca::all();
        return view('vehiculo.form_update', compact('vehiculo', 'marcas', 'marcaActual'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVehiculoRequest $request, Vehiculo $vehiculo)
    {
        $request->validated();
        $vehiculo->modelo=$request->modelo;
        $vehiculo->año=$request->año;
        $vehiculo->precio=$request->precio;
        $vehiculo->marca_id=$request->marca_id;

        try{
            $vehiculo->update();
            return redirect()->route('vehiculo.index')->with('success', 'Registro modificado con exito');
        }catch(\Exception $e){
            return redirect()->route('vehiculo.index')->with('error', 'Error al modificar el registro');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehiculo $vehiculo)
    {
        try{
            $vehiculo->delete();
            return redirect()->route('vehiculo.index')->with('success', 'Registro eliminado con exito');
        }catch(\Exception $e){
            return redirect()->route('vehiculo.index')->with('error', 'Error al eliminar el registro');

        }
    }
}
