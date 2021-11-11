@extends('adminlte::page')

@section('title', 'Ofertas')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="card">
      <div class="card-header">
        <h1>Bienvenido a la seccion de Ofertas</h1>
        <a class="btn btn-primary" href="{{ Route ('ofer.agregar')}}" role="button">Crear Oferta</a>
        
        <span></span>
        <br>
        <p></p>
        
        <table class="table" id="tbofertas">
          <thead>
            <tr>
              <th scope="col">id Oferta</th>
              <th scope="col">Nombre</th>
              <th scope="col">Valor</th>

            </tr>
          </thead>
          <tbody>
              
            <tr>
              <th></th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            
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
    $('#tbofertas').DataTable();
} );
</script>
@stop