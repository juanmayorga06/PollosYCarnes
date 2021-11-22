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
        <label for="productoId" class="form-label">Producto</label>
        <select name="productoId" id="productoId" class="form-control">
            @foreach ($productos as $producto)
                <option value="{{ $producto->id }}"
                    @if ($desarrollador->productoId == $prodcuto->id)
                        selected
                    @endif
                    >
                    {{ $producto->precio  }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
