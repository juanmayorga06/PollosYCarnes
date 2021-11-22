<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>Pollos y Carnes</title>
</head>
<body class="m-0 vh-100 row justify-content-center align-items-center">

    <div class="col-auto fw-light p-5">
        <div class="titulo-principal">Pollos y Carne</div>
        <div class="row">
            <div class="polaroid">
                <a href="{{ route('ventas.index') }}">
                <img src="{{ asset('images/ventas.jpg') }}" alt="ventas" class="ancho">
                <p class="img-text"></p>
                <div class="texto">
                    VENTAS
                </div>
                </a>

            </div>
            <div class="polaroid">
                <a href="{{ route('productos.index') }}">
                <img src="{{ asset('images/productos.jpg') }}" alt="ventas" class="ancho">
                <p class="img-text"></p>
                <div class="texto" style ="padding-top: 20px">
                    PRODUCTOS
                </div>
                </a>
            </div>

            <div class="polaroid">
                <a href="{{ route('productoVentas.create') }}">
                <img src="{{ asset('images/factura.jpg') }}" alt="ventas" class="ancho">
                <p class="img-text"></p>
                <div class="texto" style ="padding-top: 20px">
                    FACTURA
                </div>
                </a>
            </div>
       
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
