@extends('layouts.layout')

@section('titulo', 'Detalle del Producto Venta')

@section('content')
    <h1 class="text-center pt-5 pb-3">Detalle del producto Venta</h1>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Codigo</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $productoVenta->codigo }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Cantidad</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $productoVenta->cantidad }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Id de Producto</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $productoVenta->nombre }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Total</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $productoVenta->total }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Tipo</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $productoVenta->tipo }}</p>
        </div>
    </div>

    <a href="{{ route('productoVentas.index') }}" class="btn btn-primary mt-3">Volver</a>

@endsection
