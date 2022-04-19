@extends('layouts.master')
@section('title', 'Postre')
@section('sidebar')
    @parent
@stop
@section('content')
<h1>Anuncio</h1><br/>
<form action="{{url('postre/registro')}}" method="post" class="row g-3 needs-validation">
  @csrf

  <div class="row">
      <div class="col-md-4">
        <label for="lugar" class="form-label">Nombre Postre</label>
        <input type="text" class="form-control" id="nombre_postre" name="nombre_postre"  required>
      </div>
      <div class="col-md-4">
        <label for="tipo_prop" class="form-label">Precio</label>
        <input type="number" class="form-control" id="precio_postre" name="precio_postre"  required>
      </div>

      <div class="col-md-4">
        <label for="tipo_prop" class="form-label">detalle</label>
        <input type="text" class="form-control" id="descipcion_postre" name="descipcion_postre"  required>
      </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Aceptar</button>
  </div>
</div>
</form>
@stop