@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Modificar Empleado: {{ $empleado->id_empleado}} </h3>
        @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!!Form::model($empleado,['method'=>'PATCH','route'=>['empleado.update',$empleado->id_empleado]])!!}
        {{Form::token()}}
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="primer_nombre" class="form-control" value="{{$empleado->primer_nombre}}" placeholder="......">
        </div>
        <div class="form-group">
            <label for="nombre">Segundo Nombre</label>
            <input type="text" name="segundo_nombre" class="form-control" value="{{$empleado->segundo_nombre}}" placeholder=".....">
        </div>
        <div class="form-group">
            <label for="nombre">Apellido</label>
            <input type="text" name="primer_apellido" class="form-control" value="{{$empleado->primer_apellido}}" placeholder="......">
        </div>
        <div class="form-group">
            <label for="nombre">Segundo Apellido</label>
            <input type="text" name="segundo_apellido" class="form-control" value="{{$empleado->segundo_apellido}}" placeholder=".....">
        </div>
        <div class="form-group">
            <label for="nombre">Documento</label>
            <input type="text" name="documento" class="form-control" value="{{$empleado->documento}}" placeholder=".....">
            <input type="text" name="complemento1" class="form-control" value="{{$empleado->complemento1}}" placeholder="complemento">
        </div>
        <div class="form-group">
            <label for="nombre">Tipo Documento</label>
            <input type="text" name="cat_tipo_documento" class="form-control" value="{{$empleado->cat_tipo_documento}}" placeholder=".....">
        </div>
        <div class="form-group">
            <label for="nombre">Fecha Nacimiento</label>
            <input type="text" name="fecha_nacimiento" class="form-control" value="{{$empleado->fecha_nacimiento}} "placeholder=".....">
        </div>
        <div class="form-group">
            <label for="nombre">Genero</label>
            <input type="text" name="cat_genero" class="form-control" value="{{$empleado->cat_genero}}" placeholder=".....">
        </div>
        <div class="form-group">
            <label for="nombre">Celular</label>
            <input type="text" name="celular" class="form-control" value="{{$empleado->celular}}" placeholder=".....">
        </div>
        <div class="form-group">
            <label for="nombre">Direccion</label>
            <input type="text" name="direccion" class="form-control" value="{{$empleado->direccion}}" placeholder=".....">
        </div>
        <div class="form-group">
            <label for="nombre">Estado Civil</label>
            <input type="text" name="cat_estado_civil" class="form-control" value="{{$empleado->cat_estado_civil}}" placeholder=".....">
        </div>
        <div class="form-group">
            <label for="nombre">Nacionalidad</label>
            <input type="text" name="cat_nacionalidad" class="form-control" value="{{$empleado->cat_nacionalidad}}" placeholder=".....">
        </div>
        <div class="form-group">
            <label for="nombre">Datos Transaccion</label>
            <input type="text" name="usuario_ini" class="form-control" value="{{$empleado->usuario_ini}}" placeholder="usuario">
            <input type="text" name="fch_ini" class="form-control" value="{{$empleado->fch_ini}}" placeholder="fecha">
            <input type="text" name="host_ini" class="form-control" value="{{$empleado->host_ini}}" placeholder="host">
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Guardar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
        </div>

        {!!Form::close()!!}

    </div>
</div>
@stop