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


<div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <br><label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
    </div>
</div>


<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

    <br><label for="papellido">{{ __('Correo') }}</label>
    <input id="correo" type="email" class="form-control @error('email') is-invalid @enderror" name="correo" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo eletronico">
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

    <br><label for="documento">Tipo de documento: </label>

    <select name="tipo_doc" class="select">
        <option value="Cedula de Ciudadania">Cedula de Ciudadania</option>
        <option value="Tarjeta de identidad">Tarjeta de identidad</option>
        <option value="Cedula Extranjera">Cedula Extranjera </option>
    </select>

    <br><label for="numero_doc">Numero de documento</label>
    <input type="text" name="numero_doc" id="numero_doc" class="form-control" placeholder="Numero de documento">
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

    <br> <label for="email">Telefono</label>
    <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono">
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

    <br> <button class="btn btn-primary" type="submit">
        <span class="glyphicon glyphicon-ok"></span> Guardar</button> <button class="btn btn-danger" type="reset">
        <span class="glyphicon glyphicon-remove"></span> Vaciar Campos</button> <a class="btn btn-info" type="reset" href="{{url('persona')}}"><span class="glyphicon glyphicon-home"></span> Regresar </a>
</div>


{!!Form::close()!!}
@endsection