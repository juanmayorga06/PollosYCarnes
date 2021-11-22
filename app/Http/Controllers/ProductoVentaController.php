<?php

namespace App\Http\Controllers;

use App\Models\ProductoVenta;
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
        $productoVentas = ProductoVenta::orderBy('codigo', 'asc')->get();
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
        return view('productoVentas.insert');

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
            'codigo' => 'required',
            'total' => 'required',

        ]);
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
        $productoVenta = ProductoVenta::join('productos', 'productoVentas.productoId', '=', 'proyectos.id')
        ->select('productoVentas.*','productos.nombre as nombreProducto')
        ->where('prodcutoVentas.id','=',$id)
        ->first();
        //echo $desarrollador;
return view('productoVentas.view', compact('productoventa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductoVenta  $productoVenta
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductoVenta $productoVenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductoVenta  $productoVenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductoVenta $productoVenta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductoVenta  $productoVenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductoVenta $productoVenta)
    {
        //
    }
}
