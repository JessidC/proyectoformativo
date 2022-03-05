
@extends('adminlte::page')

@section('title', 'Editar Direccion')

@section('content_header')
    <h1>Editar Direccion</h1>
    @stop

@section('content')

<form method="post" action="{{ Route ('dir.buscar')}}">
    @csrf
 
    <div class="mb-3">
        <label class="form-label">direccion</label>
        <input type="text" name="direccion" class="form-control" value="{{$direccion->direccion}}">

    </div>
    <div class="mb-3">
        <label class="form-label">barrio</label>
        <input type="barrio" name="barrio" class="form-control" value="{{$direccion->barrio}}">
        <input type="hidden" name="id" class="form-control" value="{{$direccion ->barrio}}">
    </div>
   
    <div class="mb-3">
        <label class="form-label">municipio</label>
      @foreach($municipio as muni)
      <option value="{{$muni->id_municipio}}" >{{$muni->nombre_municipio}}</option>
                {{-- @if ({{ $muni->id_municipio == $direccion->id_municipio }})
                <option value="{{$muni->id_municipio}}" selected >{{$muni->nombre_municipio}}</option>
                 @else --}}
<option value="{{$muni->id_municipio}}" {{$direccion->id_municipio == $muni->id_municipio ? 'selected' : ''}}>{{$muni->nombre_municipio}}</option>
                {{-- @endif --}}



        <input type="text" name="municipio" class="form-control" value="{{$dir->nombre_municipio}}">
        <input type="hidden" name="id_municipio" class="form-control" value="{{$dir->id_direccion}}">
      @endforeach
      </div>

 
  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
  <a class="btn btn-danger" href="{{ Route ('direccion')}}">Cancelar</a>


</form>

@stop

@section('css')

@stop

@section('js')

@stop
