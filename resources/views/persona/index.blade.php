@extends('layouts.plantilla_admin')
@section('contenido')
<div class="row">
    <div class="col-md-8 col-xs-12">
        @include('persona.search')
    </div>
    <div class="col-md-2">
        <a href="persona/create" class="pull-right">
            <button class="btn btn-success">Crear Persona</button>
        </a>
    </div>
</div>
<h3>Reporte de Todos Los Usuarios
    <a href="\imprimirPersonas">
        <button class="btn btn-success"><span class="glyphicon glyphicon-downloadalt"></span> Generar PDF</button>
    </a>
</h3>

<div class="row">
    <div class="col-md-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <th>Id</th>
                    <th>Nombre Completoss</th>
                    <th>Tipo de documento</th>
                    <th>Número de documento</th>
                    <th>Correo Eletrónico</th>
                    <th>Teléfono</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach($personas as $persona)
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
        {{$personas->links()}}
    </div>
</div>

@endsection