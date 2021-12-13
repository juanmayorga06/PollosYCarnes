@extends('layouts.layout')

@section('titulo', 'crear nuevo producto ventas')

@section('content')
<h1 class="text-center my-5">Crear Producto Venta</h1>
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
<form action="{{ route('productoVentas.store') }}"  style="margin-bottom: 20px">
        @csrf
        @method('post')
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="datetime" class="form-control" name="fecha" id="fecha" value="{{ old('fecha', date('Y-m-d H:i')) }}">
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="000" value="{{ old('cantidad') }}">
        </div>
        <div class="mb-3">
            <label for="productoId">Producto</label>
            <select name="productoId" id="productoId" class="form-select">
                <option value="" selected>Seleccione...</option>
                @foreach ($productos as $producto )
                <option value="{{ $producto->nombre }}"
                    @if (old('productoId') == $producto->nombre)
                        selected
                    @endif>
                    {{ $producto->nombre }}</option>

                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tipo">Marca</label>
            <select name="tipo" id="tipo" class="form-select">
                <option value="" selected>Seleccione...</option>
                @foreach ($productos as $producto )
                <option value="{{ $producto->tipo }}"
                    @if (old('productoId') == $producto->tipo)
                        selected
                    @endif>
                    {{ $producto->tipo }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">Precio</label>
            <input type="number" class="form-control" name="total" id="total" placeholder="000" value="{{ old('cantidad') }}">
        </div>
        <button type="submit" class="btn btn-primary" style="margin-bottom: 20px">Facturar</button>

    </form>



@endsection

<script type="text/javascript">

    function buscar_datos(){
        productoId = $("#productoId").val();

        var productoVentas = {
            "buscar": "1"
            "productoId": productoId
        };
        $.ajax( {
            data: productVentas,
            dataType: 'json',
            url: 'codigo_php.php',
            type: 'post',
            beforeSend: function() {
                alert("enviado");
            }.
            error: function(){
                alert("Error");
            },
            complete: function(){
                alert("!Listo");
            },
            success: function(valores){
                alert(valores.precio);
            }
        })
    }
</script>
