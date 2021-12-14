@extends('layouts.app')

@section('content')

    <div class="col-auto fw-light p-5" id="hola" style="text-align:center">
        <!-- <div class="titulo-principal">Pollos y Carne</div> -->
        <div class="polaroidLogo" >
                <img src="{{ asset('images/logo.jpg') }}" alt="" class="" style="width: 1100px">
        </div>
        <div class="row" style="padding-top: 20px">
            <div class="polaroid" style="width: 124px">
                <a href="{{ route('ventas.index') }}">
                <img src="{{ asset('images/ventas.png') }}" alt="ventas" class="ancho">
                <p class="img-text"></p>
                <div class="texto">
                    VENTAS
                </div>
                </a>
            </div>
            <div class="polaroid" style="width: 124px">
                <a href="{{ route('productos.index') }}">
                <img src="{{ asset('images/productos.png') }}" alt="ventas" class="ancho">
                <p class="img-text"></p>
                <div class="texto" >
                    PRODUCTOS
                </div>
                </a>
            </div>

            <div class="polaroid" style="width: 124px">
                <a href="{{ route('productoVentas.create') }}">
                <img src="{{ asset('images/factura.png') }}" alt="ventas" class="ancho">
                <p class="img-text"></p>
                <div class="texto" >
                    FACTURA
                </div>
                </a>
            </div>

        </div>
    </div>

@endsection
