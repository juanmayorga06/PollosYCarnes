<!-- //importar layout -->
@extends('layouts.layout')
<!-- donde haya algo llamado titulo se llamará productos -->
@section('titulo', 'Clientes')
<!-- //Aquí llama a yeald y pone todo el codigo ahí -->
@section('content')
    <h1 class="text-center pt-5 pb-3">Clientes</h1>
    @if ($mensaje = Session::get('exito'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p>{{ $mensaje }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>

    </div>
@endif
    <a href="{{ route('clientes.create') }}" class="btn btn-primary my-3 float-end">Crear Producto</a>
    <table class="table table-striped table-hover">
        <caption>List of client</caption>
        <thead>
            <tr>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->cedula}}</td>
                <td>{{ $cliente->nombre}}</td>
                <td>{{ $cliente->telefono}}</td>
                <td>{{ $cliente->direccion}}</td>
                <td>{{ $cliente->email}}</td>
                <td>
                    <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-info">Detalles</a>
                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="post" class="d-inline-flex">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('¿Confirma la eliminación del producto {{ $cliente->nombre}}?')">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection