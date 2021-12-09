@extends('layouts.layout')

@section('titulo', 'Editar Producto Venta')

@section('content')
<h1 class="text-center my-5">Editar producto</h1>
<form action="{{ route('productoVentas.update', $productoVenta->id) }}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="cantidad" class="form-label">Cantidad</label>
        <input type="number" class="form-control" name="cantidad" id="cantidad" value="{{ $productoVenta->codigo }}">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $productoVenta->nombre }}">
    </div>
    <div class="mb-3">
        <label for="productoId" class="form-label">Producto</label>
        <select name="productoId" id="productoId" class="form-control">
            @foreach ($productos as $producto)
                <option value="{{ $productoVenta->id }}"
                    @if ($desarrollador->productoId == $productoVenta->id)
                        selected
                    @endif
                    >
                    {{ $productoVenta->precio  }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
