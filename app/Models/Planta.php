<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo_planta', 'nombre_planta', 'precio','altura','descripcion'
    ];
}
