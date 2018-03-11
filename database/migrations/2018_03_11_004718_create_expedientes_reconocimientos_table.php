<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpedientesReconocimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expedientes_reconocimientos', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('expediente_id')->unsigned();
            $table->integer('reconocimiento_id')->unsigned();

            $table->foreign('expediente_id')->references('id')->on('expedientes')->onDelete('cascade');
            $table->foreign('reconocimiento_id')->references('id')->on('reconocimientos')->onDelete('cascade');
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
        Schema::dropIfExists('expedientes_reconocimientos');
    }
}
