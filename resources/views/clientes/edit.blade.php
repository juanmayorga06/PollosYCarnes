@extends('layouts.layout')

@section('titulo', 'Editar Cliente')

@section('content')
<h1 class="text-center my-5">Editar cliente</h1>
<form action="{{ route('clientes.update', $cliente->id) }}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="cedula" class="form-label">Cedula</label>
        <input type="number" class="form-control" name="cedula" id="cedula" value="{{ $cliente->cedula }}">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $cliente->nombre }}">
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="text" class="form-control" name="telefono" id="telefono" value="{{ $cliente->telefono }}">
    </div>
    <div class="mb-3">
        <label for="direccion" class="form-label">Direccion</label>
        <input type="text" class="form-control" name="direccion" id="direccion" value="{{ $cliente->direccion }}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Correo electronico</label>
        <input type="text" class="form-control" name="email" id="email" value="{{ $cliente->email }}">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
