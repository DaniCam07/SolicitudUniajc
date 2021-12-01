<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<title>Personas| Sistema Web</title>
</head>
<body>
<div class="container">
@foreach ($solicitudes as $sol1)
<h3 class="text-center">Solicitud de Registro {{$sol1->id_solicitud}}</h3>
@endforeach
<img src="" alt="" width='100px'>
<br><br>
<h1 class="text-center">UNIAJC</h1>
<h3 class="text-center">NIT: 123456-1</h3>
<h3 class="text-center">Tel. 555555</h3>
<br> <br> <br>
<table class="table table-bordered table-striped table-hover">
<tr>

<th>Tipo.Doc</th>
<th>Documento</th>
<th>Nombre</th>
<th>Programa</th>
<th>Jornada</th>
<th>Semestre</th>
<th>Correo</th>
<th>Fecha</th>
<th>Hora</th>
<th>Tipo de Cita</th>
<th>Observacion</th>


</tr>
@foreach ($solicitudes as $sol)
<tr>         
    
    <td>{{$sol->tipo_doc}}</td>
    <td>{{$sol->numero_doc}}</td>
    <td>{{$sol->nombre}}</td>
    <td>{{$sol->programa}}</td>
    <td>{{$sol->jornada}}</td>
    <td>{{$sol->semestre}}</td>
    <td>{{$sol->correo}}</td>
    <td>{{$sol->fecha}}</td>
    <td>{{$sol->hora}}</td>
    <td>{{$sol->tipo_solicitud}}</td>
    <td>{{$sol->observacion}}</td>
</tr>
@endforeach
</table>
<h5 class="text-center">Facultad de Ciencias Empresariales e Ingienerias</h5>
</div>
</body>
</html>