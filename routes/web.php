<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProductosController;
use App\http\Controllers\EmpleadoController;
use App\http\Controllers\ClienteController;
use App\http\Controllers\VentaController;
use App\http\Controllers\ProductoVentaController;
use App\http\Controllers\ProveedoresController;
use App\http\Controllers\PanelController;
use App\http\Controllers\HomeController;

Route::get('/panelAdministrador', function () {
    return view('panelAdministrador');
})->name('panel');

Route::resource('productos', ProductosController::class);
Route::resource('empleado', EmpleadoController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('ventas', VentaController::class);
Route::resource('productoVentas', ProductoVentaController::class);
Route::resource('proveedores', ProveedoresController::class);


// Route::get('/productos', function(){
//     return view('productos.index');
// });

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

