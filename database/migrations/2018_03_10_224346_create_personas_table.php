<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cedula')->unique();
            $table->string('rif');
            $table->string('primer_nombre', 50);
            $table->string('segundo_nombre', 50);
            $table->string('primer_apellido', 50);
            $table->string('segundo_apellido', 50);
            $table->string('email')->unique();
            $table->string('codigo_postal', 12);
            $table->string('direccion', 255);
            $table->boolean('discapacidad');
            $table->date('fecha_nacimiento');
            $table->enum('genero', ['femenino', 'masculino']);
            $table->string('nacionalidad', 20);
            $table->string('telefono_fijo', 20);
            $table->string('telefono_movil', 20);
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
        Schema::dropIfExists('personas');        
    }
}
