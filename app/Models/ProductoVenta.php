<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoVenta extends Model
{
    protected $fillable=['fecha',
                        'codigo',
                        'productoId',
                        'total',
                        'tipo',
                        'cantidad',
                    ];
}
