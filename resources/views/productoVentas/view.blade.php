@extends('layouts.layout')

@section('titulo', 'Detalle del Producto Venta')

@section('content')
    <h1 class="text-center pt-5 pb-3">Detalle del producto Venta</h1>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Fecha</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $productoVentas->fecha }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Cantidad</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $productoVentas->cantidad }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Producto</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $productoVentas->productoId }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Marca</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $productoVentas->tipo }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Total</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $productoVentas->total }}</p>
        </div>
    </div>


    <a href="{{ route('productoVentas.index') }}" class="btn btn-primary mt-3">Volver</a>

@endsection
