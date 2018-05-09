<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevisionDesempenoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revision_desempeno', function (Blueprint $table) {
            $table->increments('id_revision_desempeno');
            $table->unsignedInteger('id_empleado_revisado');
            $table->unsignedInteger('id_empleado_revisor');
            $table->date('fch_revision');
            $table->integer('nota_revision');
            $table->integer('usuario_ini');
            $table->integer('usuario_mod')->nullable();
            $table->integer('usuario_del')->nullable();
            $table->dateTime('fch_ini');
            $table->dateTime('fch_mod')->nullable();
            $table->dateTime('fch_del')->nullable();
            $table->string('host_ini');
            $table->string('host_mod')->nullable();
            $table->string('host_del')->nullable();
            $table->foreign('id_empleado_revisado')->references('id_empleado')->on('empleado');
            $table->foreign('id_empleado_revisor')->references('id_empleado')->on('empleado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('revision_desempeno');
    }
}
