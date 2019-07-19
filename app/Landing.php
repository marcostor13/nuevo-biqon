<?php

namespace Biqon;

use Illuminate\Database\Eloquent\Model;

class Landing extends Model
{
    protected $fillable = [
        'nombre', 'url', 'cliente',
    ];
    protected $table = 'landings';
    protected $primaryKey = 'id';

}
