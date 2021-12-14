@extends('layouts.layout')

@section('titulo', 'Ventas')

@section('content')
    <h1 class="text-center pt-5 pb-3">Ventas</h1>

    @if ($mensaje = Session::get('exito'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p>{{ $mensaje }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <a href="{{ route('ventas.create') }}" class="btn btn-outline-dark mb-3 float-center">Crear Venta</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>Fecha</th>
                <th>cédula</th>
                <th>nombre</th>
                <th>Opciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($ventas as $venta)
            <tr>
                <td>{{ $venta->id}}</td>
                <td>{{ $venta->fecha}}</td>
                <td>{{ $venta->cedula}}</td>
                <td>{{ $venta->nombreCliente}}</td>


                <td>
                    <a href="{{ route('ventas.show', $venta->id) }}" class="btn btn-info">Detalles</a>
                    <form action="{{ route('ventas.destroy', $venta->id) }}" method="post" class="d-inline-flex">
                        @csrf
                        {{-- @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                        onclick="return confirm('¿Confirma la eliminacion del producto  {{ $venta->nombre }}?')">Eliminar</button> --}}
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>


@endsection
