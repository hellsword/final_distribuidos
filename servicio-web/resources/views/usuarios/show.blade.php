@extends('layouts.app')
@section('content')
<div class="conteiner">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Informacion detallada') }}</div>
                    <table>
                        <thead>
                            
                            <center><img  src="{{$infopersonal->foto}}"width="200" height="200" ></center>
                        </thead>

                        <thead>
                            <td>Rut</td>
                            <td>{{$infopersonal->rut}}</td>
                        </thead>

                        <thead>
                            <td>Nombres</td>
                            <td>{{$infopersonal->nombres}}</td>
                        </thead>

                        <thead>
                            <td>Apellidos</td>
                            <td>{{$infopersonal->apellidos}}</td>
                        </thead>

                        <thead>
                            <td>Fecha de nacimiento</td>
                            <td>{{$infopersonal->fecha_nacimiento}}</td>
                        </thead>

                        <thead>
                            <td>Celular</td>
                            <td>{{$infocontacto->celular}}</td>
                        </thead>

                        <thead>
                            <td>Telefono fijo</td>
                            <td>{{$infocontacto->fono_fijo}}</td>
                        </thead>

                        <thead>
                            <td>Email</td>
                            <td>{{$infocontacto->email}}</td>
                        </thead>

                        <thead>
                            <td>Facebook</td>
                            <td>{{$infocontacto->facebook}}</td>
                        </thead>

                        <thead>
                            <td>Direccion</td>
                            <td>{{$infocontacto->direccion}}</td>
                        </thead>

                        <thead>
                            <td>Titulo</td>
                            <td>{{$infoegreso->titulo}}</td>
                        </thead>

                        <thead>
                            <td>Año ingreso</td>
                            <td>{{$infoegreso->año_ingreso}}</td>
                        </thead>

                        <thead>
                            <td>Año egreso</td>
                            <td>{{$infoegreso->año_egreso}}</td>
                        </thead>

                        <thead>
                            <td>Fecha examen</td>
                            <td>{{$infoegreso->fecha_examen}}</td>
                        </thead>

                        <thead>
                            <td>Titulo de tesis o memoria</td>
                            <td>{{$infoegreso->titulo_tm}}</td>
                        </thead>

                        <thead>
                            <td>Profesor Guia</td>
                            <td>{{$infoegreso->prof_guia}}</td>
                        </thead>



                    </table>

                </div>
        </div>
    <div>
</div>   
@endsection