@extends('layouts.layout')

@section('titulo', 'crear nuevo venta')

@section('content')
<h1 class="text-center my-5">Crear nueva venta</h1>
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
<form action="{{ route('ventas.store') }}" method="post" style="margin-bottom: 20px">
    @csrf
    @method('post')
    <div class="mb-3">
        <label for="fecha" class="form-label">Fecha</label>
        <input type="date" class="form-control" name="fecha" id="feca" placeholder="Fecha" value="{{ old('fecha') }}">
    </div>
    <div class="mb-3">
        <label for="nombreDelProducto" class="form-label">Nombre del producto</label>
        <input type="text" class="form-control" name="nombreDelProducto" id="nombreDelProducto" placeholder="Nombre del producto" value="{{ old('nombreDelProducto') }}">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="double" class="form-control" name="precio" id="precio" placeholder="$000" value="{{ old('precio') }}">
    </div>
    <div class="mb-3">
        <label for="tipo" class="form-label">Tipo</label>
        <input type="text" class="form-control" name="tipo" id="tipo" placeholder="tipo de producto" value="{{ old('tipo') }}">
    </div>
    <div class="mb-3">
        <label for="cantidad" class="form-label">Cantidad</label>
        <input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="Cantidad del producto" value="{{ old('cantidad') }}">
    </div>
    <div class="mb-3">
        <label for="total" class="form-label">Total</label>
        <input type="number" class="form-control" name="total" id="total" placeholder="$000" value="{{ old('total') }}">
    </div>
    <div class="mb-3">
        <label for="totalIva" class="form-label">Total con Iva</label>
        <input type="number" class="form-control" name="totalIva" id="totalIva" placeholder="$000" value="{{ old('totalIva') }}">
    </div>
    <button type="submit" class="btn btn-primary" style="margin-bottom: 20px">Guardar</button>
</form>
@endsection
