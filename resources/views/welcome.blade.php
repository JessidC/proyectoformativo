@extends('layouts.app')

@section('titulo')
Compra Segura
@endsection

@section('css')
<style>
   

    /* Clear floats after the columnas */
    .fila:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive layout - makes the three columnas stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .columna {
            width: 100%;
            height: auto;
        }
    }

    @media all and (min-width: 992px) {
	.dropdown-menu li{ position: relative; 	}
	.nav-item .submenu{ 
		display: none;
		position: absolute;
		left:100%; top:-7px;
	}
	.nav-item .submenu-left{ 
		right:100%; left:auto;
	}
	.dropdown-menu > li:hover{ background-color: #f1f1f1 }
	.dropdown-menu > li:hover > .submenu{ display: block; }
}	
/* ============ desktop view .end// ============ */

/* ============ small devices ============ */
@media (max-width: 991px) {
  .dropdown-menu .dropdown-menu{
      margin-left:0.7rem; margin-right:0.7rem; margin-bottom: .5rem;
  }
}
	


	

</style>

<!-- Bootstrap icons-->

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
@endsection

@section('content')
<!-- Navigation-->

<nav class="navbar navbar-expand-lg  navbar-light bg-light">
<div class="container px-20 px-lg-20">
<div class="container-fluid">
<a class="navbar-brand" href="#">Compra Segura</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
</div>

<div class="container px-5 px-lg-5">
<div class="collapse navbar-collapse " id="main_nav">
  <ul class="navbar-nav">
    <li class="nav-item active"> <a class="nav-link" href="{{ Route ('welcome') }}">Home </a> </li>
    <li class="nav-item"><a class="nav-link" href="{{ Route ('info') }}"> About </a></li>
    <li class="nav-item dropdown" id="myDropdown">
      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Categorias</a>
      <ul class="dropdown-menu">
      @foreach ($categorias as $ca)
        <li> <a class="dropdown-item" value="{{$ca->id_categoria}}">{{$ca->nombre_categoria}} &raquo; </a>
          <ul class="submenu dropdown-menu">       
          @foreach ($subcategoria as $sub)
          @if( $sub->id_categoria == $ca->id_categoria)
            <li><a class="dropdown-item" href="#">{{$sub->nombre_subcategoria}}</a></li>
            @endif
                     
            @endforeach
          </ul>
        </li>
        @endforeach
        
    </ul>
      
    </li>
    <li class="nav-item"><a class="nav-link" href="">Mi Perfil</a></li><li class="nav-item dropdown" id="myDropdown">
      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Ayuda</a>
      <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">PQRS</a></li>
      <li><a class="dropdown-item" href="#">Preguntas frecuentes</a></li>
      </ul>
    </div>  
    </li>

    <li class="nav-item dropdown">
        <button class="btn btn-outline-dark" height="70px" type="button"
            width="70px" href="#" id="dropdown01" data-toggle="dropdown">
                <i class="bi-cart-fill me-1"></i>
                    Carrito
        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span></button>
        <div id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse">
                                    
                <table id="lista-carrito" class="table">
                    <thead>
                         <tr>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th></th>
                        </tr>

                    </thead>
                    <tbody>
                    @foreach($productos as $pro)
                    <tr>
                                        
                    <td><img src="{{asset($pro->imagen_producto)}}" height="100" width="100" alt="" ></td>
                    <td>{{$pro->nombre_producto}}</td>
                    <td>{{$pro->valor_actual}}</td>
                    </tr>
                    </tbody>
                </table>

                <a href="#" id="vaciar-carrito" class="btn btn-primary btn-block">Vaciar Carrito</a>
                <a href="#" id="procesar-pedido" class="btn btn-danger btn-block">Procesar Compra</a>
                @endforeach
        </div>
    </li>
    
</ul>

</div>
    
  </ul>
</div>
<!-- navbar-collapse.// -->
</div>
<!-- container-fluid.// -->
</div><!-- centrado.// -->
</nav>
</div>



<!--Slayer -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<div class="container px-3 px-lg-4 mt-3">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner ">
            <div class="carousel-item active ">
                <img class="d-block w-100 " src="{{asset('img/1.png')}}" style="height: 500px;" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/2.png')}}" style="height: 500px;" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/3.png')}}" style="height: 500px;" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
