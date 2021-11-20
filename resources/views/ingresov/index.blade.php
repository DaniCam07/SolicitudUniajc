@extends('layouts.plantilla')
@section('contenido')

<div>

    <div class="col-md-8 col-xs-12"> 
        @include('ingresov.search') 
    </div> 

    <div class="col-md-2"> 
        <a href="{{ url('ingresov/create')}}" class="pull-right"> 
            <button class="btn btn-success">Ingreso de Vehiculo</button> 
        </a> 
    </div>

</div>

<div class="row"> 
    <div class="col-md-12 col-xs-12"> 
        <div class="table-responsive"> 
            <table class="table table-striped table-hover"> 
                <thead> 
                    <th>Id</th> 
                    <th>Placa</th> 
                    <th>Fecha Ingreso</th> 
                    <th>Estado</th> 
                    <th >Opciones</th> 
                </thead> 
                <tbody> 
                    @foreach($ingresov as $sv) 
                    <tr> 
                        <td>{{ $sv->id }}</td> 
                        <td>{{ $sv->vehiculos->placa}}</td> 
                        <td>{{ $sv->fecha_ingreso }}</td> 
                        <td>{{ $sv->estado}}</td> 
                        <td> <a href=""><button class="btn btn-primary">Salida</button></a></td> 
                    </tr> 
                    @endforeach 
                </tbody> 
            </table> 
        </div> 
        {{$ingresov->links()}} 
    </div> 
</div>

@endsection