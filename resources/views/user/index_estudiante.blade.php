@extends('layouts.plantilla')
@section('contenido')
<div class="row">
    <div class="col-md-8 col-xs-12">
        {{--@include('user.search')--}}
    </div>
</div>
<h3>Reporte de Todos Los Estudiantes </h3>

<!-- <a href="\imprimirPersonas">
    <button class="btn btn-success"><span class="glyphicon glyphicon-downloadalt"></span> Generar PDF</button>
</a> -->


<div class="row">
    <div class="col-md-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <th>Id_Estudiante</th>
                    <th>Nombre</th>
                    <th>Tipo de documento</th>
                    <th>Numeor</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach($estudiantes as $persona)
                    <tr>
                        <td>{{ $persona->id_persona }}</td>
                        <td>{{ $persona->nombre }}</td>
                        <td>{{ $persona->tipo_doc }}</td>
                        <td>{{ $persona->numero_doc}}</td>
                        <td>{{ $persona->correo }}</td>
                        <td>{{ $persona->telefono }}</td>
                        <td>


                            <a href="{{URL::action('PersonaController@edit',$persona->id_persona)}}">
                                <button class="btn btn-primary">Actualizar</button></a>

                            <a href="" data-target="#modal-delete-{{$persona->id_persona}}" data-toggle="modal">
                                <button class="btn btn-danger">Eliminar</button></a>

                            <a href="\imprimirRegistro/{{$persona->id_persona}}/{{$persona->numero_doc}}">
                                <button class="btn btn-success"><span class="glyphicon glyphicon-downloadalt">

                                    </span>PDF</button></a>
                        </td>
                    </tr>
                    @include('persona.modal')
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$estudiantes->links()}}
    </div>
</div>

@endsection