@extends('layouts.layout')

@section('titulo', 'crear nuevo producto')

@section('content')
<h1 class="text-center my-5">Crear nuevo proveedor</h1>
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
<form action="{{ route('proveedores.store') }}" method="post">
    @csrf
    @method('post')
    <div class="mb-3">
        <label for="nit" class="form-label">Nit del proveedor</label>
        <input type="text" class="form-control" name="nit" id="nit" placeholder="Nit del proveedor" value="{{ old('nit') }}">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del proveedor</label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
    </div>
    <div class="mb-3">
        <label for="direccion" class="form-label">Dirección</label>
        <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion del proveedor" value="{{ old('direccion') }}">
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono de proveedor" maxlength="10" value="{{ old('telefono') }}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="email@email.com" value="{{ old('email') }}">
    </div>
    <div class="mb-3">
        <label for="marca" class="form-label">Marca</label>
        <input type="text" class="form-control" name="marca" id="marca" placeholder="Marca" value="{{ old('marca') }}">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
