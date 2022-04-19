@extends('layouts.master')

@section('title','Listado cliente')

@section('sidebar')
@parent
@stop

@section('content')

<div class="container ">
    <div class=" d-flex flex-row  align-items-center justify-content-center">
     
        <div class=" ml-4">

            <form action="{{url('cliente/actualizar')}}" method="post" class="shadow-4 rounded-5 overflow-hidden" style="margin: 10px; padding: 30px; ">
                @csrf

                <h5 class="text-align-cneter  ">Update Employee</h5>

                    <!-- esto viene de la base de datos -->
                <input type="text" hidden="true" id="id_cliente" aria-describedby="cliente" placeholder="Enter name" name="id_cliente" value="{{$cliente->id_cliente}}">

                <div class="form-outline mb-4 mt-4 ">
                    <input type="text" class="form-control" id="nombre_cliente" aria-describedby="nombre_cliente"  name="nombre_cliente" value="{{$cliente->nombre}}">
                    <label class="form-label" for="cor_cli">ingrese nombre</label>
                </div>
                <div class="form-outline mb-4">

                    <input type="text" class="form-control" id="telefono_cliente" aria-describedby="telefono_cliente"  name="telefono_cliente" value="{{$cliente->telefono}}">
                    <label class="form-label" for="cor_cli">Ingrese el telefono</label>
                </div>
                <div class="form-outline mb-4">

                    <input type="text" class="form-control" id="correo_cliente"  name="correo_cliente" value="{{$cliente->correo}}">
                    <label class="form-label" for="cor_cli">Ingrese el correo</label>
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