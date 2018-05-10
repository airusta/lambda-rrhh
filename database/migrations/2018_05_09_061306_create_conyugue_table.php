<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConyugueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conyugue', function (Blueprint $table) {
            $table->increments('id_conyugue');
            $table->string('primer_nombre',50);
            $table->string('segundo_nombre',50)->nullable();
            $table->string('tercer_nombre',50)->nullable();
            $table->string('primer_apellido',50);
            $table->string('segundo_apellido',50)->nullable();
            $table->string('tercer_apellido',50)->nullable();
            $table->unsignedInteger('id_empleado');
            $table->string('documento',50)->nullable();
            $table->string('complemento1',10)->nullable();
            $table->string('complemento2',10)->nullable();
            $table->string('cat_tipo_documento',10);
            $table->date('fecha_nacimiento')->nullable();
            $table->string('cat_genero');
            $table->string('celular')->nullable();
            $table->string('telefono')->nullable();
            $table->string('direccion',300)->nullable();
            $table->string('cat_nacionalidad',10)->nullable();
            $table->integer('usuario_ini');
            $table->integer('usuario_mod')->nullable();
            $table->integer('usuario_del')->nullable();
            $table->dateTime('fch_ini');
            $table->dateTime('fch_mod')->nullable();
            $table->dateTime('fch_del')->nullable();
            $table->string('host_ini',50);
            $table->string('host_mod',50)->nullable();
            $table->string('host_del',50)->nullable();
            $table->foreign('id_empleado')->references('id_empleado')->on('empleado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conyugue');
    }
}
