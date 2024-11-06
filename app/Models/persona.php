<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    protected $table = "personas_tabla";
    protected $fillable = [
        'nombre_completo',
        'telefono',
        'correo_electronico'
    ];
}
