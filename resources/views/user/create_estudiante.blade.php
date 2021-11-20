@extends('layouts.plantilla')
@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Crear Perfil Estudiante</h3>
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

{!!Form::open(array('url'=>'estudiante','method'=>'POST','autocomplete'=>'off'))!!} {{Form::token()}}


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">



                <div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <br><label for="id_persona ">id_persona </label>
                        <input type="text" name="id_persona " id="id_persona " class="form-control" placeholder="id_persona ">
                    </div>
                </div>
                <div class="form-group">
                    <label for="programa">Programa Academico: </label>

                    <select name="programa" class="select">
                        <option value="Cedula de Ciudadania">Tecnología en Producción Industria</option>
                        <option value="Tarjeta de identidad">Tecnología en Sistemas de Información</option>
                        <option value="Cedula Extranjera">Tecnología en Electrónica Industrial</option>
                        <option value="Cedula de Ciudadania">Tecnología en Mecatrónica Industrial</option>
                        <option value="Tarjeta de identidad">Ingeniería de Sistemas</option>
                        <option value="Cedula Extranjera">Ingeniería Electrónica</option>
                        <option value="Cedula Extranjera">Ingeniería Industrial</option>

                        <option value="Tecnología en Contabilidad Sistematizad">Tecnología en Contabilidad Sistematizad</option>
                        <option value="Tecnología en Gestión Contable y Financiera">Tecnología en Gestión Contable y Financiera</option>
                        <option value="Tecnología en Gestión Empresarial">Tecnología en Gestión Empresarial</option>
                        <option value="Tecnología en Mercadeo y Negocios Internacionales">Tecnología en Mercadeo y Negocios Internacionales</option>
                        <option value="Contaduría Pública">Contaduría Pública</option>
                        <option value="Administración de Empresas">Administración de Empresas</option>
                    </select>
                </div>
                <div>
                    <div class="form-group">
                        <label for="semestre">Semestre: </label>

                        <select name="semestre" class="select">
                            <option value="1">Semestre 1</option>
                            <option value="2">Semestre 2</option>
                            <option value="3">Semestre 3</option>
                            <option value="4">Semestre 4</option>
                            <option value="5">Semestre 5</option>
                            <option value="6">Semestre 6</option>
                            <option value="7">Semestre 7</option>
                            <option value="8">Semestre 8</option>
                            <option value="9">Semestre 9</option>
                            <option value="10">Semestre 10</option>

                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="jornada">Jornada: </label>

                    <select name="jornada" class="select">
                        <option value="Diurna">Diurna</option>
                        <option value="Nocturna">Nocturna</option>
                        <option value="FinSemana">Fin de Semana</option>
                    </select>
                </div>
                <div>
                    <div class="form-group">
                        <label for="grupo">Grupo</label>
                        <input type="text" name="grupo" id="grupo" class="form-control" placeholder="Numero de Grupo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Registrar') }}
            </button>
        </div>
    </div>
</div>
{!!Form::close()!!}
@endsection