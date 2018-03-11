<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSintesisCurricularCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sintesis_curricular_cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sintesis_curricular_id')->unsigned();
            $table->integer('curso_id')->unsigned();

            $table->foreign('sintesis_curricular_id')->references('id')->on('sintesis_curricular')->onDelete('cascade');
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
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
        Schema::dropIfExists('sintesis_curricular_cursos');
    }
}
