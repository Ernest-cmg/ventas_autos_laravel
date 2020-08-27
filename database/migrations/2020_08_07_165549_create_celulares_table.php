<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCelularesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //para agregar una migracion y una tabla
    // php artisan make:migration create_celulares_table --create="telefonos"
    // php artisan migrate

    //para modificar una tabla
    // php artisan make:migration agregar_campo --table="telefonos"
   // php artisan migrate

    public function up()
    {
        Schema::create('telefonos', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('modelo');
            $table->string('procesador');
            $table->string('almacenamiento');
            $table->string('memoria_ram');
            $table->string('foto');
            $table->string('otros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telefonos');
    }
}
