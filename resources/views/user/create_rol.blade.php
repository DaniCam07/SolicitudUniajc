@extends('layouts.plantilla')
@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Crear Rol</h3>
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
        <br><label for="name">Nombre</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Nombre del rol">
    </div>
</div>


<div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <br><label for="description">Descripción</label>
        <input type="text" name="description" id="description" class="form-control" placeholder="descripción del Rol">
    </div>
</div>

    <br> <button class="btn btn-primary" type="submit">
        <span class="glyphicon glyphicon-ok"></span> Guardar</button> <button class="btn btn-danger" type="reset">
        <span class="glyphicon glyphicon-remove"></span> Vaciar Campos</button> <a class="btn btn-info" type="reset" href="{{url('persona')}}"><span class="glyphicon glyphicon-home"></span> Regresar </a>
</div>


{!!Form::close()!!}
@endsection