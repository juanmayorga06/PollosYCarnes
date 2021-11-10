<!-- //importar layout -->
@extends('layouts.layout')
<!-- donde haya algo llamado titulo se llamará productos -->
@section('titulo', 'Ventas')
<!-- //Aquí llama a yeald y pone todo el codigo ahí -->
@section('content')
    <h1 class="text-center pt-5 pb-3">Ventas</h1>
    @if ($mensaje = Session::get('exito'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p>{{ $mensaje }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>

    </div>
@endif
    <a href="{{ route('productos.create') }}" class="btn btn-primary my-3 float-end">Crear factura</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
            <tr>
                <td>{{ $producto->codigo}}</td>
                <td>{{ $producto->nombre}}</td>
                <td>{{ $producto->descripcion}}</td>
                <td>{{ $producto->precio}}</td>
                <td>{{ $producto->cantidad}}</td>
                <td>
                    <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-info">Detalles</a>
                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('productos.destroy', $producto->id) }}" method="post" class="d-inline-flex">
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
