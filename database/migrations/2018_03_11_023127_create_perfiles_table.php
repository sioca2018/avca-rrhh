<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion',255);
            $table->string('destreza',255);
            $table->string('experiencia',255);
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
        Schema::dropIfExists('perfiles');
    }
}
