@extends('layouts.master')

@section('title','Listado Postres')

@section('sidebar')
@parent
@stop

@section('content')

<div class="container ">
    <div class=" d-flex flex-row  align-items-center justify-content-center">
     
        <div class=" ml-4">

            <form action="{{url('postre/actualizar')}}" method="post" class="shadow-4 rounded-5 overflow-hidden" style="margin: 10px; padding: 30px; ">
                @csrf

                <h5 class="text-align-cneter  ">Update Employee</h5>

                    <!-- esto viene de la base de datos -->
                <input type="text" hidden="true" id="id_postre" aria-describedby="postre" placeholder="Enter name" name="id_postre" value="{{$postre->id_postre}}">

                <div class="form-outline mb-4 mt-4 ">
                    <input type="text" class="form-control" id="nombre_postre" aria-describedby="nombre_postre"  name="nombre_postre" value="{{$postre->nombre}}">
                    <label class="form-label" for="cor_cli">Ingrese nombre</label>
                </div>
                <div class="form-outline mb-4">

                    <input type="text" class="form-control" id="precio_postre" aria-describedby="precio_postre"  name="precio_postre" value="{{$postre->precio}}">
                    <label class="form-label" for="cor_cli">Ingrese el telefono</label>
                </div>
                <div class="form-outline mb-4">

                    <input type="text" class="form-control" id="descripcion_postre"  name="descripcion_postre" value="{{$postre->decripcion}}">
                    <label class="form-label" for="cor_cli">Ingrese descripcion</label>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@stop

@section('footer')
@parent
@stop