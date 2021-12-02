@extends('adminlte::page')

@section('title', 'Marcas')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Bienvenido a la seccion de Marcas</h1>
            <a class="btn btn-primary" href="{{ Route('mar.agregar') }}" role="button">Crear Marca</a>

            <span></span>
            <br>
            <p></p>

            <table class="table" id="tbmarca">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($marcas as $mar)
                        <tr>
                            <th scope="row">{{ $mar->id }}</th>
                            <td>{{ $mar->nombre_marcas }}</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="{{ Route('mar.buscar', $mar->id) }}"
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
            $('#tbmarca').DataTable();
        });
    </script>

@stop
