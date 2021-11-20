@extends('layouts.plantilla')
@section ('contenido')

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar datos de {{$personas->nombre}} </h3>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul> @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>

{{Form::open(array('action'=>array('PersonaController@update', $personas->id_persona),'method'=>'patch'))}}

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{$personas->nombre}}">
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <br> <label for="correo">Correo</label>
            <input type="text" name="correo" id="correo" class="form-control" value="{{$personas->correo}}">
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <br> <label for="numero_doc">Numero de documento</label>
            <input type="text" name="numero_doc" id="numero_doc" class="form-control" value="{{$personas->numero_doc}}">
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <br> <label for="tipo_doc">Tipo de documento</label>

            <br> <select name="tipo_doc" id="tipo_doc" class="select" value="{{$personas->tipo_doc}}">
                <option value="Cedula de Ciudadania">Cedula de Ciudadania</option>
                <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                <option value="Cedula Extranjera">Cedula Extranjera </option>
            </select>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <br> <label for="telefono">Telefono</label>
            <input type="text" name="telefono" id="telefono" class="form-control" value="{{$personas->telefono}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <br> <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-refresh"></span> Actualizar </button> <a class="btn btn-info" type="reset" href="{{url('persona')}}"><span class="glyphicon glyphicon-home"></span> Regresar </a>
        </div>
    </div>
</div>

{!!Form::close()!!}
@endsection