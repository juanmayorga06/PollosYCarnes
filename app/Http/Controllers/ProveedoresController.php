<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $proveedores = Proveedores::orderBy('nombre', 'asc')->get();

        return view('proveedores.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('proveedores.insert');
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
            'nit' => 'required',
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'marca' => 'required',
        ]);

        //Almacenar el proyecto en la DB
        Proveedores::create($request->all());

        //Redirigir el index
        return redirect()->route('proveedores.index')->with('exito', 'Se ha guardado el proveedor exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //consulta
        $proveedor = Proveedores::FindOrFail($id); //encuentra o lance un error
        //Enviar a la vista
        return view('proveedores.view', compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //consulta
         $proveedor =Proveedores::FindOrFail($id);
         //Enviar al edit
         return view('proveedores.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //validar los datos
         $request->validate([
            'nit' => 'required',
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'marca' => 'required',
        ]);
        //Buscar el proyecto
        $proveedor = Proveedores::FindOrFail($id);

        //Actualizacion del proyecto
        $proveedor->update($request->all());

        //Redirigir el index
        return redirect()->route('proveedores.index')->with('exito', 'Se ha guardado el proveedor exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar un producto
        $proveedor = Proveedores::findOrFail($id);
        $proveedor->delete();
        return redirect()->route('proveedores.index')->with('exito', 'Se ha eliminado el proveedor exitosamente');
    }
}
