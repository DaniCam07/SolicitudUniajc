@extends('layouts.plantilla')
@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Registrar como Director</h3>
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

<div class="card-body">
    <form method="POST" action="rdirectivo" enctype="multipart/form-data">
        @csrf

        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <br><label for="id_persona ">ID Persona </label>
                    <input id="id_persona" type="text" class="form-control @error('id_persona') is-invalid @enderror" name="id_persona" value="{{$ultimaP->id_persona}}" required autocomplete="id_persona" autofocus>

                    @error('id_persona')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <label for="profesion">Profesión</label>

                    <input type="text" name="profesion" id="profesion" class="form-control" placeholder="Profesión del Director">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">
                        <span class="glyphicon glyphicon-ok"></span> Guardar</button>
                    <a class="btn btn-info" type="reset" href="{{url('persona')}}"><span class="glyphicon glyphicon-home"></span> Regresar </a>
                </div>
            </div>

        </div>
    </form>
</div>

{!!Form::close()!!}
@endsection