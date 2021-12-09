<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('layouts/app.blade.php') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('js/welcome.js') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <title>Pollos y Carnes</title>
    
</head>
<body id="color" class="m-0 vh-100 row justify-content-center align-items-center welcome"  >
    <div class="polaroidLogo">
        <img src="{{ asset('images/logo.jpg') }}" alt="" class="logoPrincipal" style="width: 1200px" >
    </div>
    <form action="" class="form" >        
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                <div class="container">            
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            <div id="root">
                                @auth
                                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-primary">Home</a>
                            @else
                                <button type="submit" >
                                <a href="{{ route('login') }}" id="btnLogin" class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-primary">Iniciar sesión</a>
                                </button>
                                <br>
                                @if (Route::has('register'))
                                    <button>
                                    <a href="{{ route('register') }}" id="btnRegistrar" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn btn-info">Registrarse</a>
                                    </button>
                                @endif
                            @endauth
                            </div>
                        </div>
                    @endif
                </div>
        </div>
    </form>
    
</body>

</html>
