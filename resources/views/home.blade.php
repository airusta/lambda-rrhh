@extends('layouts.admin')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sistema Lambda de Talento Humano</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!--{{Auth::user()->id_usuario}}
                    Ingreso al Sistema.-->
                    @foreach($rol as $r)
                        {{$r->nombre}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
