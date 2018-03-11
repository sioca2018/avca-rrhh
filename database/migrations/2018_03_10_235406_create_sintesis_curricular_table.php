<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSintesisCurricularTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sintesis_curricular', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('descripcion');
            $table->date('fecha');
            $table->enum('nivel_academico', ['bachiller', 'tsu', 'licdo', 'licda', 'ing', 'm.sc', 'dr', 'dra']);
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
        Schema::dropIfExists('sintesis_curricular');
    }
}
