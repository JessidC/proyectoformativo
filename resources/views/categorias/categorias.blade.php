@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="card">
      <div class="card-header">
        <h1>Bienvenido a la seccion de Categorias</h1>
        <a class="btn btn-primary" href="{{ Route ('cat.agregar')}}" role="button">Crear Categoria</a>
        
        <span></span>
        <br>
        <p></p>

        <table class="table" id="tbcategorias">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Editar</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($categorias as $cat)
            <tr>
              <th scope="row">{{$cat->id_categoria}}</th>
              <td>{{$cat->nombre_categoria}}</td>
              <td>
                <a class="btn btn-success btn-sm" href="{{ Route ('cat.buscar', $cat->id_categoria)}}" role="button">Editar</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div> 
@stop

@section('css')

@stop

@section('js')
<script>
$(document).ready(function() {
    $('#tbcategorias').DataTable();
} );
</script>
@stop