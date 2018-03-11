<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAspirantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspirantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cedula_aspirante')->unique();
            $table->string('primer_apellido',50);
            $table->string('segundo_apellido',50);
            $table->string('primer_nombre',50);
            $table->string('segundo_nombre',50);
            $table->string('email',20)->unique();
            $table->enum('nivel_academico', ['bachiller', 'tsu', 'licdo', 'licda', 'ing', 'm.sc', 'dr', 'dra']);
            $table->string('curriculum');
            $table->boolean('estatus');
            
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
        Schema::dropIfExists('aspirantes');
    }
}
