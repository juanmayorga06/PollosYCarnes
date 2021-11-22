@extends('layouts.layout')

@section('titulo', 'Detalle de la venta')

@section('content')
    <h1 class="text-center pt-5 pb-3">Detalle de la venta</h1>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Fecha</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $venta->fecha }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Nombre del producto</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $venta->nombreDelProducto }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Precio</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $venta->precio }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Tipo</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $venta->tipo }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Cantidad</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $venta->cantidad }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Total</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $venta->total }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Total con Iva</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $venta->totalIva }}</p>
        </div>
    </div>

    <a href="{{ route('productos.index') }}" class="btn btn-primary mt-3">Volver</a>

@endsection
