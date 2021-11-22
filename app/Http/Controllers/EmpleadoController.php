<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $empleado = Empleado::orderBy('nombre','asc')->get();
        return view('empleado.index', compact('empleado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleado.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validar los datos BD
        $request->validate([
            'cedula' => 'required',
            'nombre' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
        ]);

        //Almacenar el proyecto en la DB
        Empleado::create($request->all());

        //Redirigir el index
        return redirect()->route('empleado.index')->with('exito', 'Se ha guardado el empleado exitosamente.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //consulta
        $empleado = Empleado::FindOrFail($id); //encuentra o lance un error
        //Enviar a la vista
        return view('empleado.view', compact('empleado'));        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //consulta
        $empleado =Empleado::FindOrFail($id);
        //Enviar al edit
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validar los datos
        $request->validate([
            'cedula' => 'required',
            'nombre' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
        ]);

        //Buscar el proyecto
        $empleado = Empleado::FindOrFail($id);

        //Actualizacion del proyecto
        $empleado->update($request->all());

        //Redirigir el index
        return redirect()->route('empleado.index')->with('exito', 'Se ha guardado el empleado exitosamente.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar un producto
        $empleado = Empleado::findOrFail($id);
        $empleado->delete();
        return redirect()->route('empleado.index')->with('exito', 'Se ha eliminado el producto exitosamente');   
    }
}
