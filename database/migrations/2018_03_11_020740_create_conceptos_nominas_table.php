<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConceptosNominasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conceptos_nominas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_concepto',50);
            $table->string('descripcion',255);
            $table->float('porcentaje');
            $table->float('valor_fijo');
            $table->float('valor_variable',255);

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
        Schema::dropIfExists('conceptos_nominas');
    }
}
