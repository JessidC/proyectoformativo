@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="card">
        <div class="card-header">
            <h1>Bienvenido a la seccion de pedidos</h1>
            <a class="btn btn-primary" href="" role="button">Exportar</a>

            <span></span>
            <br>
            <p></p>

            <table class="table" id="tbpedido">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Fecha de Pedido</th>
                        <th scope="col">valor</th>
                        <th scope="col">N factura</th>
                        <th scope="col">Fecha de Pedido</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pedidos as $pe)
                        <tr>
                            <th scope="row">{{ $pe->id_pedidos }}</th>
                            <td>{{ $pe->direccion}}</td>
                            <td>{{ $pe->fecha_pedido }}</td>
                            <td>{{ $pe->valor_total_factura }}</td>
                            <td>{{ $pe->num_factura }}</td>
                            <td>{{ $pe->fecha_fact }}</td>
                            <td>{{ $pe->estado }}</td>
                            <td>
                                <a class="btn btn-success btn-sm" href=""
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
            $('#tbpedido').DataTable();
        });
    </script>
@stop