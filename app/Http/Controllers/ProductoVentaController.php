<?php

namespace App\Http\Controllers;

use App\Models\ProductoVenta;
use App\Models\Productos;
use App\Models\Venta;
use Illuminate\Http\Request;


class ProductoVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        $productoVentas = ProductoVenta::join('productos', 'producto_ventas.productoId', '=', 'productos.id')
            ->select('producto_ventas.*', 'productos.*')
            ->get();
        //Enviar a la vista
        return view('productoVentas.index',compact('productoVentas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productoVentas = ProductoVenta::orderBy('id','asc')->get();
        return view('ventas.index', compact('productoVentas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'idProducto'=> 'required',
    //         'cantidad'=> 'required',
    //     ]);

    //     Factura::create($request->all());
    //     //Retornar la vista
    //     return redirect()->route('factura.index')->with('exito','Se ha guardado la Factura exitosamente.');
    // }
    public function store(Request $request)
    {
        $request->validate([
            'idVenta' =>'required',
            'productoId' =>'required',
            'cantidad'=>'required'
        ]);

        $productoVentas = ProductoVenta::create($request->all());




        // dd($request);

        return redirect()->route('ventas.show',$request->idVenta);

        // header("refresh:1;url=" + ventas.view/'.$request->idVenta +"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productoVenta = ProductoVenta::FindOrFail($id);
        //Enviar a la vista
        return view('productoVentas.view', compact('productoVenta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productoVenta = ProductoVenta::FindOrFail($id);
        //Enviar a la vista
        return view('productoVentas.edit', compact('productoVenta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'productoId'=> 'required',
            'cantidad'=> 'required',
        ]);

        $productoVenta = ProductoVenta::FindOrFail($id);

        $productoVenta->update($request->all());
        //Retornar la vista
        return redirect()->route('productoVentas.index')->with('exito','Se ha modificado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productoVenta = ProductoVenta::FindOrFail($id);
        $productoVenta->delete();
        return redirect()->route('productoVentas.index')->with('exito','Se ha eliminado correctamente.');
    }
}
