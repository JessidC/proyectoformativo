@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="card">
      <div class="card-header">
        <h1>Bienvenido a la seccion de SubCategorias</h1>
        <a class="btn btn-primary" href="{{ Route ('subca.agregar')}}" role="button">Crear Subcategoria</a>

        <span></span>
        <br>
        <p></p>

        <table class="table" id="tbsubcategorias">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">categoria</th>
              <th scope="col">Subcategoria</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($subcategorias as $subca)
            <tr>
              <th scope="row">{{$subca->id_subcategoria}}</th>
              <td>{{$subca->id_categoria}}</td>
              <td>{{$subca->nombre_subcategoria}}</td>

              <td>
              <form action="{{route('subca.eliminar',$subca->id_subcategoria)}}" >
                <a class="btn btn-success" href="{{ Route ('subca.buscar', $subca->id_subcategoria)}}" role="button">Editar</a>
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Borrar</button>
              </form>
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

@stop
