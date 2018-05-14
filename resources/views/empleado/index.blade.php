@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Nomina de Empleados <a href="empleado/create"><button class="btn btn-success">Nuevo</button></a></h3>
        @include('empleado.search')
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Documento</th>
                    <th>Extension</th>
                    </thead>
                    @foreach ($empleados as $per)
                        <tr>
                            <td>{{$per->id_empleado}}</td>
                            <td>{{$per->primer_nombre}}</td>
                            <td>{{$per->primer_apellido}}</td>
                            <td>{{$per->documento}}</td>
                            <td>{{$per->complemento1}}</td>
                            <td>
                                <a href="{{URL::action('EmpleadoController@edit',$per->id_empleado)}}"><button class="btn btn-info">Editar</button></a>
                                <a href="" data-target="#modal-delete-{{$per->id_empleado}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                            </td>
                        </tr>
                        @include('empleado.modal')
                    @endforeach
                </table>
            </div>
            {{$empleados->render()}}
        </div>
    </div>
    </div>
@stop