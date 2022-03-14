@extends('adminlte::page')

@section('title', 'Editar Categoria')

@section('content_header')
    <h1>Editar Usuario</h1>
@stop

@section('content')

<form method="post" action="{{ Route ('usu.actualizar')}}">
    @csrf
  <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" value="{{$Usuario->name}}">
    <input type="hidden" name="id" class="form-control" value="{{$Usuario->id}}">
  </div>

 
    <div class="mb-3">
        <label class="form-label">E-mail</label>
        <input type="text" name="mail" class="form-control" value="{{$Usuario->email}}">
        <input type="hidden" name="id" class="form-control" value="{{$Usuario->id}}">
    </div>
    <div class="mb-3">
        <label class="form-label">ContraseÃ±a</label>
        <input type="password" name="mail" class="form-control" value="{{$Usuario->password}}">
        <input type="hidden" name="id" class="form-control" value="{{$Usuario->id}}">
    </div>

    <div class="mb-3">
      <label for="exampleFormControlSelect1">Roles</label>
        <select class="form-control" name="tipo">
        @foreach ($tipos as $ti)

            @if( $ti->id == $Usuario->tipos_id_tipo)
          
            <option value="{{ $ti->id }}"selected >{{$ti->nombre_tipo}}</option>

            @else

            <option value="{{ $ti->id }}">{{$ti->nombre_tipo}}</option>
            @endif
            
           @endforeach           
        </select>
    </div>
   

 
  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
  <a class="btn btn-danger" href="{{ Route ('users')}}">Cancelar</a>
</form>

@stop

@section('css')

@stop

@section('js')

@stop