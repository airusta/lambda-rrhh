<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanillaPagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planilla_pago', function (Blueprint $table) {
            $table->increments('id_planilla');
            $table->unsignedInteger('id_empleado');
            $table->integer('dias_pagados')->nullable();
            $table->integer('horas_pagadass')->nullable();
            $table->decimal('haber_basico',8,2)->nullable();
            $table->decimal('bono_antiguedad',8,2)->nullable();
            $table->decimal('bono_produccion',8,2)->nullable();
            $table->decimal('bono_subisidio',8,2)->nullable();
            $table->decimal('otros_bonos',8,2)->nullable();
            $table->integer('horas_extra')->nullable();
            $table->decimal('monto_horas_extra',8,2)->nullable();
            $table->integer('horas_recargo_nocturno')->nullable();
            $table->decimal('monto_horas_extra_nocturnas',8,2)->nullable();
            $table->integer('domingos_trabajados')->nullable();
            $table->decimal('monto_dominical',8,2)->nullable();
            $table->integer('horas_extra_dominicales')->nullable();
            $table->decimal('monto_horas_extra_dominicales',8,2)->nullable();
            $table->integer('horas_extra_feriado')->nullable();
            $table->decimal('monto_horas_extra_feriado',8,2)->nullable();
            $table->decimal('total_ganado',8,2)->nullable();
            $table->decimal('rc_iva',8,2)->nullable();
            $table->decimal('aporte_afps',8,2)->nullable();
            $table->decimal('aporte_caja_de_salud',8,2)->nullable();
            $table->decimal('otros_descuentos',8,2)->nullable();
            $table->decimal('total_descuentos',8,2)->nullable();
            $table->decimal('liquido_pagable',8,2)->nullable();
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
        Schema::dropIfExists('planilla_pago');
    }
}
