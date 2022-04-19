@extends('layouts.master')

@section('tittel','postres')

@section('sidebar')
      @parent
@stop


@section('content')
          <h1>Postres Alejos</h1>
          <div class="alert alert-primary " role="alert">
              postres hechos a tu gusto y medida
              <h1>Te esperamos</h1>
          </div>
          <img src="{{url('/assets/imagenes/1.jpg')}}">
@stop
