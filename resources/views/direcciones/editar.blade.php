
@extends('adminlte::page')

@section('title', 'Editar Direccion')

@section('content_header')
    <h1>Editar Direccion</h1>
    @stop

@section('content')

<form method="post" action="{{ Route ('dir.actualizar')}}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">direccion</label>
        <input type="text" name="direccion" class="form-control" value="{{$direccion->direccion}}">

    </div>
    <div class="mb-3">
        <label class="form-label">barrio</label>
        <input type="barrio" name="barrio" class="form-control" value="{{$direccion->barrio}}">
        <input type="hidden" name="id" class="form-control" value="{{$direccion ->id_direccion}}">
    </div>



    <div class="mb-3">
      <label for="exampleFormControlSelect1">Municipio</label>
        <select class="form-control" name="municipio">
        @foreach($municipios as $muni)

            @if( $muni->id_municipio == $direccion->id_municipio)
          
            <option value="{{ $muni->id_municipio }}"selected >{{$muni->nombre_municipio}}</option>

            @else

            <option value="{{ $muni->id_municipio }}">{{$muni->nombre_municipio}}</option>
            @endif
            
           @endforeach           
        </select>
    </div>
   

    
   
    <!--<div class="mb-3">
        <label class="form-label">municipio</label>
      <select name="municipio" >
      @foreach($municipios as $muni)
        <option value="{{$muni->id_municipio}}" {{$muni->id_municipio == $direccion->id_municipio ?  'selected' : ''}} >{{$muni->nombre_municipio}}</option> //uso del if ternario
        @endforeach
        </select>
      </div>-->

 
  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
  <a class="btn btn-danger" href="{{ Route ('direccion')}}">Cancelar</a>


</form>

@stop

@section('css')

@stop

@section('js')

@stop
