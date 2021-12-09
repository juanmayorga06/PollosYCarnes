<!-- //importar layout -->
@extends('layouts.layout')
<!-- donde haya algo llamado titulo se llamará productos -->
@section('titulo', 'Productos Ventas')
<!-- //Aquí llama a yeald y pone todo el codigo ahí -->
@section('content')
    <h1 class="text-center pt-5 pb-3">Productos Ventas</h1>
    @if ($mensaje = Session::get('exito'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p>{{ $mensaje }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>

    </div>
@endif
    <a href="{{ route('productoVentas.create') }}" class="btn btn-primary my-3 float-end">Crear Producto Venta</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Cantidad</th>
                <th>productoId</th>
                <th>Marca</th>
                <th>Total</th>           
            </tr>
        </thead>
        <tbody>
            @foreach($productoVentas as $productoVenta)
            <tr>
                <td>{{ $productoVenta->fecha}}</td>
                <td>{{ $productoVenta->codigo}}</td>
                <td>{{ $productoVenta->cantidad}}</td>
                <td>{{ $productoVenta->productoId}}</td>
                <td>{{ $productoVenta->tipo}}</td>
                @php
                $subTotal = $productoVenta->total

            @endphp
            
            <td>
                @foreach ($productoVentas as $valor )
                    @php
                      $total = $subTotal * $valor->cantidad   
                    @endphp
                                          
                @endforeach 
                {{$total }}
                    
            </td>

                <td>
                    <a href="{{ route('productoVentas.show', $productoVenta->id) }}" class="btn btn-info">Detalles</a>
                    <form action="{{ route('productoVentas.destroy', $productoVenta->id) }}" method="post" class="d-inline-flex">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('¿Confirma la eliminación del producto {{ $productoVenta->codigo}}?')">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
