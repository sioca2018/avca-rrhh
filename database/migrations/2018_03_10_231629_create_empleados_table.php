<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('condicion_laboral', ['fijo', 'contratado', 'inactivo']);
            $table->bigInteger('cuenta_bancaria');
            $table->enum('estado_civil', ['soltero', 'casado', 'divorciado', 'viudo', 'concubino']);
            $table->string('grado_licencia');
            $table->date('fecha_ingreso');
            $table->string('lugar_nacimiento');
            $table->integer('num_hijos');
            $table->string('rif');
            $table->timestamps();
            $table->enum('estatus', ['activo', 'inactivo']);
            $table->mediumText('motivo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
