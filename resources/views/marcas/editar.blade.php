@extends('adminlte::page')

@section('title', 'Crear Marca')

@section('content_header')
    <h1>Editar Marca</h1>
@stop

@section('content')

<form method="post" action="{{ Route ('mar.actualizar')}}">
    @csrf
  <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" value="{{$marca->nombre_marcas}}">
    <input type="hidden" name="id" class="form-control" value="{{$marca->id}}">
  </div>
  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
  <a class="btn btn-danger" href="{{ Route ('marcas')}}">Cancelar</a>
</form>

@stop

@section('css')

@stop

@section('js')

@stop