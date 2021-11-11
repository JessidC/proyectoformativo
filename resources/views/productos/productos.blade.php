@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card">
      <div class="card-header">
        <h1>Bienvenido a la seccion de productos</h1>
        <a class="btn btn-primary" href="{{ Route ('pro.agregar')}}" role="button">Crear Producto</a>
        
        <span></span>
        <br>
        <p></p>

        <table class="table" id="tbproductos">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Precio</th>
              <th scope="col">Descuento</th>
              <th scope="col">Garantia</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($productos as $p)
            <tr>
              <th scope="row">{{$p->id_producto}}</th>
              <td>{{$p->nombre_producto}}</td>
              <td>{{$p->descripcion_producto}}</td>
              <td>{{$p->valor_actual}}</td>
              <td>{{$p->descuento}}</td>
              <td>{{$p->garantia}}</td>
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
    $('#tbproductos').DataTable();
} );
</script>
@stop
