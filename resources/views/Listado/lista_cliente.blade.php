@extends('layouts.master')
@section('title', 'listado')
@section('sidebar')
  @parent
@stop

@section('sidebar')
@parent
@stop
<!-- ---------------------------- -->
@section('content')
<form action="{{url('client/register')}}" method="post" class="row g-3 needs-validation">
@csrf
<div class="container my-5">
  <div class="shadow-4 rounded-5 overflow-hidden">

    <div class="row">
      <div class="col-8">
        <a href="{{url('client/register')}}" class="btn badge-success p1" style="color: white;">
          <i class="fas fa-add"> Add Client</i>
        </a>

      </div>
      <div class="col-4">
        <div class="input-group ">
          <div class="form-outline">
            <input type="search" id="form1" class="form-control"/>
            <label class="form-label" for="form1">Search</label>
          </div>
          <button type="button" class="btn btn-primary ">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </div>


    <table class="table align-middle bg-white">
      <thead>
        <tr class="bg-light">
          <th>Nombre</th>
          <th>Telefono</th>
          <th>Correo</th>
        </tr>
      </thead>
      <tbody>
        <!-- recorre la lista de clientes -->
        echo $cliente;
      @foreach($clientes as $c)
        <tr>
          <td>
            <p class="fw-bold mb-1">{{$c->nombre}}</p>
          </td>
          <td>
            <p class="fw-bold mb-1">{{$c->telefono}}</p>
          </td>
          <td>
            <p class="fw-bold mb-1">{{$c->correo}}</p>
          </td>
          <td>
          <!--  <button type="button" data-mdb-toggle="modal" data-bs-target="#modalEliminar" class="btn badge-danger btn-floating" data-bs-ripple-color="dark">
                Eliminar
            </button>-->
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalEliminar">Eliminar</button>
            <a href="{{route('actualizar_cliente',$c->id_cliente)}}" class="btn btn-secondary">
                Actualizar
            </a>
            <a href="{{route('detalle_cliente',$c->id_cliente)}}" class="btn btn-info ">
                Detalle
            </a>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</form>
  <!-- Modal -->
  <form action="{{route('eliminar_cliente')}}" method="get" class="row g-3 needs-validation">
  @csrf

  <div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Desea eliminar el cliete?
            <input type="text"  id="id_eli" name="id_eli"/>
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
          <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">ok</button>
        </div>
      </div>
    </div>
  </div>
</form>



  @stop

  @section('footer')
  @parent
  @stop
