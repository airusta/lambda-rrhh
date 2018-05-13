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
            <input type="text" name="primer_nombre" class="form-control" placeholder="......">
        </div>
        <div class="form-group">
            <label for="nombre">Segundo Nombre</label>
            <input type="text" name="segundo_nombre" class="form-control" placeholder=".....">
        </div>
        <div class="form-group">
            <label for="nombre">Apellido</label>
            <input type="text" name="primer_apellido" class="form-control" placeholder="......">
        </div>
        <div class="form-group">
            <label for="nombre">Segundo Apellido</label>
            <input type="text" name="segundo_apellido" class="form-control" placeholder=".....">
        </div>
        <div class="form-group">
            <label for="nombre">Documento</label>
            <input type="text" name="documento" class="form-control" placeholder=".....">
            <input type="text" name="complemento1" class="form-control" placeholder="complemento">
        </div>
        <div class="form-group">
            <label for="nombre">Tipo Documento</label>
            <input type="text" name="cat_tipo_documento" class="form-control" placeholder=".....">
        </div>
        <div class="form-group">
            <label for="nombre">Fecha Nacimiento</label>
            <input type="text" name="fecha_nacimiento" class="form-control" placeholder=".....">
        </div>
        <div class="form-group">
            <label for="nombre">Genero</label>
            <input type="text" name="cat_genero" class="form-control" placeholder=".....">
        </div>
        <div class="form-group">
            <label for="nombre">Celular</label>
            <input type="text" name="celular" class="form-control" placeholder=".....">
        </div>
        <div class="form-group">
            <label for="nombre">Direccion</label>
            <input type="text" name="direccion" class="form-control" placeholder=".....">
        </div>
        <div class="form-group">
            <label for="nombre">Estado Civil</label>
            <input type="text" name="cat_estado_civil" class="form-control" placeholder=".....">
        </div>
        <div class="form-group">
            <label for="nombre">Nacionalidad</label>
            <input type="text" name="cat_nacionalidad" class="form-control" placeholder=".....">
        </div>
        <div class="form-group">
            <label for="nombre">Datos Transaccion</label>
            <input type="text" name="usuario_ini" class="form-control" placeholder="usuario">
            <input type="text" name="fch_ini" class="form-control" placeholder="fecha">
            <input type="text" name="host_ini" class="form-control" placeholder="host">
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Guardar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
        </div>

        {!!Form::close()!!}

    </div>
</div>
@stop