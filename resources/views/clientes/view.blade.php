@extends('layouts.layout')

@section('titulo', 'Detalle del Cliente')

@section('content')
    <h1 class="text-center pt-5 pb-3">Detalle del cliente</h1>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Cedula</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $clientes->cedula }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Nombre</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $clientes->nombre }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Telefono</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $clientes->telefono }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Direccion</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $clientes->direccion }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Email</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $clientes->email }}</p>
        </div>
    </div>
    <a href="{{ route('clientes.index') }}" class="btn btn-primary mt-3">Volver</a>

@endsection