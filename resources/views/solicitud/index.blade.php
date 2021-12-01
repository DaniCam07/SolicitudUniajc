@extends('layouts.plantilla')
@section('contenido')

<div class="row">
    <div class="col-md-8col-xs-12">
        @include('solicitud.search')
    </div>
    <div class="col-md-2">
        <a href="solicitud/create" class="pull-right">
        <button class="btn btn-success">Crear Solicitud</button>
</a>
</div>
</div>

<div class="row">
    <div class="col-md-12col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <th>No.Solicitud</th>
                    <th>Tipo.Doc</th>
                    <th>Documento</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Programa</th>
                    <th>Semestre</th>
                    <th>Jornada</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Tipo de Cita</th>
                    <th>Observacion</th>
                    <th> Opciones </th>
                </thead>
                <tbody>
                    @foreach($solicitudes as $solicitud)
                    <tr>
                    
                        <td>{{$solicitud->id_solicitud}}</td>           
                        <td>{{$solicitud->tipo_doc}}</td>
                        <td>{{$solicitud->numero_doc}}</td>
                        <td>{{$solicitud->nombre}}</td>
                        <td>{{$solicitud->correo}}</td>
                        <td>{{$solicitud->programa}}</td>
                        <td>{{$solicitud->semestre}}</td>
                        <td>{{$solicitud->jornada}}</td>
                        <td>{{$solicitud->fecha}}</td>
                        <td>{{$solicitud->hora}}</td>
                        <td>{{$solicitud->tipo_solicitud}}</td>
                        <td>{{$solicitud->observacion}}</td>
                        
                        <td>
                            
                            <a href="\imprimirSolicitud/{{$solicitud->id_solicitud}}"><button class="btn btn-success">
                                <span class="glyphicon glyphicon-download-alt"></span>PDF</button></a>

                                <a href="{{URL::action('PersonaController@edit',$solicitud->id_solicitud)}}">
                                <button class="btn btn-primary">Gestionar</button></a>
                    </td>
                </tr>
                @endforeach 
            </tbody>
        </table>
     </div>
     {{$solicitudes->links()}}
 
</div>
</div>

@endsection