@extends('adminlte::page')

@section('title', 'Subcategorias')

@section('content_header')
    <h1>Subcategorias</h1>
@stop

@section('content')
<div class="card">
      <div class="card-header">
        <h1>Bienvenido a la seccion de Subcategorias</h1>
        <a class="btn btn-primary" href="{{ Route ('sub.agregar')}}" role="button">Crear Subcategoria</a>

        <span></span>
        <br>
        <p></p>

        <table class="table" id="tbsubcategorias">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Nombre Subcategoria</th>
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
                <a class="btn btn-success btn-sm" href="{{ Route('sub.buscar', $sub->id_subcategoria) }}" role="button">Editar</a>
                @if ($sub->estado == 1)
                <a class="btn btn-danger btn-sm" href="{{ Route('sub.eliminar', $sub->id_subcategoria) }}"
                  role="button">Desactivar</a>
                @else
                <a class="btn btn-warning btn-sm" href="{{ Route('sub.eliminar', $sub->id_subcategoria) }}"
                  role="button">Activar</a>
                @endif
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
    $('#tbsubcategorias').DataTable();
} );
</script>
@stop


@section('css')

@stop

@section('js')

@stop
