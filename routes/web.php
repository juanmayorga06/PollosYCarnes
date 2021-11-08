<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProductosController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('productos', ProductosController::class);

// Route::get('/productos', function(){
//     return view('productos.index');
// });
