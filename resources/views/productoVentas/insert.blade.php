@extends('layouts.layout')

@section('titulo', 'crear nuevo producto venta')

@section('content')
<h1 class="text-center my-5">Crear Producto Venta</h1>
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
<form action="{{ route('productoVentas.store') }}" method="post">
        @csrf
        @method('post')

        <div class="mb-3">
            <label for="productoId">Producto</label>
            <select name="productoId" id="productoId" class="form-select">
                <option value="" selected>Seleccione...</option>
                @foreach ($productos as $producto )
                <option value="{{ $producto->id }}"
                    @if (old('productoId') == $producto->id)
                        selected
                    @endif>
                    {{ $producto->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
