@extends('layouts.layout')

@section('titulo', 'Ventas')

@section('content')
<h1 class="text-center my-5">Editar ventas</h1>
<form action="{{ route('ventas.update', $venta->id) }}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="fecha" class="form-label">Fecha</label>
        <input type="date" class="form-control" name="fecha" id="fecha" value="{{ $venta->fecha }}">
    </div>
    <div class="mb-3">
        <label for="nombreDelProducto" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombreDelProducto" id="nombreDelProducto" value="{{ $venta->nombreDelProducto }}">
    </div>
    <div class="mb-3">
        <label for="tipo" class="form-label">Tipo</label>
        <input type="text" class="form-control" name="tipo" id="tipo" value="{{ $venta->tipo }}">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" class="form-control" name="precio" id="precio" value="{{ $venta->precio }}">
    </div>
    <div class="mb-3">
        <label for="cantidad" class="form-label">Cantidad</label>
        <input type="number" class="form-control" name="cantidad" id="cantidad" value="{{ $venta->cantidad }}">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
