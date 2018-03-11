<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripulantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tripulantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('horas_vuelo');
            $table->enum('tipo_tripulante', ['piloto', 'primer oficial', 'sobrecargo']);
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
        Schema::dropIfExists('tripulantes');
    }
}
