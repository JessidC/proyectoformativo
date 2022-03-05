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
    <table  id="tbproductos" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr> 
              <th scope="col">id</th>
            <!--  <th scope="col">Subcategoria</th>-->
              <th scope="col">Nombre</th>
              <th scope="col">Cantidad</th>
              <th scope="col">Precio</th>
              <th scope="col">Marca</th>
              <th scope="col">Descripcion</th>
             <!-- <th scope="col">imagen</th>-->
              <th scope="col">Descuento</th>
              <th scope="col">Garantia</th>
              <!--<th scope="col">Usuario</th>-->
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($productos as $pro)
            <tr>
              <th scope="row">{{$pro->id_producto}}</th>
              <!-- <td>{{$pro->nombre_subcategoria}}</td>-->
              <td>{{$pro->nombre_producto}}</td>
              <td>{{$pro->cantidad_existente}}</td>
              <td>{{$pro->valor_actual}}</td>
              <td>{{$pro->marcas_id_marcas}}</td>
              <td>{{$pro->descripcion_producto}}</td>
              <td>{{$pro->descuento}}</td>
              <td>{{$pro->garantia}}</td>
              <!--<td>{{$pro->users_id}}</td>-->
            </tr>


            @endforeach
          </tbody>
        </table>
</body>
</html>