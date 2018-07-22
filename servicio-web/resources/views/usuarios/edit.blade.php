@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar informacion del usuario') }}</div>

                <form class="form-group" method="POST" action="/usuarios/{{$infocontacto->id}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>
                    <input type="file" name="foto"/>
                </div>

                <div class="form-group">
                    <label for="nombres" class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>
                    <input type="text" name="nombres" placeholder="" value="{{$infopersonal->nombres}}">
                </div>

                <div class="form-group">
                    <label for="apellidos" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>
                    <input type="text" name="apellidos" placeholder="" value="{{$infopersonal->apellidos}}">
                </div>

                <div class="form-group">
                    <label for="fecha_nacimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha nacimiento') }}</label>
                    <input type="date" name="fecha_nacimiento" placeholder="" value="{{$infopersonal->fecha_nacimiento}}">
                </div>



                 <div class="form-group">
                    <label for="celular" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>
                    <input type="text" name="celular" placeholder="" value="{{$infocontacto->celular}}">
                </div>

                <div class="form-group">
                    <label for="fono_fijo" class="col-md-4 col-form-label text-md-right">{{ __('Telefono fijo') }}</label>
                    <input type="text" name="fono_fijo" placeholder="" value="{{$infocontacto->fono_fijo}}">
                </div>

                <div class="form-group">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email ') }}</label>
                    <input type="text" name="email" placeholder="" value="{{$infocontacto->email}}">
                </div>

                <div class="form-group">
                    <label for="facebook" class="col-md-4 col-form-label text-md-right">{{ __('Facebook') }}</label>
                    <input type="text" name="facebook" placeholder="" value="{{$infocontacto->facebook}}">
                </div>

                <div class="form-group">
                    <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>
                    <input type="text" name="direccion" placeholder="" value="{{$infocontacto->direccion}}">
                </div>

                <div class="form-group">
                    <label for="titulo" class="col-md-4 col-form-label text-md-right">{{ __('Titulo') }}</label>
                    <input type="text" name="titulo" placeholder="" value="{{$infoegreso->titulo}}">
                </div>

                <div class="form-group">
                    <label for="año_ingreso" class="col-md-4 col-form-label text-md-right">{{ __('Año de ingreso') }}</label>
                    <input type="text" name="año_ingreso" placeholder="" value="{{$infoegreso->año_ingreso}}">
                </div>

                <div class="form-group">
                    <label for="año_egreso" class="col-md-4 col-form-label text-md-right">{{ __('Año de egreso') }}</label>
                    <input type="text" name="año_egreso" placeholder="" value="{{$infoegreso->año_egreso}}">
                </div>

                <div class="form-group">
                    <label for="fecha_examen" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de examen') }}</label>
                    <input type="date" name="fecha_examen" placeholder="" value="{{$infoegreso->fecha_examen}}">
                </div>

                <div class="form-group">
                    <label for="titulo_tm" class="col-md-4 col-form-label text-md-right">{{ __('Titulo de tesis o memoria') }}</label>
                    <input type="text" name="titulo_tm" placeholder="" value="{{$infoegreso->titulo_tm}}">
                </div>

                <div class="form-group">
                    <label for="prof_guia" class="col-md-4 col-form-label text-md-right">{{ __('Profesor guia') }}</label>
                    <input type="text" name="prof_guia" placeholder="" value="{{$infoegreso->prof_guia}}">
                </div>


                <div class="form-group">
                    <center><button class="btn btn-primary" type="submit">Actualizar</button>
                    <a href="/usuarios" class="btn btn-danger">Cancelar</a></center>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection