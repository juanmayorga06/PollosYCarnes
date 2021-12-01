@extends('layouts.layout')

@section('titulo', 'crear nuevo empleado')

@section('content')
<h1 class="text-center my-5">Crear nuevo empleado</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <div class="header"><strong>Ups...</strong> algo salio mal</div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('empleado.store') }}" method="post" style="margin-bottom: 20px">
    @csrf
    @method('post')
    <div class="mb-3">
        <label for="cedula" class="form-label">Cedula</label>
        <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cedula del empleado" maxlength="10" value="{{ old('cedula') }}">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del empleado</label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del empleado" value="{{ old('nombre') }}">
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono del empleado" maxlength="10" value="{{ old('telefono') }}">
    </div>
    <div class="mb-3">
        <label for="direccion" class="form-label">Dirección</label>
        <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion del empleado" value="{{ old('direccion') }}">
    </div>
    <button type="submit" class="btn btn-primary" style="margin-bottom: 20px">Guardar</button>
</form>
@endsection