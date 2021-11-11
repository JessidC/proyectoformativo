@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Aqui es el codigo de mis productos.</p>

    <h1>Bienvenido a la seccion de productos</h1>

    <a class="btn btn-primary" href="{{ Route ('pro.agregar')}}" role="button">Crear Producto</a>
    
    <span></span>
    <br>
    <p></p>

    <table class="table">
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
   
@stop

@section('css')

@stop

@section('js')

@stop
