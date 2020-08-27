<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accesorios extends Model
{
    protected $fillable= [
        "nombre",
        "presio",
        "caracteristicas",
        "fotos"
    ];

}
