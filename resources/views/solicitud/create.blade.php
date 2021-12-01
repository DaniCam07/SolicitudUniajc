@extends('layouts.plantilla')
@section('contenido')

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<h3>Formulario de Solicitudes</h3>
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
{!!Form::open(array('url'=>'solicitud','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}
@foreach($estudiantes as $est)
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="form-group">
     <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre y Apellidos" value="{{$est->nombre}}">
    
     </div> 
    </div>  
     <br/>

     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="form-group">
    <br> <label for="jornada">Jornada</label>
    <select name="malla" id="jornada">
        <option value="1">Noche</option>
        <option value="2">Mañana</option>
    </select>
    </div> 
    </div>
    <br/>
   
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="form-group">
    <input type="text" name="email" id="email" class="form-control" placeholder="E-mail" value="{{$est->correo}}">
    </div> 
    </div>
    <br/>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="form-group">
    <br> <label for="tipodoc">Tipo de Documento</label>
    <select name="tipodoc" id="tipodoc">
        <option value="Ti">Ti</option>
        <option value="Cc">Cc</option>
    </select>
    </div> 
    </div>
    <br/>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="form-group">
    <input type="text" name="programa" id="programa" class="form-control" placeholder="Programa Academico" value="{{$est->programa}}">
    </div> 
    </div>
    <br/>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="form-group">
    <input type="text" name="numerodoc" id="numerodoc" class="form-control" placeholder="No.Documento" value="{{$est->id_estudiante}}" >
    </div> 
    </div>
    <br/>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
    <br> <label for="semestre">Semestre</label>
    <select name="semestre" id="">
        <option value="semestre-1">semestre-1</option>
        <option value="semestre-2">semestre-2</option>
        <option value="semestre-2">semestre-3</option>
        <option value="semestre-2">semestre-4</option>
        <option value="semestre-2">semestre-5</option>
        <option value="semestre-2">semestre-6</option>
        <option value="semestre-2">semestre-7</option>
        <option value="semestre-2">semestre-8</option>
        <option value="semestre-2">semestre-9</option>
        <option value="semestre-2">semestre-10</option>
    </select>
    </div> 
    </div>
    <br/>
    
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="form-group">
    <input type="date" name="fecha" id="fecha" class="form-control" placeholder="Fecha">
    </div> 
    </div>
    <br/>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="form-group">
    <input type="grupo" name="grupo" id="grupo" class="form-control" placeholder="Grupo">
    </div> 
    </div>
    <br/>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="form-group">
    <input type="telefono" name="telefono" id="fecha" class="form-control" placeholder="Telefono">
    </div> 
    </div>
    <br/>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="form-group">
    <input type="time" name="hora" id="hora" class="form-control" placeholder="Hora">
    <br/>
    </div> 
    </div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="form-group">
    <br> <label for="tipo">Tipo de Cita</label>
    <select name="tipo" id="">
        <option value="Adicion de Asignatura">Adicion de Asignatura</option>
        <option value="Cancelar  Asignatura">Cancelar de Asignatura</option>
        <option value="Cita con Director de Programa">Cita con Director de Programa</option>
    </select>
    </div> 
    </div>
    <br/>
    <div class="form-group">
   <label>Observacion</label>
    <textarea name="descripcion" rows="3" cols="20" class="form-control tinymce-editor"></textarea>
</div>  
    <br/>
    <button class="btn btn-primary "type="submit"> <span class="glyphicon glyphicon-ok"></span>Guardar</button>
    <button class="btn btn-danger "type="reset"><span class="glyphicon glyphicon-remove"></span>Vaciar Campos</button>
    <a class="btn btn-info"type="reset"href="{{url('solicitud')}}"><span class="glyphicon glyphicon-home"></span>Regresar </a>
    
</div>
@endforeach
    {!!Form::close()!!}     
    
    @endsection
