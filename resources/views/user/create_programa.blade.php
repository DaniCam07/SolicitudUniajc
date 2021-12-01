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

                <h3 class="card-header">{{ __('Crear Perfíl Director de Programa') }} </h3>

                <br>
                <div class="card-body">
                    <form method="POST" action="rprograma" enctype="multipart/form-data">
                        @csrf

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <br><label for="id_persona ">ID Director:</label>
                                <input type="text" name="id_director" id="id_director" class="form-control" placeholder="ID Director" value="{{$ultimaD->id_director}}" required autocomplete="id_persona" autofocus>


                                <br> <label for="nombre">Programa Académico:</label>
                                <select name="nombre" id="nombre" class="select">
                                    <option selected disabled>Programa Académico...</option>
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

                                <br><br> <label for="facultad">Facultad:</label>
                                <br><select name="facultad" id="facultad" class="select">
                                    <option selected disabled>Facultad...</option>
                                    <option value="Facultad de Ingenirías">Facultad de Ingenirías</option>
                                    <option value="Facultad de Ciencias Empresariales">Facultad de Ciencias Empresariales</option>
                                </select>

                            </div>
                        
                            <label for="direccion">Dirección:</label>
                            <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Dirección">
                        
                            <br>
                            <label for="telefono">Teléfono:</label>
                            <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Teléfono">

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