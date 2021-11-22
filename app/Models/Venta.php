<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model

{
    protected $fillable=['fecha', 'nombreDelProducto', 
    'tipo', 'precio', 'cantidad', 'total', 'totalIva'];
}
