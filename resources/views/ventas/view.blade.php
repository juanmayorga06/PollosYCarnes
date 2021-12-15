@extends('layouts.layout')

@section('titulo', 'Ventas')
@section('content')

    <div class="card">

    </div>
    <h1 class="text-center pt-5 pb-3">Detalles de la Venta</h1>
    

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Fecha</th>
                <th scope="col">Cédula</th>
                <th scope="col">Nombre Cliente</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>{{ $ventas->id }}</th>
                <td>{{ $ventas->fecha }}</td>
                <td>{{ $ventas->cedula }}</td>
                <td>{{ $ventas->nombreCliente }}</td>
            </tr>

        </tbody>
    </table>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar Producto
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('productoVentas.store') }}" method="post">
                        @method('post')
                        @csrf
                        <div class="mb-3">
                            <div class="col text-start">
                                <input class="form-control col-md-4 inputgray" type="text" name="idVenta" id="idVenta"
                                    placeholder="" value="{{ $ventas->id }}">
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Productos</label>
                                <div class="col-md-4 selectContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                        <select name="productoId" class="form-control selectpicker">
                                            <option value="">Seleccione...</option>
                                            @foreach ($productos as $producto)
                                                <option value="{{ $producto->id }}" @if (old('id') == $producto->id)
                                                    selected
                                            @endif>
                                            {{ $producto->nombre }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <label for="cantidad" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" id="cantidad" name="cantidad">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <table class=" table">
        <thead>
            <tr>
                <th scope="col">Nombre Producto</th>
                <th scope="col">Valor Unidad</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productoVentas as $productoVenta)
                <tr>
                    <td>{{ $productoVenta->nombre }}</td>
                    <td>{{ $productoVenta->precio}}</td>
                    <td>{{ $productoVenta->cantidad }}</td>
                    @php
                        $subtotal = $productoVenta ->precio * $productoVenta->cantidad
                    @endphp
                    <td> {{$subtotal}} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
 @php
    $total = 0

 @endphp

<div><h2>TOTAL:</h2>
    @foreach ($productoVentas as $productoVenta)
        @php

            $total += $productoVenta->cantidad * $productoVenta->precio;
        @endphp
    @endforeach

    <h4>$ {{$total}}</h4>
</div>
<a href="{{ route('ventas.index') }}" class="btn btn-primary mt-3 mb-3 ">Volver</a>

@endsection
