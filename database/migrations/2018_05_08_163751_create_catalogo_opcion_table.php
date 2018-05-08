<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogoOpcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogo_opcion', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_catalogo');
            $table->foreign('id_catalogo')->references('id_catalogo')->on('catalogo');
            $table->unsignedInteger('id_opcion');
            $table->foreign('id_opcion')->references('id_opcion')->on('opcion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalogo_opcion');
    }
}