</div>


<p></p>
<div class="container px-4 px-lg-5">
    <div class="alert alert-primary text-center">

        <h2>Porque comprar nuestros productos</h2>
    </div>
</div>
</div>


<div class="container px-4 px-lg-5 my-1">
    <div class="d-flex justify-content-center">
        <div class="row">
            <div class="col 3-sm-1">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="{{asset('img/proteger.png')}}" alt="Card image cap">
                        <h5 class="card-title text-center">Seguridad</h5>
                    </div>
                </div>
            </div>
            <div class="col 3-sm-1">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="{{asset('img/envio.png')}}" alt="Card image cap">
                        <h5 class="card-title text-center">Envios en 72 horas</h5>
                    </div>
                </div>
            </div>

            <div class="col 3-sm-1">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="{{asset('img/calidad.png')}}" alt="Card image cap">
                        <h5 class="card-title text-center">Calidad y servicio</h5>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <p></p>

    <div class="alert alert-primary text-center">
        <h2>Nuestros productos</h2>
    </div>

</div>

<p></p>
<!--<div class="py-1 center-text" style= "primary">
        //<h1 class="display-4 fw-bolder">Shop in style</h1>
        //<p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
        //<div>-->

<!-- Section-->
<section class="py-1">
    <div class="container px-3 px-lg-4 mt-3">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-2 row-cols-xl-4 justify-content-center">
            @foreach ( $productos as $p)
            <div class="col mb-3">
                <div class="card h-80">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{asset($p->imagen_producto)}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-2">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{$p->nombre_producto}}</h5>
                            <!-- Product price-->
                            <h5 class="fw-bolder">${{number_format($p->valor_actual)}}</h5>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-3 pt-1 border-top-2 bg-transparent">
                        <div class="text-center border-top-1">
                            <a class="btn btn-outline-primary btn-sm" onclick="addToCart({{$p->id_producto}})" role="button">Agregar Carrito</a>
                            


                            <a class="btn btn btn-primary btn-sm" onclick="datos({{$p->id_producto}})" data-bs-toggle="modal" data-bs-target="#exampleModal">Detalle</a>
                            {{-- <button role="button" class="btn btn-primary"  >
                                        Launch demo modal
                                      </button> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="alert alert-primary text-center">
                <h2>Nuestros productos</h2>
            </div>
        </div>


        <!-- Modal -->
        <div class="d-flex justify-content-center">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <input type="text" class="modal-title form-control" id="tituloP" aria-describedby="basic-addon1" readonly>
                        </div>

                        <div class="modal-body">

                            <img class="input-group" src="" id="imagenP">

                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="text" class="modal-title form-control" id="valor" aria-describedby="basic-addon1" readonly>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Cantidad existente</span>
                                <input type="text" class="modal-title form-control" id="cantidad" aria-describedby="basic-addon1" readonly>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Descripción</span>
                                <textarea id="descripcionP" class="form-control" aria-label="With textarea" readonly></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <script>
            function datos(h) {
                $('#tituloP').val(' ')
                $('#valor').val(' ')
                $('#cantidad').val(' ')
                $('#descripcionP').val(' ')
                $('#imagenP').attr(' ')
                $.ajax({
                    type: "post",
                    // url:"{{ Route ('pro.api.detalle',"+h+")}}",
                    url: 'productos/' + h,
                    data: {
                        id: h,
                        _token: '{{ csrf_token() }}'
                    },
                    // dataType: 'json',
                    success: function(res) {
                        $('#tituloP').val(res['nombre_producto'])
                        $('#valor').val(res['valor_actual'])
                        $('#cantidad').val(res['cantidad_existente'])
                        $('#descripcionP').val(res['descripcion_producto'])
                        $('#imagenP').attr("src", res['imagen_producto'])

                    },
                    error: function(error) {
                        console.log(error);
                    }

                });

            }

            function addToCart(obj){
                $('#imagenP').attr(' ')
                $('#tituloP').val(' ')
                $('#valor').val(' ')
                $.ajax({
                    type: "post",
                    // url:"{{ Route ('apicarrito',"+obj+")}}",
                    url: 'productos/' + h,
                    data: {
                        id: h,
                        _token: '{{ csrf_token() }}'
                    },
                success: function(res) {
                        $('#imagenP').attr("src", res['imagen_producto'])
                        $('#tituloP').val(res['nombre_producto'])
                        $('#valor').val(res['valor_actual'])

				var result = confirm('¿Añadir este producto al carrito de la compra? ');
				if (result == false){
					return;
				}
				// Formulario de carrito de compras
				var cartBox = document.getElementById("mytable");
				// Objeto de mercancía
				var shop = {
					shopImg:obj.children[0].src,
					shopIntegral:parseInt(eval(obj.children[2].innerHTML + "/20")),
					shopPrice:obj.children[2].innerHTML
				}
				// Determine si el producto existe
				var img = document.getElementsByClassName("imgbackground");
				var result = "-1";
				for (var i = 0;i < img.length;i++){
					if (shop.shopImg == img[i].children[0].src){
						result = i;
					}
				}
				if (result != "-1"){
					var count = img[result].parentElement.children[4].children[1];
					count.value = eval(count.value + "+1");
					// Recalcular el subtotal
					singleAllSubTotal();
				}else{
					// Crea un objeto de carrito de compras
					var tr = document.createElement("tr");
					var td1 = document.createElement("td");
					td1.innerHTML = '<input type="checkbox"  class="selectOne" />';
					var td2 = document.createElement("td");
					td2.className = "imgbackground";
					td2.innerHTML = '<img src="'+ shop.shopImg +'" height="100" width="100"/>';
					var td3 = document.createElement("td");
					td3.className = "integral";
					td3.innerHTML = shop.shopIntegral;
					var td4 = document.createElement("td");
					td4.innerHTML = shop.shopPrice;
					var td5 = document.createElement("td");
					td5.innerHTML = '<button οnclick="reduce(this)">-</button>&nbsp;'
								+ '<input type="text" size="1" readonly="true" value="1"/>'
								+ '&nbsp;<button οnclick="plus(this)">+</button>';
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

            function addCarrito1(id) {


                $.ajax({
                    type: "post",
                    // url:"{{ Route ('pro.api.detalle',"+h+")}}",
                    url: 'apicarrito/' + id,
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    // dataType: 'json',
                    success: function(res) {
                        if (res == "ok") {
                            console.log("registrado");
                        } else if (res == "bad") {
                            console.log("no registrado");
                        }

                    },
                    error: function(error) {
                        console.log(error);
                    }

                });

            }
        </script>


    </div>
    </div>
</section>
</div>
</div>
</section>

@endsection

@section('js')
<script>
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }
    })
</script>

<script>

document.addEventListener("DOMContentLoaded", function(){
// make it as accordion for smaller screens
if (window.innerWidth < 992) {

  // close all inner dropdowns when parent is closed
  document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
    everydropdown.addEventListener('hidden.bs.dropdown', function () {
      // after dropdown is hidden, then find all submenus
        this.querySelectorAll('.submenu').forEach(function(everysubmenu){
          // hide every submenu as well
          everysubmenu.style.display = 'none';
        });
    })
  });

  document.querySelectorAll('.dropdown-menu a').forEach(function(element){
    element.addEventListener('click', function (e) {
        let nextEl = this.nextElementSibling;
        if(nextEl && nextEl.classList.contains('submenu')) {	
          // prevent opening link if link needs to open dropdown
          e.preventDefault();
          if(nextEl.style.display == 'block'){
            nextEl.style.display = 'none';
          } else {
            nextEl.style.display = 'block';
          }

        }
    });
  })
}
// end if innerWidth
}); 
</script>
@stop