@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-xs-6 col-md-4">
        @include('usuarios.search')
    </div>
</div>

<a href="javascript:demoFromHTML()" class="button">Run Code</a>

<div class="conteiner" id="contenido_pdf">
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
                {{ $usuarios->links() }}
            </div>

            <div class="row">
                <div class="col-md-6">
                @include('usuarios.searchpdf')
                </div>
            </div>
        </div>
    <div>
</div> 


<script>
    function demoFromHTML() {
        var pdf = new jsPDF('p', 'pt', 'letter');
        // source can be HTML-formatted string, or a reference
        // to an actual DOM element from which the text will be scraped.
        source = $('#contenido_pdf')[0];

        // we support special element handlers. Register them with jQuery-style 
        // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
        // There is no support for any other type of selectors 
        // (class, of compound) at this time.
        specialElementHandlers = {
            // element with id of "bypass" - jQuery style selector
            '#bypassme': function (element, renderer) {
                // true = "handled elsewhere, bypass text extraction"
                return true
            }
        };
        margins = {
            top: 80,
            bottom: 60,
            left: 40,
            width: 522
        };
        // all coords and widths are in jsPDF instance's declared units
        // 'inches' in this case
        pdf.fromHTML(
            source, // HTML string or DOM elem ref.
            margins.left, // x coord
            margins.top, { // y coord
                'width': margins.width, // max width of content on PDF
                'elementHandlers': specialElementHandlers
            },

            function (dispose) {
                // dispose: object with X, Y of the last line add to the PDF 
                //          this allow the insertion of new lines after html
                pdf.save('Test.pdf');
            }, margins
        );
    }
</script>

@endsection