@extends('layouts.layout')

@section('titulo', 'Detalle del empleado')

@section('content')
    <h1 class="text-center pt-5 pb-3">Detalle del empleado</h1>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Cedula</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $empleado->cedula }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Nombre</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $empleado->nombre }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Telefono</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $empleado->telefono }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Direccion</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $empleado->direccion }}</p>
        </div>
    </div>
    <a href="{{ route('empleado.index') }}" class="btn btn-primary mt-3">Volver</a>

@endsection
