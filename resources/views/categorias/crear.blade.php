@extends('adminlte::page')

@section('title', 'Crear Categoria')

@section('content_header')
    <h1>Crear Categoria</h1>
@stop

@section('content')

<form method="post" action="{{ Route ('cat.guardar')}}">
    @csrf
  <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Crear Categoria</button>
  <a class="btn btn-danger" href="{{ Route ('categorias')}}">Cancelar</a>
</form>



@stop

@section('css')

@stop

@section('js')

@stop