@extends('layouts.layout')

@section('titulo', 'Detalle del Producto')

@section('content')
    <h1 class="text-center pt-5 pb-3">Detalle del producto</h1>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Codigo</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $producto->codigo }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Nombre</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $producto->nombre }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Descripcion</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $producto->descripcion }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Precio</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $producto->precio }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Cantidad</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $producto->cantidad }}</p>
        </div>
    </div>

    <a href="{{ route('productos.index') }}" class="btn btn-primary mt-3">Volver</a>

@endsection
