<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBonoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bono', function (Blueprint $table) {
            $table->increments('id_bono');
            $table->string('cat_bono',45);
            $table->decimal('monto_bono',8,2);
            $table->unsignedInteger('id_empleado');
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bono');
    }
}
