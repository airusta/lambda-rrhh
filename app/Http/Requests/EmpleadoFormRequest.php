<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=>'max:20',
            'primer_nombre'=>'max:50',
            'segundo_nombre'=>'max:50',
            'tercer_nombre'=>'max:50',
            'primer_apellido'=>'max:50',
            'segundo_apellido'=>'max:50',
            'tercer_apellido'=>'max:50',
            'documento'=>'max:50',
            'complemento1'=>'max:10',
            'complemento2'=>'max:10',
            'cat_tipo_documento'=>'max:10',
            'fecha_nacimiento',
            'cat_genero',
            'celular',
            'telefono',
            'direccion'=>'max:300',
            'cat_estado_civil'=>'max:10',
            'cat_nacionalidad'=>'max:10',
            'cat_discapacidad'=>'max:45',
            'cat_discapacidad2'=>'max:45',
            'id_usuario',
            'id_sucursal',
            'usuario_ini',
            'usuario_mod',
            'usuario_del',
            'fch_ini',
            'fch_mod',
            'fch_del',
            'host_ini'=>'max:50',
            'host_mod'=>'max:50',
            'host_del'=>'max:50',
        ];
    }
}
