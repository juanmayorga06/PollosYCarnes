@extends('layouts.layout')

@section('titulo', 'Editar Producto')

@section('content')
<h1 class="text-center my-5">Editar producto</h1>
<form action="{{ route('productos.update', $producto->id) }}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="codigo" class="form-label">Codigo</label>
        <input type="number" class="form-control" name="codigo" id="codigo" value="{{ $producto->codigo }}">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $producto->nombre }}">
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripcion</label>
        <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{ $producto->descripcion }}">
    </div>
    <div class="mb-3">
        <label for="tipo" class="form-label">Tipo</label>
        <input type="text" class="form-control" name="tipo" id="tipo" value="{{ $producto->tipo }}">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" class="form-control" name="precio" id="precio" value="{{ $producto->precio }}">
    </div>
    <div class="mb-3">
        <label for="cantidad" class="form-label">Cantidad</label>
        <input type="number" class="form-control" name="cantidad" id="cantidad" value="{{ $producto->cantidad }}">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
