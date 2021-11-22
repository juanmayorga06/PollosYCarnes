<!-- //importar layout -->
@extends('layouts.layout')
<!-- donde haya algo llamado titulo se llamará ventas -->
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
    <a href="{{ route('ventas.create') }}" class="btn btn-primary my-3 float-end">Crear venta</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>fecha</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Precio</th>
                <th>total</th>
                <th>totalIva</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $venta)
            <tr>
                <td>{{ $venta->fecha}}</td>
                <td>{{ $venta->nombreDelProducto}}</td>
                <td>{{ $venta->tipo}}</td>
                <td>{{ $venta->precio}}</td>
                <td>{{ $venta->total}}</td>
                <td>{{ $venta->totalIva}}</td>
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
