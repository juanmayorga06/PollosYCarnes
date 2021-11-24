<!-- //importar layout -->
@extends('layouts.layout')
<!-- donde haya algo llamado titulo se llamará productos -->
@section('titulo', 'Proveedores')
<!-- //Aquí llama a yeald y pone todo el codigo ahí -->
@section('content')
    <h1 class="text-center pt-5 pb-3">Proveedores</h1>
    @if ($mensaje = Session::get('exito'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p>{{ $mensaje }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>

    </div>
@endif
    <a href="{{ route('proveedores.create') }}" class="btn btn-primary my-3 float-end">Crear Proveedor</a>
    <table class="table table-striped table-hover">
    <caption>List of users</caption>
        <thead>
            <tr>
                <th>NIT</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>email</th>
                <th>Marca</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proveedores as $proveedor)
            <tr>
                <td>{{ $proveedor->nit}}</td>
                <td>{{ $proveedor->nombre}}</td>
                <td>{{ $proveedor->direccion}}</td>
                <td>{{ $proveedor->telefono}}</td>
                <td>{{ $proveedor->email}}</td>
                <td>{{ $proveedor->marca}}</td>
                <td>
                    <a href="{{ route('proveedores.show', $proveedor->id) }}" class="btn btn-info">Detalles</a>
                    <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="post" class="d-inline-flex">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('¿Confirma la eliminación del proveedor {{ $proveedor->nombre}}?')">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
