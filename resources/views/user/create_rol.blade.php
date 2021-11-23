@extends('layouts.plantilla')
@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
<form method="POST" action="rusuario" enctype="multipart/form-data">
    @csrf


    <h3 class="card-header">{{ __('Cambiar Rol') }} </h3>

    <div class="form-group row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <label for="name">Id</label>
            <input id="id_persona" type="text" class="form-control @error('id_persona') is-invalid @enderror" name="id_persona" value=" 1" required autocomplete="id_persona" autofocus>
            @error('id_persona')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="name">Nombre: </label>
            <div>
                <select name="programa" class="select">
                    <option value="admin">admin</option>
                    <option value="executive">executive</option>
                    <option value="students">students</option>
                </select>
            </div>

            <label for="description">Descripción:</label>
            <div>
                <select name="programa" class="select">
                    <option value="admin">El admin permite crear, modificar y eliminar usuarios con sus distintos roles. </option>
                    <option value="executive">El executive permite revisar, y dar respuesta a las solicitudes de todos los students. </option>
                    <option value="students">El students permite hacer soliciutes y ver el estado de estas.</option>
                </select>
            </div>
            <br> <button class="btn btn-primary" type="submit">
                <span class="glyphicon glyphicon-ok"></span> Guardar</button>
            <a class="btn btn-info" type="reset" href="{{url('persona')}}"><span class="glyphicon glyphicon-home"></span> Regresar </a>
        </div>
    </div>
</form>
{!!Form::close()!!}
@endsection