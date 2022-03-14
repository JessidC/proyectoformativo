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

@endsection

@section('content')

<!DOCTYPE html>
<html lang="en">

<nav class="navbar navbar-expand-lg  navbar-light bg-light">
<div class="container px-20 px-lg-20">
<div class="container-fluid">
<a class="navbar-brand" href="#">Compra Segura</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
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
    <li class="nav-item"><a class="nav-link" href="perfil">Mi Perfil</a></li>

    <li class="nav-item"><a class="nav-link" href="{{ Route ('historialpedidos') }}">Pedidos</a></li><li class="nav-item dropdown" id="myDropdown"> 
    
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
        <a class="btn btn-outline-dark" height="70px" type="button"
            width="70px" id="dropdown01" href="{{ Route ('existenteCarrito') }}">
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

<!-- codigo de la vista de los productos.// -->
<div class="container px-4 px-lg-5">
    <div class="alert alert-primary text-center">

        <h2>PRODUCTOS</h2>
    </div>
</div>

<section class="py-1">
    <div class="container px-3 px-lg-4 mt-3">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-2 row-cols-xl-4 justify-content-center">
            @foreach ( $productos as $co)
            
                <div class="col mb-3">
                <div class="card h-80">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{asset($co->imagen_producto)}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-2">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{$co->nombre_producto}}</h5>
                            <!-- Product price-->
                            <h5 class="fw-bolder">${{number_format($co->valor_actual)}}</h5>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-3 pt-1 border-top-2 bg-transparent">
                        <div class="text-center border-top-1">
                            <a class="btn btn-outline-primary btn-sm" onclick="addCarrito({{$co->id_producto}},{{$co->cantidad_existente}})" role="button">Agregar Carrito</a>
                            


                            <a class="btn btn btn-primary btn-sm" onclick="datos({{$co->id_producto}})"  role="button">Detalle</a>
                            {{-- <button role="button" class="btn btn-primary"  >
                                        Launch demo modal
                                      </button> --}}
                        </div>
                    </div>
                    
                </div>
            </div>
        
          @endforeach
          </div>
        </div>
        <!-- Modal -->
        <div class="d-flex justify-content-center">
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

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


        <!-- Modal no registrado -->
        <div class="d-flex justify-content-center">
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">No has ingresado</h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <p>Dedes de ingresar a tu cuenta para hacer un pedido&hellip;</p>
                        </div>
                        <div class="modal-footer">
                            <a type="submit" class="btn btn-primary"  href="{{ route('register') }}">Registrarse</a>
                            <a type="submit" class="btn btn-primary" href="{{ route('login') }}">Ingresar</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal cantidad producto -->
        <div class="d-flex justify-content-center">
            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">que cantidad quieres</h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <form action="{{route('cart.guardar')}}" method="post">
                            @csrf
                            <div class="modal-body">
                                <p>ingresa la cantidad de tu producto&hellip;</p>
                                <input type="hidden" name="idDireccion" id="idDireccion">
                                <input type="hidden" name="idProducto" id="idProduc">
                                <input type="number" name="cantidad" id="cant" min="1">
                            </div>
                            <div class="modal-footer">
                                <a type="submit" class="btn btn-danger">cancelar</a>
                                <button type="submit" class="btn btn-primary">agregar</button>
                            </div>
                        </form>
                        
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal Sin direccion -->
        <div class="d-flex justify-content-center">
            <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">No Tienes Direccion</h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <p>Dedes de ingresar a tu direccion para poder hacer un pedido&hellip;</p>
                        </div>
                        <div class="modal-footer">
                            <a type="submit" class="btn btn-primary"  href="{{ route('register') }}">Registrarse</a>
                            <a type="submit" class="btn btn-primary" href="{{ route('login') }}">Ingresar</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal elegir direccion -->
        <div class="d-flex justify-content-center">
            <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Selecione Una Direccion</h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <table class="table" id="direcciones">
                            </table>
                        </div>
                        <div class="modal-footer">
                            <a type="submit" class="btn btn-primary"  href="{{ route('register') }}">Crear una Direcion</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
  
        <script>
            function datos(h) {
                $('#exampleModal1').modal('show');

                $('#tituloP').val(' ')
                $('#valor').val(' ')
                $('#cantidad').val(' ')
                $('#descripcionP').val(' ')
                $('#imagenP').attr(' ')
                $.ajax({
                    type: "post",
                    url: "{{ Route ('pro.api.detalle')}}",
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

            function addCarrito(id,cant) {
                $('#idProduc').val(id)
                $.ajax({
                    type: "post",
                    url:"{{route('apicarrito')}}",
                    data:{
                        _token: '{{ csrf_token()}}'
                    },
                    //dataType: 'json',
                    success: function(res) {
                        console.log(res);
                        if (res == "2") {
                            $('#idProduc').val(id)
                            $('#cant').val('')
                            const cantMax = document.querySelector('#cant');
                            cantMax.setAttribute('max',cant);
                            $('#exampleModal3').modal(
                                'show'
                                );
                            console.log("registrado");
                        } else if (res == "0") {
                            $('#exampleModal2').modal(
                                'show'
                                );
                            console.log("no registrado");
                        } else if (res == "1") {
                            $('#exampleModal4').modal(
                                'show'
                                );
                            console.log("sin direccion");
                        }
                        else {
                            function crearTabla (lista){
                                let stringTabla = "<tr><th>Direccion</th> <th>Barrio</th> <th>Departamento</th> <th>Municipio</th></tr>" ;

                                for (let dir of lista) {
                                    let fila = "<tr> <td>";
                                    fila += dir.direccion;
                                    fila += "</td>";

                                    fila += "<td>";
                                    fila += dir.barrio;
                                    fila += "</td>";

                                    fila += "<td>";
                                    fila += dir.nombre_departamento;
                                    fila += "</td>";

                                    fila += "<td>";
                                    fila += dir.nombre_municipio;
                                    fila += "</td>"; 

                                    fila += "<td>";
                                    fila += "<a type='submit' data-bs-dismiss='modal' class='btn btn-primary' onclick='direccion(";
                                    fila += dir.id_direccion
                                    fila += ","
                                    fila += cant;
                                    fila += ")'>selccionar</a>";
                                    fila += "</td> </tr>";

                                    stringTabla += fila;
                                    
                                }
                                console.log(stringTabla);
                                return stringTabla;
                            }
                            document.getElementById("direcciones").innerHTML = crearTabla(res);
                            $('#exampleModal5').modal(
                                'show'
                                );
                        }

                    },
                    error:function(error) {
                        console.log(error);
                    }

                });

            }
            function direccion(id,cant){
                console.log("ok");
                $('#idDireccion').val(id);
                $('#cant').val('')
                const cantMax = document.querySelector('#cant');
                cantMax.setAttribute('max',cant);
                $('#exampleModal3').modal('show');
            }


        </script>
            

@endsection
