<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'material', 'precio', 'cantidad', 'fecha', 'hora'
    ];    

}
