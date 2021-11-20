<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Persona | Sistema Web</title>
</head>

<body>
    <div class="container">
        <img src="" alt="" width='100px'>
        <br><br>
        <h2 class="text-center">Institución Universitaria Antonio José Camacho</h2>
        <h3 class="text-center">Informacion de Usuario</h3>
        <br> <br> <br>
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>Nombres</th>
                <th>Tipo de Identificación</th>
                <th>Numero Identificación</th>
                <th>Correo</th>
                <th>telefono</th>
            </tr>
            @foreach($personas as $pre)
            <tr>
                <td>{{$pre->nombre}}</td>
                <td>{{$pre->tipo_doc}}</td>
                <td> {{$pre->numero_doc}}</td>
                <td> {{$pre->correo}} </td>
                <td>{{$pre->telefono}} </td>
            </tr>
            @endforeach
        </table>


        <h5 class="text-center">Grupo 511 - Tecnología en Sistemas</h5>
        <h6>Software de solicitudes uniajc</h6>
        <p>Sede Principal Avenida 6N No 28N-102 A.A. 25663 Pbx 57 2 6652828
            Institución de Educación Superior sujeta a inspección y vigilancia por el MEN
            Santiago de Cali, Colombia | Todos los derechos reservados © 2018</p>
    </div>
</body>

</html>