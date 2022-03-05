<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Document </title>
       <!-- <link href="{{ public_path('css/app.css') }}" rel="stylesheet"> -->
       <link rel="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
</body>
</html>
