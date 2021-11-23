@extends('layouts.plantilla')
@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Crear Persona</h3>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>

{!!Form::open(array('url'=>'persona','method'=>'POST','autocomplete'=>'off'))!!} {{Form::token()}}

<div class="row">

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <br><label for="nombre">Nombre Completo:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre Completo" pattern="[a-zA-Z]+">

            <label for="correo">{{ __('Correo eletrónico:') }}</label>
            <input id="correo" type="email" class="form-control @error('email') is-invalid @enderror" name="correo" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo eletrònico">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <br> <label for="Telefono">Teléfono</label>
            <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Teléfono">
        </div>

    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <br><br> <label for="tipo_doc">Tipo de documento: </label>

            <select name="tipo_doc" class="select">
                <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
                <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                <option value="Cédula Extranjera">Cédula Extranjera</option>
            </select>
        </div>

        <label for="numero_doc">Número de documento:</label>
        <input type="number" name="numero_doc" id="numero_doc" class="form-control" placeholder="Número de documento" pattern="[-]">
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <br> <br> <button class="btn btn-primary" type="submit">
                <span class="glyphicon glyphicon-ok"></span> Guardar</button> <button class="btn btn-danger" type="reset">
                <span class="glyphicon glyphicon-remove"></span> Vaciar Campos</button> <a class="btn btn-info" type="reset" href="{{url('persona')}}"><span class="glyphicon glyphicon-home"></span> Regresar </a>
        </div>
    </div>
</div>
{!!Form::close()!!}
@endsection