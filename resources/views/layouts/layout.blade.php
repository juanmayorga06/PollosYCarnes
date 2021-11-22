<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>@yield('titulo')</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropProductos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropProductos">
                            <li><a class="dropdown-item" href="{{ route('productos.index') }}">Lista</a></li>
                            <li><a class="dropdown-item" href="{{ route('productos.create') }}">Crear nuevo</a></li>
                        </ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropVentas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Ventas
                        </a>
                     <ul class="dropdown-menu" aria-labelledby="dropVentas">
                        <li><a class="dropdown-item" href="{{ route('ventas.index') }}">Listar</a></li>
                        <li><a class="dropdown-item" href="{{  route('ventas.create') }}">Crear nuevo</a></li>
                    </ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropVentas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Empleado
                        </a>
                     <ul class="dropdown-menu" aria-labelledby="dropVentas">
                        <li><a class="dropdown-item" href="{{ route('empleado.index') }}">Listar</a></li>
                        <li><a class="dropdown-item" href="{{ route('empleado.create') }}">Crear nuevo</a></li>
                    </ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropVentas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Cliente
                        </a>
                     <ul class="dropdown-menu" aria-labelledby="dropVentas">
                        <li><a class="dropdown-item" href="{{ route('clientes.index') }}">Listar</a></li>
                        <li><a class="dropdown-item" href="{{ route('clientes.create') }}">Crear nuevo</a></li>
                    </ul>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="buscar" name="buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>

            </div>
        </div>
    </nav>


    <div class="container ">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
