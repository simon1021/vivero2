<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vivero extends Model
{
    use HasFactory;

    protected $fillable = [
        'direccion',  'correo', 'telefono', 'propietario'
    ];    

}
