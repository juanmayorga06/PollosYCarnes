@extends('layouts.layout')

@section('titulo', 'Editar Empleado')

@section('content')
<h1 class="text-center my-5">Editar empleado</h1>
<form action="{{ route('empleado.update', $empleado->id) }}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="cedula" class="form-label">Cedula</label>
        <input type="text" class="form-control" name="cedula" id="cedula" maxlength="10" value="{{ $empleado->cedula }}">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $empleado->nombre }}">
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="text" class="form-control" name="telefono" id="telefono" maxlength="10" value="{{ $empleado->telefono }}">
    </div>
    <div class="mb-3">
        <label for="direccion" class="form-label">Direccion</label>
        <input type="text" class="form-control" name="direccion" id="direccion" value="{{ $empleado->direccion }}">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection