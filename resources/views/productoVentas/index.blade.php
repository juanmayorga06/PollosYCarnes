@extends('layouts.layout')

@section('titulo', 'Ventas')

@section('content')
    <h1 class="text-center pt-5 pb-3">Factura</h1>

    @if ($mensaje = Session::get('exito'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p>{{ $mensaje }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <a href="{{ route('productoVentas.create') }}" class="btn btn-outline-dark mb-3 float-center">Facturar</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>idVenta</th>
                <th>Producto</th>
                <th>cantidad</th>
                <th>subTotal</th>

            </tr>

        </thead>
        <tbody>
            <tr>
                @foreach ($productoVentas as $productoVenta )

                    <td>{{ $productoVenta->idVenta}}</td>
                    <td>{{ $productoVenta->nombre}}</td>
                    <td>{{ $productoVenta->cantidad}}</td>
                    <td>{{ $productoVenta->subTotal}}</td>
                   
                @endforeach
            </tr>

        </tbody>
    </table>


@endsection
