@extends('layouts.layout')

@section('titulo', 'Editar Proveedor')

@section('content')
<h1 class="text-center my-5">Editar proveedor</h1>
<form action="{{ route('proveedores.update', $proveedor->id) }}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="nit" class="form-label">Nit</label>
        <input type="number" class="form-control" name="nit" id="nit" value="{{ $proveedor->nit }}">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $proveedor->nombre }}">
    </div>
    <div class="mb-3">
        <label for="direccion" class="form-label">Direccion</label>
        <input type="text" class="form-control" name="direccion" id="direccion" value="{{ $proveedor->direccion }}">
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="text" class="form-control" name="telefono" id="telefono" value="{{ $proveedor->telefono }}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" id="email" value="{{ $proveedor->email }}">
    </div>
    <div class="mb-3">
        <label for="marca" class="form-label">Marca</label>
        <input type="text" class="form-control" name="marca" id="marca" value="{{ $proveedor->marca }}">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
