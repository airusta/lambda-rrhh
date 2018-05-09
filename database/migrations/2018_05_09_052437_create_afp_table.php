<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAfpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afp', function (Blueprint $table) {
            $table->increments('id_afp');
            $table->string('cat_afp',45);
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
        Schema::dropIfExists('afp');
    }
}
