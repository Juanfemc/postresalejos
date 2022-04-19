@extends('layouts.master')
@section('title', 'listado')
@section('sidebar')
  @parent
@stop

@section('sidebar')
@parent
@stop
<!-- ----------------------------------------------------------- -->
@section('content')
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
          <th>Precio</th>
          <th>Descripcion</th>
        </tr>
      </thead>
      <tbody>
        <!-- recorre la lista de postres -->
        echo $postres;
      @foreach($postres as $p)
        <tr>
          <td>
            <p class="fw-bold mb-1">{{$p->nombre}}</p>
          </td>
          <td>
            <p class="fw-bold mb-1">{{$p->precio}}</p>
          </td>
          <td>
            <p class="fw-bold mb-1">{{$p->decripcion}}</p>
          </td>
          <td>
            <a type="buttom" data-mdb-toggle="modal" data-bs-target="#modalEliminar" class="btn badge-danger btn-floating" data-bs-ripple-color="dark">
                Eliminar
            </a>
            <a href="{{route('actualizar_postre',$p->id_postre)}}" class="btn btn-secondary">
                Actualizar
            </a>
            <a href="{{route('detalle_postre',$p->id_postre)}}" class="btn btn-info ">
                Detalle
            </a>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
  <!-- Modal -->
  <form action="{{url('lugares/actualizar')}}" method="post" class="row g-3 needs-validation">
  @csrf
  <div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Desea eliminar el lugar?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
          <a href="{{route('eliminar_postre',$p->id_postre)}}" class="btn btn-primary">Ok</a>
        </div>
      </div>
    </div>
  </div>
</form>
  @stop

  @section('footer')
  @parent
  @stop
