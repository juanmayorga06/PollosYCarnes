<!-- //importar layout -->
@extends('layouts.layout')
<!-- donde haya algo llamado titulo se llamará proveedores -->
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
    <a href="{{ route('productos.create') }}" class="btn btn-primary my-3 float-end">Crear Proveedor</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>telefono</th>
                <th>Email</th>
                <th>productos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proveedores as $proveedor)
            <tr>
                <td>{{ $producto->nombre}}</td>
                <td>{{ $producto->telefono}}</td>
                <td>{{ $producto->email}}</td>
                <td>{{ $producto->productos}}</td>
                <td>
                    <a href="" class="btn btn-info">Detalles</a>
                    <a href="" class="btn btn-warning">Editar</a>
                    <form action="" method="post" class="d-inline-flex">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('¿Confirma la eliminación del producto {{ $producto->nombre}}?')">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
