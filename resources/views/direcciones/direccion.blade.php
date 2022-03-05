@extends('adminlte::page')

@section('title', 'Direccion')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card">
      <div class="card-header">
        <h1>Bienvenido a las Direcciones</h1>
       <span></span>
        <br>
        <p></p>

        <table  id="tbdireccion" class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Usuario</th>
              <th scope="col">Direccion</th>
              <th scope="col">Barrio</th>
              <th scope="col">Municipio</th>
              <th scope="col">Acciones</th>
             
            </tr>
          </thead>
          <tbody>
              @foreach ($direccion as $dir)
            <tr>
              <th scope="row">{{$dir->id_direccion}}</th>
              <td>{{$dir->name}}</td>
              <td>{{$dir->direccion}}</td>
              <td>{{$dir->barrio}}</td>
              <td>{{$dir->nombre_municipio}}</td>
              <td>
                <a class="btn btn-success btn-sm" href="{{ Route ('dir.buscar', $dir->id_direccion)}}" role="button">Editar</a>
                
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
    $('#tbdireccion').DataTable();
} );
</script>
@stop
