@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-xs-6 col-md-4">
        @include('usuarios.search')
    </div>
</div>
<div class="conteiner">
    <div class="row justify-content-center">       
       <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lista de usuarios') }}</div>
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
					    <th>ID</th>
					    <th>RUT</th>
					    <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Titulo</th>
                        <th>Año de egreso</th>
                        <th>Fecha de examen</th>
                        <th>Acciones</th>
				    </thead>
                    @foreach ($usuarios as $usu)
                    <tr>
                        <td>{{$usu -> id}}</td>
					    <td>{{$usu -> rut}}</td>
					    <td>{{$usu -> nombres}}</td>
                        <td>{{$usu -> apellidos}}</td>
                        <td>{{$usu -> titulo}}</td>
                        <td>{{$usu -> año_egreso}}</td>
                        <td>{{$usu -> fecha_examen}}</td>
                        <td><a href="{{URL::action('UserController@show', $usu -> id)}}" class="btn btn-primary">Ver...</a>
                            <a href="{{URL::action('UserController@edit', $usu -> id)}}" class="btn btn-warning">Editar</a>
                            <a href="/elimi/{{ $usu -> id}}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    <div>
</div>   

@endsection