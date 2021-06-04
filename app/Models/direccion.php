<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class direccion extends Model
{
    use HasFactory;

    protected $fillable = [
        'pais', 'estado', 'municipio', 'codigo_potal',  'colonia', 'calle', 'numero'
    ];  
}
