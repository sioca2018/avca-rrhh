<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpedientesAmonestacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expedientes_amonestaciones', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('expediente_id')->unsigned();
            $table->integer('amonestacion_id')->unsigned();

            $table->foreign('expediente_id')->references('id')->on('expedientes')->onDelete('cascade');
            $table->foreign('amonestacion_id')->references('id')->on('amonestaciones')->onDelete('cascade');
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
        Schema::dropIfExists('expedientes_amonestaciones');
    }
}
