<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguro', function (Blueprint $table) {
            $table->increments('id_seguro');
            $table->string('cat_seguro',45);
            $table->string('caja_de_salud',45)->nullable();
            $table->integer('usuario_ini');
            $table->integer('usuario_mod')->nullable();
            $table->integer('usuario_del')->nullable();
            $table->dateTime('fch_ini');
            $table->dateTime('fch_mod')->nullable();
            $table->dateTime('fch_del')->nullable();
            $table->string('host_ini');
            $table->string('host_mod')->nullable();
            $table->string('host_del')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seguro');
    }
}
