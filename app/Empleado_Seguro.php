<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado_Seguro extends Model
{
        protected $table='empleado_seguro';
        protected $primaryKey='id_empleado_seguro';
        public $timestamps=false;
}
