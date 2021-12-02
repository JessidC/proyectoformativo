@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
    <h1>Subcategorias</h1>
@stop

@section('content')
<div class="card">
      <div class="card-header">
        <h1>Bienvenido a la seccion de SubCategorias</h1>
        <a class="btn btn-primary" href="{{ Route ('sub.agregar')}}" role="button">Crear SubCategoria</a>

        <span></span>
        <br>
        <p></p>

        <table class="table" id="tbcategorias">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Nombre SubCategoria</th>
              <th scope="col">Categoria</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($subcategorias as $sub)
            <tr>
              <th scope="row">{{$sub->id_subcategoria}}</th>
              <td>{{$sub->nombre_subcategoria}}</td>
              <td>{{$sub->nombre_categoria}}</td>
              <td>
                <a class="btn btn-success btn-sm" href="{{ Route ('sub.buscar', $sub->id_subcategoria)}}" role="button">Editar</a>
                <a class="btn btn-danger btn-sm" href="{{ Route ('sub.eliminar', $sub->id_subcategoria)}}" role="button">Eliminar</a>
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


@section('css')

@stop

@section('js')

@stop
