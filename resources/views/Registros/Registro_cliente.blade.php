@extends('layouts.master')
@section('title','Cliente')
@section('sidebar')
    @parent
@stop
@section('content')
<h1>Registrar</h1><br/>
<form action="{{url('cliente/registro')}}" method="post" class="row g-3 needs-validation">
  @csrf

  <div class="row">
      <div class="col-md-4">
        <label for="nombre_cliente" class="form-label">Nombre cliente</label>
        <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente"  required>
      </div>
      <div class="col-md-4">
        <label for="telefono_cliente" class="form-label">Telefono</label>
        <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente"  required>
      </div>

      <div class="col-md-4">
        <label for="correo_cliente" class="form-label">Correo</label>
        <input type="text" class="form-control" id="correo_cliente" name="correo_cliente"  required>
      </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Aceptar</button>
  </div>
</div>
</form>
@stop