<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario_Rol extends Model
{
    protected $table='usuario_rol';
    protected $primaryKey='id_usuario_rol';
    public $timestamps=false;
}
