<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="style"
</head>
<body>
    

<h1>Lista de alumnos</h1>
<table border="1">
    <tr>
		<td>RUT</td>
		<td>Nombres</td>
        <td>Apellidos</td>
    </tr>
        @foreach ($usuarios as $usu)
        <tbody>
        <tr>
			<td>{{$usu -> rut}}</td>
			<td>{{$usu -> nombres}}</td>
            <td>{{$usu -> apellidos}}</td>
        </tr>
        @endforeach
        </tbody>
</table>
</body>