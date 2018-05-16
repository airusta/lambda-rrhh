@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo Empleado</h3>
        @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!!Form::open(array('url'=>'empleado','method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="primer_nombre" class="form-control" placeholder="campo obligatorio">
        </div>
        <div class="form-group">
            <label for="nombre">Segundo Nombre</label>
            <input type="text" name="segundo_nombre" class="form-control" placeholder="campo opcional">
        </div>
        <div class="form-group">
            <label for="nombre">Tercer Nombre</label>
            <input type="text" name="tercer_nombre" class="form-control" placeholder="campo opcional">
        </div>
        <div class="form-group">
            <label for="nombre">Apellido</label>
            <input type="text" name="primer_apellido" class="form-control" placeholder="campo obligatorio">
        </div>
        <div class="form-group">
            <label for="nombre">Segundo Apellido</label>
            <input type="text" name="segundo_apellido" class="form-control" placeholder="campo opcional">
        </div>
        <div class="form-group">
            <label for="nombre">Tercer Apellido</label>
            <input type="text" name="tercer_apellido" class="form-control" placeholder="campo opcional">
        </div>
        <div class="form-group">
            <label for="nombre">Documento</label>
            <input type="text" name="documento" class="form-control" placeholder="Numero de Documento"><br>
            <input type="text" name="complemento1" class="form-control" placeholder="Extension 1"><br>
            <input type="text" name="complemento2" class="form-control" placeholder="Extension 2">
        </div>
        <div class="form-group">
            <label for="nombre">Tipo Documento</label>
            <input type="text" name="cat_tipo_documento" class="form-control" placeholder="campo obligatorio">
        </div>
        <div class="form-group">
            <label for="nombre">Fecha Nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control" placeholder="campo obligatorio">
        </div>
        <div class="form-group">
            <label for="nombre">Genero</label>
            <input type="text" name="cat_genero" class="form-control" placeholder="campo obligatorio">
        </div>
        <div class="form-group">
            <label for="nombre">Celular</label>
            <input type="text" name="celular" class="form-control" placeholder="campo opcional">
        </div>
        <div class="form-group">
            <label for="nombre">Telefono</label>
            <input type="text" name="telefono" class="form-control" placeholder="campo opcional">
        </div>
        <div class="form-group">
            <label for="nombre">Direccion</label>
            <input type="text" name="direccion" class="form-control" placeholder="campo obligatorio">
        </div>
        <div class="form-group">
            <label for="nombre">Estado Civil</label>
            <input type="text" name="cat_estado_civil" class="form-control" placeholder="campo obligatorio">
        </div>
        <div class="form-group">
            <label for="nombre">Nacionalidad</label>
            <input type="text" name="cat_nacionalidad" class="form-control" placeholder="campo obligatorio">
        </div>
        <div class="form-group">
            <label for="nombre">Discapacidad</label>
            <input type="text" name="cat_discapacidad" class="form-control" placeholder="campo opcional">
        </div>
        <div class="form-group">
            <label for="nombre">Usuario</label>
            <input type="text" name="usuario" class="form-control" placeholder="para empleados con acceso">
        </div>
        <div class="form-group">
            <label for="nombre">Email</label>
            <input type="text" name="email" class="form-control" placeholder="para empleados con acceso">
        </div>
        <div class="form-group">
            <label for="nombre">Contraseña</label>
            <input type="password" name="pass" class="form-control" placeholder="para empleados con acceso">
        </div>
        <div class="form-group">
            <label for="nombre">Seguro</label>
            <select class="form-control" name="seguro">
                @foreach($seguro as $s)
                    <option value="{{$s->id_seguro}}">{{$s->cat_seguro}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nombre">Rol</label>
            <select class="form-control" name="rol">
                @foreach($rol as $s)
                    <option value="{{$s->id_rol}}">{{$s->nombre}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Guardar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
        </div>

        {!!Form::close()!!}

    </div>
</div>
@stop