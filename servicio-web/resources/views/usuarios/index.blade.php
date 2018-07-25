@extends('layouts.app')
@section('content')


<div class="breadcrumbwidget">
    <ul class="breadcrumb">
        <li><a href="dashboard.html">Home</a> <span class="divider">/</span></li>
        <li class="active">Page Not Found</li>
    </ul>
</div><!--breadcrumbs-->
<div class="pagetitle">
    <h1>Page Not Found</h1> <span>We couldn't find that page. It appears that you are lost.</span>
</div><!--pagetitle-->

<div class="maincontent">

    <br>
    @include('usuarios.search')

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                 {{session('success')}}
            </div>
        @endif
    </div>
  
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
                <td><a href="{{URL::action('UserController@show', $usu -> id)}}" class="btn btn-primary"> <i class="fa fa-eye"></i> </a>
                    <a href="{{URL::action('UserController@edit', $usu -> id)}}" class="btn btn-warning"> <i class="fa fa-edit"></i> </a>
                    <a href="/elimi/{{ $usu -> id}}" class="btn btn-danger"> <i class="fa fa-trash"></i> </a>
                </td>
            </tr>
            @endforeach
            
        </table>
        {{ $usuarios->links() }}
    </div>

    <br>
    @include('usuarios.searchpdf')
  

</div> 

@endsection