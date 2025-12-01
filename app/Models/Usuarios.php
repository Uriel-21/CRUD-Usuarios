<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    // Nombre de la tabla
    protected $table = 'usuarios';

    // Columnas de la tabla
    protected $fillable = [
        'nombre',
        'apellidos',
        'correo',
        'telefono',
        'CURP',
        'username'
    ];
}
