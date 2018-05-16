<?php

namespace App\Http\Controllers;

use App\Empleado_Seguro;
use App\Seguro;
use App\Rol;
use App\Usuario_Rol;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Empleado;
use App\User;
use Illuminate\Support\Facades\Auth;
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
        $rol = Rol::get();
        return view("empleado.create")->with('seguro',$seguro)->with('rol',$rol);



    }
    public function store(EmpleadoFormRequest $request)
    {
        $user =  new User;
        $user->nombre=$request->get('usuario');
        $user->email=$request->get('email');
        $user->password=bcrypt($request->get('password'));
        $user->usuario_ini=1;
        $user->fch_ini=Carbon::now();
        $user->host_ini='127.0.0.1';
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
        $empleado->host_ini='127.0.0.1';
        $empleado->save();

        $emp_s= new Empleado_Seguro;
        $emp_s->id_empleado=$empleado->id_empleado;
        $emp_s->id_seguro=$request->seguro;
        $emp_s->usuario_ini=Auth::user()->id_usuario;
        $emp_s->fch_ini=Carbon::now();
        $emp_s->host_ini='127.0.0.1';
        $emp_s->save();

        $emp_r= new Usuario_Rol;
        $emp_r->id_usuario=$user->id_usuario;
        $emp_r->id_rol=$request->rol;
        $emp_r->usuario_ini=Auth::user()->id_usuario;
        $emp_r->fch_ini=Carbon::now();
        $emp_r->host_ini='127.0.0.1';
        $emp_r->save();
        return Redirect::to('empleado');
    }
    public function show($id)
    {
        return view("empleado.show",["empleado"=>Empleado::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("empleado.edit",["empleado"=>Empleado::findOrFail($id),"seguro"=>Seguro::get(),"rol"=>Rol::get()]);
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

        $emp_s=Empleado_Seguro::where('id_empleado',$empleado->id_empleado)->firstOrFail();
        $emp_s->id_seguro=$request->seguro;
        $emp_s->usuario_mod=Auth::user()->id_usuario;
        $emp_s->fch_mod=Carbon::now();
        $emp_s->host_mod='127.0.0.1';
        $emp_s->update();

        $emp_r=Usuario_Rol::where('id_usuario',$empleado->id_usuario)->firstOrFail();
        $emp_r->id_rol=$request->rol;
        $emp_r->usuario_mod=Auth::user()->id_usuario;
        $emp_r->fch_mod=Carbon::now();
        $emp_r->host_mod='127.0.0.1';
        $emp_r->update();
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