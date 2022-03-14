@extends('adminlte::page')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Bienvenido a la seccion de Usuarios</h1>
            <a class="btn btn-primary" href="{{ Route('usu.agregar') }}" role="button">Crear Usuario</a>

            <span></span>
            <br>
            <p></p>

            <table class="table" id="tbusers">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Name</th>
              <th scope="col">email</th>
              <th scope="col">Celular</th>
              <!--<th scope="col">Contrasena</th>-->
              <th scope="col">documento</th>
              
              <th scope="col">tipos_id_tipo</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($usuario as $u)
            <tr>
              <th scope="row">{{$u->id}}</th>
              <td>{{$u->name}}</td>
              <td>{{$u->email}}</td>
              <td>{{$u->celular}}</td>
              <!--<td>{{$u->password}}</td>-->
              <td>{{$u->documento}}</td>
              
              <td>{{$u->nombre_tipo}}</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="{{ Route('usu.buscar', $u->id) }}"
                                    role="button">Editar</a>
                                    
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
            $('#tbusers').DataTable();
        });
    </script>

@stop
