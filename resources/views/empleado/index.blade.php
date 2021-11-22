<!-- //importar layout -->
@extends('layouts.layout')
<!-- donde haya algo llamado titulo se llamará productos -->
@section('titulo', 'Empleado')
<!-- //Aquí llama a yeald y pone todo el codigo ahí -->
@section('content')
    <h1 class="text-center pt-5 pb-3">Empleado</h1>
    @if ($mensaje = Session::get('exito'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p>{{ $mensaje }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>

    </div>
@endif
    <a href="{{ route('empleado.create') }}" class="btn btn-primary my-3 float-end">Crear Empleado</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleado as $empleado)
            <tr>
                <td>{{ $empleado->cedula}}</td>
                <td>{{ $empleado->nombre}}</td>
                <td>{{ $empleado->telefono}}</td>
                <td>{{ $empleado->direccion}}</td>
                <td>{{ $empleado->email}}</td>
                <td>
                    <a href="{{ route('empleado.show', $empleado->id) }}" class="btn btn-info">Detalles</a>
                    <a href="{{ route('empleado.edit', $empleado->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('empleado.destroy', $empleado->id) }}" method="post" class="d-inline-flex">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('¿Confirma la eliminación del empleado {{ $empleado->nombre}}?')">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection