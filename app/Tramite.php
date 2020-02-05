<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    protected $table = 'tramite';
    protected $fillable = [
        'cedula', 'fecha_nacimiento', 'nombre', 'apellido',
        'direccion', 'telefono', 'departamento', 'municipio',
        'email', 'imagen',
    ];
}
