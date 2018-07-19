@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear usuario') }}</div>

                <div class="card-body">
                <form class="form-group" method="POST" action="/usuarios" enctype="multipart/form-data">
                 @csrf

                <div class="form-group">
                    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('RUT (sin puntos ni digito verificador)') }}</label>
                    <input type="text" name="username" placeholder="Ej: 18384726" value="">
                </div>

                <div class="form-group">
                    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
                    <input type="text" name="password" placeholder="" value="">
                </div>

                <div class="form-group">
                    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de usuario') }}</label>
                    <select name="tipo">
                       <option value="admin">Admin</option>
                       <option value="user">User</option>
                    </select>        
                
                </div>
            
            
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <a href="/usuarios" class="btn btn-danger">Cancelar</a>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection