@extends('layouts.layout')

@section('titulo', 'Detalle del Proveedor')

@section('content')
    <h1 class="text-center pt-5 pb-3">Detalle del proveedor</h1>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Nit</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $proveedor->nit }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Nombre</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $proveedor->nombre }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Direccion</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $proveedor->direccion }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Telefono</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $proveedor->telefono }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Email</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $proveedor->email }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Marca</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $proveedor->marca }}</p>
        </div>
    </div>

    <a href="{{ route('proveedores.index') }}" class="btn btn-primary mt-3">Volver</a>

@endsection
