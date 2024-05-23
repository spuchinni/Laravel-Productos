<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\MasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = [
        'sku', 'producto', 'descripcion', 'imagen', 'precio'
    ];

    public function getPrecioAttribute($value)
    {
        return '$' . number_format($value, 2);
    }
}
