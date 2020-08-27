<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


//php artisan make:model Telefono --migration
// sentencia para crear una el modelo y el archivo migration correspondiene

class Telefono extends Model{

   protected $fillable= [
       "marca",
       "modelo",
       "procesador",
       "almacenamiento",
       "memoria_ram",
       "foto",
       "otros",
       "presio"

   ];



}
