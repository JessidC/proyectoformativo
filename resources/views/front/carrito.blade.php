@extends('layouts.app')

@section('titulo')
Compra Segura
@endsection

@section('content')

<nav class="navbar navbar-expand-lg  navbar-light bg-light">
  <div class="container px-20 px-lg-20">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Compra Segura</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <div class="container px-15 px-lg-15">
      <div class="collapse navbar-collapse " id="main_nav">
        <ul class="navbar-nav">
          <li class="nav-item active"> <a class="nav-link" href="{{ Route ('welcome') }}">Home </a> </li>
          <li class="nav-item"><a class="nav-link" href="{{ Route ('info') }}"> About </a></li>
          <li class="nav-item dropdown" id="myDropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Categorias</a>
            <ul class="dropdown-menu">
              @foreach ($categorias as $ca)
              @if($ca->estado=="1")
              <li> <a class="dropdown-item" value="{{$ca->id_categoria}}">{{$ca->nombre_categoria}} &raquo; </a>
                @endif
                <ul class="submenu dropdown-menu">
                  @foreach ($subcategoria as $sub)
                  @if( $sub->id_categoria == $ca->id_categoria)
                  <li><a class="dropdown-item" href="{{ Route ('vProductos', $sub->id_subcategoria)}}">{{$sub->nombre_subcategoria}}</a></li>
                  @endif
                  @endforeach
                </ul>
              </li>
              @endforeach

            </ul>
          <li class="nav-item"><a class="nav-link" href="/proyectoformativo/public/perfil">Mi Perfil</a></li>

          <li class="nav-item"><a class="nav-link" href="{{ Route ('historialpedidos') }}">Pedidos</a></li>
          <li class="nav-item dropdown" id="myDropdown">

          </li>
          <li class="nav-item dropdown" id="myDropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Ayuda</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ Route ('pecu') }}">PQRS</a></li>
              <li><a class="dropdown-item" href="{{ Route ('preguntas') }}">Preguntas frecuentes</a></li>
            </ul>
      </div>
      </li>

      <li class="nav dropdown">
        <a class="btn btn-outline-dark" height="70px" type="button" width="70px" id="dropdown01" href="{{ Route ('existenteCarrito') }}">
          <i class="bi-cart-fill me-1"></i>
          Carrito
          <span class="badge bg-dark text-white ms-1 rounded-pill">0</span></a>

      </li>

      </ul>

    </div>


  </div>
  <!-- navbar-collapse.// -->
  </div>
  <!-- container-fluid.// -->
  </div><!-- centrado.// -->
</nav>


<div id="info-table">
	<h1>Carrito de Compras</h1>
	<table id="mytable" width="1200" align="center">

		<div class="container px-4 px-lg-5">
			<div class="alert alert-primary text-center">

			</div>
		</div>
</div>
<tr>
	<th><input type="checkbox" id="allCheck" onclick="selectAll()" />SELECCIONAR TODO</th>
	<th>COMPRA SEGURA</th>
	<th>PRECIO C/U</th>
	<th>CANTIDAD</th>
	<th>SUBTOTAL</th>
	<th>TOTAL</th>
</tr>


@foreach($productos as $p)
<tr>
	<td>
		<input type="checkbox" class="selectOne" value="{{$p->id_pedido_x_producto}}" />
	</td>
	<td class="imgbackground"><img src="{{asset($p->imagen_producto)}}" height="100" width="100" /></td>

	<td class="integral">{{$p->valor_actual}}</td>
	<td>
		<button onclick="reduce(this,{{$p->id_pedido_x_producto}},{{$p->id_producto}})">-</button>
		<input type="text" readonly="true" value="{{$p->cantidad}}" />
		<button onclick="plus(this,{{$p->id_pedido_x_producto}},{{$p->id_producto}},{{$p->cantidad_existente}})">+</button>
	</td>
	<td id="s{{$p->id_pedido_x_producto}}">{{$p->valor_producto_venta}}</td>
	<td class="total">{{$pedidos->valor_total_factura}}</td>
	<td><a href="#" class="delete" onclick="deleteChild(this,{{$p->id_pedido_x_producto}})">Eliminar</a></td>
</tr>
@endforeach



</table>
</div>



<div id="info-input">
	<div class="total-div">
		<span>PRECIO TOTAL:<span id="resultTotalMoney">0</span>PESO</span>
		<div id="paypal-button-container"></div>
	</div>
	<div class="btorinter-div">
		<button onclick="selectDelete()" class="btdelete">Eliminar seleccionado</button>
	</div>
