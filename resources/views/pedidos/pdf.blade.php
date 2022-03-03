<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FACTURA COMPRA SEGURA</title>
    <link rel="{{ public_path('css/style.css') }}" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div id="page_pdf">
      <table id="factura_head">
    <tr>
      <td class="logo">
        <div>
          <img src="{{asset('img/logo1.png')}}">
        </div>
      </td>
      <td class="informacion">
        <div>
        <span class="h1">FACTURA COMPRA SEGURA</span>
        <p>SENA SALOMIA - PROYECTO FORMATIVO ADSI-184</p>
        <p>Teléfono: +57 3005672911</p>
        <p>Email: comprasegura@gmail.com</p>
      </div>
      <td class="factura">
        <div class="round">
          <span class="h3">Detalles</span>
          <p>Id. Pedido: <strong>{{$pedidos->id_pedidos}}</strong></p>
          <p>No. Factura: <strong>{{$pedidos->num_factura}}</strong></p>
          <p>Fecha: {{$pedidos->fecha_fact}}</p>
        </div>
      </td>
    </tr>
          </table>
      <table id="factura_detalle">
      <thead>
        <tr>
          <th width="50px">Fecha del pedido</th>
          <th class="center">Direccion</th>
          <th class="center" width="150px">Estado</th>
        </tr>
      </thead>
      <tbody id="detalle_productos">
        <tr>
          <td class="textleft">{{$pedidos->fecha_pedido}}</td>
          <td class="textleft">{{$pedidos->id_direccion}}</td>
          <td class="textleft">{{$pedidos->estado}}</td>
        </tr>
        </tbody>
        <tfoot id="detalle_totales">
          <br/>
          <tr>
          <td colspan="3" class="textcenter"><span>TOTAL PEDIDO</span></td>
          <td class="textcenter"><span>{{$pedidos->valor_total_factura}}</span></td>
        </tr>
        </tfoot>
  </table>
   <div>
    <h4 class="label_gracias">¡Gracias por su compra!</h4>
  </div>

  </body>
</html>

<link href="card/css/style.css" rel="stylesheet" type="text/css">

@section('css')
<style>
   *{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
  align: center;
}
p, label, span, table{
	font-family: 'BrixSansRegular';
	font-size: 10pt;
  align: center;
}
.h2{
	font-family: 'BrixSansBlack';
	font-size: 20pt;
  align: right;
}
.h3{
	font-family: 'BrixSansBlack';
	font-size: 12pt;
	display: block;
	background: #058;
	color: #FFF;
	text-align: center;
	padding: 3px;
	margin-bottom: 5px;
  align: center;
}
#factura_detalle, #factura_head{
	width: 125%;
	margin-bottom: 20px;
}
.logo{
	width: 15%;
}
.label_gracias{
	font-family: verdana;
	font-weight: bold;
	font-style: italic;
	text-align: center;
	margin-top: 20px;
}
.textright{
	text-align: center;
}
.textleft{
	text-align: center;
}
.textcenter{
	text-align: center;
}
.round{
	border-radius: 10px;
	border: 1px solid #0a4661;
	overflow: hidden;
	padding-bottom: 20px;
}
.round p{
	padding: 0 20px;
}
#factura_detalle{
  

}
#factura_detalle thead th{
	background: #058;
	color: #FFF;
	padding: 5px;
  text-align: center;
  width: 100%;
  
}
#detalle_productos tr:nth-child(even) {
    background: #ededed;
    width: 30%;
    text-align: center;
}
#detalle_totales span{
  width: 30%;
	font-family: 'BrixSansBlack';
  text-align: right;
}
.informacion{
	width: 30%;
	text-align: center;
}
.factura{
	width: 40%;
  text-align: center;

	}
#page_pdf{
	width:60%;
	margin: 20px auto 20px auto;
  text-align: center;
  align: center;
	}
    </style>
@endsection