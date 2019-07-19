<?php

namespace Biqon;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $fillable = [
        'landing_id', 'json_datos', 'rut', 'telefono', 'nombre_cliente', 
    ];
    protected $table = 'formularios';
    protected $primaryKey = 'id';
}