</div>
</div>
<script>
	paypal.Buttons({
		createOrder: function(data, actions) {
			return actions.order.create({
				purchase_units: [{
					amount: {
						value: '77.44' // Can reference variables or functions. Example: `value: document.getElementById('...').value`
					}
				}]
			});
		},
	}).render('#paypal-button-container');

	function selectAll() {
		var obj = document.getElementsByClassName("selectOne");
		var btSelectAll = document.getElementById("allCheck").checked;
		for (inputCheck of obj) {
			inputCheck.checked = btSelectAll;
		}
	}

	// eliminación única

	function deleteChild(obj, i) {
		var nowtr = obj.parentElement.parentElement;
		var nowtable = nowtr.parentElement;
		console.log(nowtr);
		nowtable.removeChild(nowtr);
		$.ajax({
			type: "post",
			url: "{{ Route ('cart.eliminar')}}",
			data: {
				id: i,
				idPedido:{{$pedidos->id_pedidos}},
					_token: '{{ csrf_token() }}'
			},
			// dataType: 'json',
			success: function(res) {
				const demoClasses = document.querySelectorAll('.total');

				// Change the text of multiple elements with a loop
				demoClasses.forEach(element => {
					element.textContent = res;
				});


			},
			error: function(error) {
				console.log(error);
			}

		});
		// Precio total
		allShopPriceTotal();
		// puntos totales
		// allIntegralTotal();
	}
	// eliminación por lotes
	function selectDelete() {
		var obj = document.getElementsByClassName("selectOne");
		for (var i = obj.length - 1; i >= 0; i--) {
			var nowCheck = obj[i];
			if (nowCheck.checked == true) {

				deleteChild(nowCheck, nowCheck.value);
			}
		}
		// Precio total
		allShopPriceTotal();
		// puntos totales
		allIntegralTotal();
	}

	// reducir en cantidad
	function reduce(obj, i, pro) {
		var textElement = obj.parentElement.children[1];
		if (textElement.value == "1") {
			return;
		}
		textElement.value = eval(textElement.value + "-1");
		$.ajax({
			type: "post",
			url: "{{ Route ('cart.reducir')}}",
			data: {
				id: i,
				idP: pro,
				idPedido: {{ $pedidos -> id_pedidos }},
				_token: '{{ csrf_token() }}'
			},
			// dataType: 'json',
			success: function(res) {
				console.log(res);
				var sub = "" + "#s" + i + ""
				document.querySelector(sub).innerHTML = res[1];
				const demoClasses = document.querySelectorAll('.total');

				// Change the text of multiple elements with a loop
				demoClasses.forEach(element => {
					element.textContent = res[0];
				});

			},
			error: function(error) {
				console.log(error);
			}

		});
		// Subtotal
		//var singelSumElement = obj.parentElement.parentElement.children[5];
		//singleSubTotal(singelSumElement);
		// Precio total
		//allShopPriceTotal();
		// puntos totales
		//allIntegralTotal();
	}
	// Incrementa el número de
	function plus(obj, i, pro, cant) {
		var textElement = obj.parentElement.children[1];
		if (textElement.value == cant) {
			return;
		}
		textElement.value = eval(textElement.value + "+1");
		$.ajax({
			type: "post",
			url: "{{ Route ('cart.incrementar')}}",
			data: {
				id: i,
				idP: pro,
				idPedido: {{ $pedidos -> id_pedidos }},
				_token: '{{ csrf_token() }}'
			},
			// dataType: 'json',
			success: function(res) {
				console.log(res);
				var sub = "" + "#s" + i + ""
				document.querySelector(sub).innerHTML = res[1];
				const demoClasses = document.querySelectorAll('.total');

				// Change the text of multiple elements with a loop
				demoClasses.forEach(element => {
					element.textContent = res[0];
				});

			},
			error: function(error) {
				console.log(error);
			}

		});
	}
	// Inicializar todos los subtotales de productos
	function singleAllSubTotal() {
		var obj = document.getElementsByClassName("shopCount");
		for (shopCount of obj) {
			singleSubTotal(shopCount);
		}
	}
	// Calcula el subtotal de un solo producto
	function singleSubTotal(obj) {
		var price = obj.parentElement.children[3].innerHTML;
		var count = obj.parentElement.children[4].children[1].value;
		obj.innerHTML = eval(price + "*" + count);
	}
	// El precio total de todos los bienes
	function allShopPriceTotal() {
		var obj = document.getElementById("resultTotalMoney");
		var allSingelSubElement = document.getElementsByClassName("shopCount");
		var sum = "0";
		for (singelSubElement of allSingelSubElement) {
			if (sum != "") {
				sum += "+";
			}
			sum += singelSubElement.innerHTML;
		}
		obj.innerHTML = eval(sum);
	}
	// La suma de los puntos disponibles
	function allIntegralTotal() {
		// puntos totales
		var obj = document.getElementById("integralTotal");
		// integral simple
		var allSingelIntegralElement = document.getElementsByClassName("integral");
		// conjunto de cálculo
		var sum = "0";
		for (singelIntegralElement of allSingelIntegralElement) {
			// Cantidad
			var count = singelIntegralElement.parentElement.children[4].children[1].value;
			if (sum != "") {
				sum += "+";
			}
			sum += singelIntegralElement.innerHTML + "*" + count;
		}
		obj.innerHTML = eval(sum);
	}
	// Compra ahora
	function buyNow() {
		var result = confirm("¡Ya sea para comprar todo!");
		if (result == false) {
			return
		}
		var obj = document.getElementById("mytable");
		obj.innerHTML = "";
		// Precio total
		allShopPriceTotal();
		// puntos totales
		allIntegralTotal();
		alert("¡Compra exitosa!");
	}

	// Añadir al carrito
	function addToCart2(obj) {
		var result = confirm('¿Añadir este producto al carrito de la compra? ');
		if (result == false) {
			return;
		}
		// Formulario de carrito de compras
		var cartBox = document.getElementById("mytable");
		// Objeto de mercancía
		var shop = {
			shopImg: obj.children[0].src,
			shopIntegral: parseInt(eval(obj.children[2].innerHTML + "/20")),
			shopPrice: obj.children[2].innerHTML
		}
		// Determine si el producto existe
		var img = document.getElementsByClassName("imgbackground");
		var result = "-1";
		for (var i = 0; i < img.length; i++) {
			if (shop.shopImg == img[i].children[0].src) {
				result = i;
			}
		}
		if (result != "-1") {
			var count = img[result].parentElement.children[4].children[1];
			count.value = eval(count.value + "+1");
			// Recalcular el subtotal
			singleAllSubTotal();
		} else {
			// Crea un objeto de carrito de compras
			var tr = document.createElement("tr");
			var td1 = document.createElement("td");
			td1.innerHTML = '<input type="checkbox"  class="selectOne" />';
			var td2 = document.createElement("td");
			td2.className = "imgbackground";
			td2.innerHTML = '<img src="' + shop.shopImg + '" height="100" width="100"/>';
			var td3 = document.createElement("td");
			td3.className = "integral";
			td3.innerHTML = shop.shopIntegral;
			var td4 = document.createElement("td");
			td4.innerHTML = shop.shopPrice;
			var td5 = document.createElement("td");
			td5.innerHTML = '<button οnclick="reduce(this)">-</button>&nbsp;' +
				'<input type="text" size="1" readonly="true" value="1"/>' +
				'&nbsp;<button οnclick="plus(this)">+</button>';
			var td6 = document.createElement("td");
			td6.className = "shopCount";
			td6.innerHTML = parseInt(shop.shopPrice);
			var td7 = document.createElement("td");
			td7.innerHTML = '<a href="#" class="delete" οnclick="deleteChild(this)"> Eliminar </a>';
			tr.appendChild(td1);
			tr.appendChild(td2);
			tr.appendChild(td3);
			tr.appendChild(td4);
			tr.appendChild(td5);
			tr.appendChild(td6);
			tr.appendChild(td7);
			// Añadir al carrito
			cartBox.appendChild(tr);
		}

		// Precio total
		allShopPriceTotal();
		// puntos totales
		allIntegralTotal();
		// cambiar de color
		changeBackground();
	}
	// El movimiento del mouse cambia el color de fondo
	function changeBackground() {
		var imgtd = document.getElementsByClassName("imgbackground");
		for (singeltd of imgtd) {
			singeltd.onmousemove = function() {
				this.style.backgroundColor = "orange";
			}
			singeltd.onmouseleave = function() {
				this.style.backgroundColor = "white";
			}
		}
	}
	// Inicializar el contenido de la interfaz
	window.onload = function() {
		changeBackground();
		singleAllSubTotal();
		allShopPriceTotal();
		allIntegralTotal();
	}
</script>
@endsection

@section('css')
<style>
	#info-table {
		text-align: center;
	}

	#info-input {
		width: 1200px;
		margin: 0px auto;
	}

	#info-input>div {
		width: 1200px;
		margin: 20px 0px;
	}

	.shopCount {
		color: orange;
	}

	a {
		text-decoration: none;
		color: deepskyblue;
	}

	#resultTotalMoney,
	#integralTotal {
		color: orange;
	}

	.total-div {
		text-align: right;
	}

	.btdelete {
		float: left;
	}

	.btorinter-div {
		height: auto;
		overflow: auto;
	}

	.viewIntegral {
		float: right;
	}

	.btbuy {
		background-color: orange;
		color: white;
		border: 0px;
		float: right;
	}

	#shop {
		width: 800px;
		margin: 0px auto;
		height: auto;
		overflow: auto;
	}

	#shop li {
		text-align: center;
		list-style: none;
		float: left;
		height: auto;
		overflow: auto;
		margin: 20px;
	}

	#shop a {
		display: block;
		height: auto;
		overflow: auto;
	}

	.price {
		color: red;
	}
</style>
@endsection

@section('js')

@stop