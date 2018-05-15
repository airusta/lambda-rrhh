<?php

namespace App\Http\Controllers;

use App\Empleado_Seguro;
use App\Seguro;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Empleado;
use App\User;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\EmpleadoFormRequest;
use DB;

class EmpleadoController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $empleados=DB::table('empleado')
                ->where('documento','LIKE','%'.$query.'%')
                ->where ('fch_del','=',null)
                ->orderBy('id_empleado','asc')
                ->paginate(7);
            return view('empleado.index',["empleados"=>$empleados,"searchText"=>$query]);
        }
    }
    public function create()
    {
        $seguro = Seguro::get();
        return view("empleado.create")->with('seguro',$seguro);


    }
    public function store(EmpleadoFormRequest $request)
    {
        $user =  new User;
        $user->nombre=$request->get('usuario');
        $user->email=$request->get('email');
        $user->password=bcrypt($request->get('password'));
        $user->usuario_ini=1;
        $user->fch_ini=Carbon::now();
        $user->host_ini='localhost';
        $user->save();
        $empleado=new Empleado;
        $empleado->primer_nombre=$request->get('primer_nombre');
        $empleado->segundo_nombre=$request->get('segundo_nombre');
        $empleado->tercer_nombre=$request->get('tercer_nombre');
        $empleado->primer_apellido=$request->get('primer_apellido');
        $empleado->segundo_apellido=$request->get('segundo_apellido');
        $empleado->tercer_apellido=$request->get('tercer_apellido');
        $empleado->documento=$request->get('documento');
        $empleado->complemento1=$request->get('complemento1');
        $empleado->complemento2=$request->get('complemento2');
        $empleado->cat_tipo_documento=$request->get('cat_tipo_documento');
        $empleado->fecha_nacimiento=$request->get('fecha_nacimiento');
        $empleado->cat_genero=$request->get('cat_genero');
        $empleado->celular=$request->get('celular');
        $empleado->telefono=$request->get('telefono');
        $empleado->direccion=$request->get('direccion');
        $empleado->cat_estado_civil=$request->get('cat_estado_civil');
        $empleado->cat_nacionalidad=$request->get('cat_nacionalidad');
        $empleado->cat_discapacidad=$request->get('cat_discapacidad');
        $empleado->id_usuario=$user->id_usuario;
        $empleado->usuario_ini=1;
        $empleado->fch_ini=Carbon::now();
        $empleado->host_ini='localhost';
        $empleado->save();

        return Redirect::to('empleado');
    }
    public function show($id)
    {
        return view("empleado.show",["empleado"=>Empleado::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("empleado.edit",["empleado"=>Empleado::findOrFail($id)]);
    }
    public function update(EmpleadoFormRequest $request,$id)
    {
        $empleado=Empleado::findOrFail($id);
        $empleado->primer_nombre=$request->get('primer_nombre');
        $empleado->segundo_nombre=$request->get('segundo_nombre');
        $empleado->tercer_nombre=$request->get('tercer_nombre');
        $empleado->primer_apellido=$request->get('primer_apellido');
        $empleado->segundo_apellido=$request->get('segundo_apellido');
        $empleado->tercer_apellido=$request->get('tercer_apellido');
        $empleado->documento=$request->get('documento');
        $empleado->complemento1=$request->get('complemento1');
        $empleado->complemento2=$request->get('complemento2');
        $empleado->cat_tipo_documento=$request->get('cat_tipo_documento');
        $empleado->fecha_nacimiento=$request->get('fecha_nacimiento');
        $empleado->cat_genero=$request->get('cat_genero');
        $empleado->celular=$request->get('celular');
        $empleado->telefono=$request->get('telefono');
        $empleado->direccion=$request->get('direccion');
        $empleado->cat_estado_civil=$request->get('cat_estado_civil');
        $empleado->cat_nacionalidad=$request->get('cat_nacionalidad');
        $empleado->cat_discapacidad=$request->get('cat_discapacidad');
        $empleado->usuario_ini=1;
        $empleado->fch_ini=Carbon::now();
        $empleado->host_ini='localhost';
        $empleado->update();
        return Redirect::to('empleado');
    }
    public function destroy($id)
    {
        $empleado=Empleado::findOrFail($id);
        $empleado->fch_del=Carbon::now();
        $empleado->update();
        return Redirect::to('empleado');
    }

}