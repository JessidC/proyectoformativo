@extends('adminlte::page')

@section('title', 'Crear Marca')

@section('content_header')
    <h1>Crear Marca</h1>
@stop

@section('content')

<form method="post" action="{{ Route ('mar.guardar')}}">
    @csrf
  <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Crear Marca</button>
  <a class="btn btn-danger" href="{{ Route ('marcas')}}">Cancelar</a>
</form>



@stop

@section('css')

@stop

@section('js')

@stop