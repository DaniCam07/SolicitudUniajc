@extends('layouts.plantilla')
@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Crear Directivo</h3>
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
    <div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <br><label for="id_persona ">id_persona </label>
            <input type="text" name="id_persona " id="id_persona " class="form-control" placeholder="id_persona  de la persona">
        </div>
    </div>


    <div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <br><label for="profesion">Profesion</label>
            <input type="text" name="profesion" id="profesion" class="form-control" placeholder="Profesion del Directivo">
        </div>
    </div>
</div>
<button class="btn btn-primary" type="submit">
    <span class="glyphicon glyphicon-ok"></span> Guardar</button> <button class="btn btn-danger" type="reset">
    <span class="glyphicon glyphicon-remove"></span> Vaciar Campos</button> <a class="btn btn-info" type="reset" href="{{url('persona')}}"><span class="glyphicon glyphicon-home"></span> Regresar </a>
</div>


{!!Form::close()!!}
@endsection