<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table='empleado';
    protected $primaryKey='id_empleado';
    public $timestamps=false;

    protected $fillable =[
        'primer_nombre',
        'segundo_nombre',
        'tercer_nombre',
        'primer_apellido',
        'segundo_apellido',
        'tercer_apellido',
        'documento',
        'complemento1',
        'complemento2',
        'cat_tipo_documento',
        'fecha_nacimiento',
        'cat_genero',
        'celular',
        'telefono',
        'direccion',
        'cat_estado_civil',
        'cat_nacionalidad',
        'cat_discapacidad',
        'id_usuario',
        'usuario_ini',
        'usuario_mod',
        'usuario_del',
        'fch_ini',
        'fch_mod',
        'fch_del',
        'host_ini',
        'host_mod',
        'host_del',



    ];

    protected $guarded =[

    ];
}
