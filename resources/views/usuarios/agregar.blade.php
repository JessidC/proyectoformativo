@extends('adminlte::page')

@section('title', 'Crear Categoria')

@section('content_header')
    <h1>Crear Usuario</h1>
@stop

@section('content')

<form method="post" action="{{ Route ('usu.guardar')}}">
    @csrf
  <div class="mb-3">
  </div>
    <label class="form-label">Nombre</label>
    <input type="text" name="name" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Documento</label>
    <input type="number" name="documento" class="form-control">
  </div>
  
  <div class="mb-3">
    <label class="form-label">Celular</label>
    <input type="number" name="celular" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="text" name="email" class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label">Contrasena</label>
    <input type="password" name="contrasena" class="form-control">
  </div>



  <button type="submit" class="btn btn-primary">Crear Usuario</button>
  <a class="btn btn-danger" href="{{ Route ('users')}}">Cancelar</a>
</form>



@stop

@section('css')

@stop

@section('js')

@stop