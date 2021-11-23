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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <h3 class="card-header">{{ __('Crear Perfil Estudiante') }} </h3>

                <br>
                <div class="card-body">
                    <form method="POST" action="restudiante" enctype="multipart/form-data">
                        @csrf

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <br><label for="id_persona ">ID Persona </label>
                                <input type="text" name="id_persona" id="id_persona" class="form-control" placeholder="ID Persona" value="{{$ultimaP->id_persona}}" required autocomplete="id_persona" autofocus>


                                <br> <label for="programa">Programa Académico: </label>

                                <select name="programa" id="programa" class="select">
                                    <option value="Tecnología en Producción Industria">Tecnología en Producción Industria</option>
                                    <option value="Tecnología en Sistemas de Información">Tecnología en Sistemas de Información</option>
                                    <option value="Tecnología en Electrónica Industrial">Tecnología en Electrónica Industrial</option>
                                    <option value="Tecnología en Mecatrónica Industrial">Tecnología en Mecatrónica Industrial</option>
                                    <option value="Ingeniería de Sistemas">Ingeniería de Sistemas</option>
                                    <option value="Ingeniería Electrónica">Ingeniería Electrónica</option>
                                    <option value="Ingeniería Industrial">Ingeniería Industrial</option>

                                    <option value="Tecnología en Contabilidad Sistematizad">Tecnología en Contabilidad Sistematizad</option>
                                    <option value="Tecnología en Gestión Contable y Financiera">Tecnología en Gestión Contable y Financiera</option>
                                    <option value="Tecnología en Gestión Empresarial">Tecnología en Gestión Empresarial</option>
                                    <option value="Tecnología en Mercadeo y Negocios Internacionales">Tecnología en Mercadeo y Negocios Internacionales</option>
                                    <option value="Contaduría Pública">Contaduría Pública</option>
                                    <option value="Administración de Empresas">Administración de Empresas</option>
                                </select>

                            </div>

                            <label for="semestre">Semestre: </label>

                            <select name="semestre" id="semestre" class="select">
                                <option value="Semestre 1">Semestre 1</option>
                                <option value="Semestre 2">Semestre 2</option>
                                <option value="Semestre 3">Semestre 3</option>
                                <option value="Semestre 4">Semestre 4</option>
                                <option value="Semestre 5">Semestre 5</option>
                                <option value="Semestre 6">Semestre 6</option>
                                <option value="Semestre 7">Semestre 7</option>
                                <option value="Semestre 8">Semestre 8</option>
                                <option value="Semestre 9">Semestre 9</option>
                                <option value="Semestre 10">Semestre 10</option>

                            </select>

                            <label for="jornada">Jornada: </label>
                            <select name="jornada" id="jornada" class="select">
                                <option value="Diurna">Diurna</option>
                                <option value="Nocturna">Nocturna</option>
                                <option value="FinSemana">Fin de Semana</option>
                            </select>
                            <br> <br>
                            <label for="grupo">Grupo</label>
                            <input type="text" name="grupo" id="grupo" class="form-control" placeholder="Numero de Grupo">

                            <br> <button class="btn btn-primary" type="submit">
                                <span class="glyphicon glyphicon-ok"></span> Guardar</button> <button class="btn btn-danger" type="reset">
                                <span class="glyphicon glyphicon-remove"></span> Vaciar Campos</button>
                            <a class="btn btn-info" type="reset" href="{{url('persona')}}"><span class="glyphicon glyphicon-home"></span> Regresar </a>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection