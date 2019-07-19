<?php

namespace Biqon;

use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    protected $fillable = [
        'landing_id', 'rut', 'telefono', 'nombre_cliente', 'json_datos', 
    ];
    protected $table = 'visitas';
    protected $primaryKey = 'id';
}
