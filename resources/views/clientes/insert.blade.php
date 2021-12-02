@extends('layouts.layout')

@section('titulo', 'crear nuevo cliente')

@section('content')
<h1 class="text-center my-5">Crear nuevo cliente</h1>
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
<form action="{{ route('clientes.store') }}" method="post" style="margin-bottom: 20px">
    @csrf
    @method('post')
    <div class="mb-3">
        <label for="cedula" class="form-label">Cedula</label>
        <input type="text" class="form-control" name="cedula" id="cedula" placeholder="11111111" maxlength="10" value="{{ old('cedula') }}">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del Cliente</label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="3000000000" maxlength="10" value="{{ old('telefono') }}">
    </div>
    <div class="mb-3">
        <label for="direccion" class="form-label">Direccion</label>
        <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion del Cliente" value="{{ old('direccion') }}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="email@email.com" value="{{ old('email') }}">
    </div>
    <button type="submit" class="btn btn-primary" style="margin-bottom: 20px">Guardar</button>
</form>
@endsection