<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadoClasificacionLaboralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado_clasificacion_laboral', function (Blueprint $table) {
            $table->increments('id_empleado_clasificacion_laboral');
            $table->unsignedInteger('id_empleado');
            $table->unsignedInteger('id_clasificacion_laboral');
            $table->integer('usuario_ini');
            $table->integer('usuario_mod')->nullable();
            $table->integer('usuario_del')->nullable();
            $table->dateTime('fch_ini');
            $table->dateTime('fch_mod')->nullable();
            $table->dateTime('fch_del')->nullable();
            $table->string('host_ini');
            $table->string('host_mod')->nullable();
            $table->string('host_del')->nullable();
            $table->foreign('id_empleado')->references('id_empleado')->on('empleado');
            $table->foreign('id_clasificacion_laboral')->references('id_clasificacion_laboral')->on('clasificacion_laboral');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado_clasificacion_laboral');
    }
}
