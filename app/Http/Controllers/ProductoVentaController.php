<?php

namespace App\Http\Controllers;

use App\Models\ProductoVenta;
use App\Models\Productos;
use Illuminate\Http\Request;

class ProductoVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productoVentas = ProductoVenta::orderBy('productoId', 'asc')->get();
        return view('productoVentas.index', compact('productoVentas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $productos = Productos::orderBy('nombre','asc')->get();
        return view('productoVentas.insert',compact('productos'));

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
            'fecha'=>'required',
            'productoId' => 'required',
            'tipo'=>'required',
            'total' => 'required',
            'cantidad'=>'required',

        ]);

        ProductoVenta::create($request->all());

        return redirect()->route('productoVentas.index')->with('exito', 'Se ha agreado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductoVenta  $productoVenta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $productoVenta = ProductoVenta::join('productos', 'productoVentas.productoId', '=', 'productos.id')
        //                 ->select('productoVentas.*','productos.nombre')
        //                 ->where('productoVentas.id','=',$id)
        //                 ->first();
        //echo $desarrollador;
        $productoVentas = ProductoVenta::FindOrFail($id);
        return view('productoVentas.view', compact('productoVentas'));
          //consulta


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductoVenta  $productoVenta
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        ///consulta
        $productoVenta =ProductoVenta::FindOrFail($id);
        //Enviar al edit
        return view('productoVentas.edit', compact('productoVenta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductoVenta  $productoVenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validar los datos
        $request->validate([
            'codigo' => 'required',
            'productoId' => 'required',
            'total' => 'required',
            'tipo' => 'required',
        ]);

        //Buscar el proyecto
        $productoVenta = ProductoVenta::FindOrFail($id);

        //Actualizacion del proyecto
        $productoVenta->update($request->all());

        //Redirigir el index
        return redirect()->route('productoVentas.index')->with('exito', 'Se ha guardado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductoVenta  $productoVenta
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
         //Eliminar un producto
         $productoVenta = ProductoVenta::findOrFail($id);
         $productoVenta->delete();
         return redirect()->route('productoVentas.index')->with('exito', 'Se ha eliminado exitosamente');
    }
}
