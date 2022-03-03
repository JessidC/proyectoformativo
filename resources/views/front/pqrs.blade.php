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
<a class="navbar-brand" href="{{ Route ('welcome') }}">Compra Segura</a>
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
            <li><a class="dropdown-item" href="{{ Route ('vProductos', $sub->id_subcategoria)}}">{{$sub->nombre_subcategoria}}</a></li>
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
      <li><a class="dropdown-item" href="{{ Route ('pecu') }}">PQRS</a></li>
      <li><a class="dropdown-item" href="{{ Route ('pqrs.epqrs') }}">Preguntas frecuentes</a></li>
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
                  
                    <tr>
                                        
                    
                    </tr>
                    </tbody>
                </table>

                <a href="#" id="vaciar-carrito" class="btn btn-primary btn-block">Vaciar Carrito</a>
                <a href="#" id="procesar-pedido" class="btn btn-danger btn-block">Procesar Compra</a>
                
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

    <header class="section page-header"></header> 
    <header class=" py-1">
    <div class="container px-4 px-lg-5 my-3">
    <div class="container px-4 px-lg-5"> 
        <div class="alert alert-primary text-center">
        
        
            <form action="{{route('pqrs.epqrs')}}" method="POST">

                @csrf

            <h1>FORMULARIO PQRS</H1>
            <div class="form-group text-left">
                <h5 style="text-align: center;">Bienvenido en esta sesion podras radicar tus preguntas,quejas reclamos o sugerencias</h5>
                <p>
                <p>
                <label for="nombre_pqrs">Asunto</label>
                <select type="text" class="form-control" name="nombre_pqrs">
                    <option>Facturación</option>
                    <option>Producto</option>
                    <option>Atención</option>
                </select>
                <p>
              
            </div>
                        
            <div class="form-group">                
                <label for="descripcion_pqrs">Descripción</label>
                <textarea class="form-control" name="descripcion_pqrs" rows="3"placeholder="Escriba aqui su mensaje" ></textarea>
            </div>
            <div class="form-group">
               
            </div>  
  <button type="submit" class="btn btn-primary">Enviar</button>


            </form>
        
        </div>
        </div>
    
    
    <img class="card-img-top" src="{{asset('img/tienda.png')}}" height="400px" alt="Card image cap">
   
    </html>
@endsection
@section('js')
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
