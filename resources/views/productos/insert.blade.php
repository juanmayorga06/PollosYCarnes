@extends('layouts.layout')

@section('titulo', 'crear nuevo producto')

@section('content')
<h1 class="text-center my-5">Crear nuevo producto</h1>
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
<form action="{{ route('productos.store') }}" method="post">
    @csrf
    @method('post')
    <div class="mb-3">
        <label for="codigo" class="form-label">Codigo del producto</label>
        <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Codigo del producto" value="{{ old('codigo') }}">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del producto</label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripcion</label>
        <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="descripcion del producto" value="{{ old('descripcion') }}">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" class="form-control" name="precio" id="precio" placeholder="000" value="{{ old('precio') }}">
    </div>
    <div class="mb-3">
        <label for="cantidad" class="form-label">Cantidad</label>
        <input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="000" value="{{ old('cantidad') }}">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
