<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clientes = Cliente::orderBy('nombre','asc')->get();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clientes.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //validar los datos BD
        $request->validate([
            'cedula' => 'required',
            'nombre' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'email' => 'required',
        ]);

        //Almacenar el proyecto en la DB
        Cliente::create($request->all());

        //Redirigir el index
        return redirect()->route('clientes.index')->with('exito', 'Se ha guardado el cliente exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //consulta
        $clientes = Cliente::FindOrFail($id); //encuentra o lance un error
        //Enviar a la vista
        return view('clientes.view', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //consulta
        $cliente =Cliente::FindOrFail($id);
        //Enviar al edit
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //validar los datos
        $request->validate([
            'cedula' => 'required',
            'nombre' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'email' => 'required',
        ]);

        //Buscar el proyecto
        $cliente = Cliente::FindOrFail($id);

        //Actualizacion del proyecto
        $cliente->update($request->all());

        //Redirigir el index
        return redirect()->route('clientes.index')->with('exito', 'Se ha guardado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar un producto
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('clientes.index')->with('exito', 'Se ha eliminado el cliente exitosamente');
    }
}
