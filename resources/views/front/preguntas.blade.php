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
/* ============ diseno preguntas frecuentes ============ */
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.preguntas {
    width: 90%;
    margin: 100px auto;
}

.preguntas-faq {
    box-shadow: 0 0 15px -1px rgb(255, 254, 254);
    padding: 30px;
}

.preguntas-faq .title-faq {
    color: black;
    font: 1rem sans-serif;
    text-align: center;
    font-size: 2rem;
    margin-bottom: 30px;
}

.preguntas-faq .item-faq {
    box-shadow: 0 0 15px -1px rgba(173, 232, 240, 0.877);
    font: 1rem sans-serif;
    margin-bottom: 20px;
    border-radius: 10px;
}

.preguntas-faq .item-faq .question {
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: rgb(255, 255, 255);
    padding: 20px 20px 20px 80px;
    transition: .4s;
}

.preguntas-faq .item-faq .question .more {
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 0 15px -1px rgba(0,0,0,.2);
    width: 40px;
    height: 40px;
    font-size: 1rem;
    cursor: pointer;
    transition: .4s;
}

.preguntas-faq .item-faq .question .more:hover {
    box-shadow: 0 0 15px -1px rgba(0,0,0,.4);
}

.preguntas-faq .item-faq .question span {
    position: absolute;
    left: 10px;
    font-size: 3rem;
    top: 10px;
    opacity: .1;
}

.preguntas-faq .item-faq .answer {
    position: relative;
    padding: 0 20px 0 80px;
    overflow: hidden;
    height: 10;
    transition: .4s;
}

.preguntas-faq .item-faq .answer p {
    font-size: 1.2rem;
}

.preguntas-faq .item-faq .answer span {
    position: absolute;
    left: 10px;
    font-size: 2rem;
    top: -10px;
    opacity: .2;
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
    <li class="nav-item"><a class="nav-link" href="/proyectoformativo/public/perfil">Mi Perfil</a></li>

    <li class="nav-item"><a class="nav-link" href="{{ Route ('historialpedidos') }}">Pedidos</a></li><li class="nav-item dropdown" id="myDropdown"> 
    
</li>
    <li class="nav-item dropdown" id="myDropdown">
      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Ayuda</a>
      <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="{{ Route ('pecu') }}">PQRS</a></li>
      <li><a class="dropdown-item" href="{{ Route ('pqrs.epqrs') }}">Preguntas frecuentes</a></li>
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



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas frecuentes</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="container px-4 px-lg-5"> 
    <div class="alert alert-primary text-center">   
    
        <div class="row">
            <div class="preguntas-faq">
                <div class="title-faq">
                    <h3>Preguntas Frecuentes</h3>
                </div>

                <div class="item-faq">
                    <div class="question">
                        <h3>¿Debo registrarme para poder comprar en Compra Segura ?<span>P</span></h3>
                        <div class="more"><i>+</i></div>
                    </div>
                    <div class="answer">
                        <p>Sí, tambien debes de ingresar a tu cuenta si deseas agregar productos al carrito. Cuando realices el proceso de compra debes ingresar tus datos personales, así como el medio de pago.</p>
                    </div>
                </div>

                <div class="item-faq">
                    <div class="question">
                        <h3>¿Los precios mostrados incluyen IVA? <span>P</span></h3>
                        <div class="more"><i>+</i></div>
                    </div>
                    <div class="answer">
                        <p>Sí, todos los precios que ves en nuestro sitio web incluyen IVA.</p>
                    </div>
                </div>

                <div class="item-faq">
                    <div class="question">
                        <h3>¿Cómo puedo hacer seguimiento de mi pedido? <span>P</span></h3>
                        <div class="more"><i>+</i></div>
                    </div>
                    <div class="answer">
                        <p>Puedes ingresar el número de tu pedido en ‘Estado’.</p>
                    </div>
                </div>

                <div class="item-faq">
                    <div class="question">
                        <h3>¿Con qué medios puedo pagar? <span>P</span></h3>
                        <div class="more"><i>+</i></div>
                    </div>
                    <div class="answer">
                        <p> Tarjetas de crédito de las franquicias Visa, Mastercard o American Express de cualquier banco.
                            Tarjeta débito a través de PSE.
                            Transferencias en efectivo a través de Efecty y Baloto.</p>
                    </div>
                </div>

                <div class="item-faq">
                    <div class="question">
                        <h3>¿Puedo utilizar más de un medio de pago para mis compras en línea?<span>P</span></h3>
                        <div class="more"><i>+</i></div>
                    </div>
                    <div class="answer">
                        <p>No, actualmente cada pedido solo puede ser pagado con un medio de pago.</p>
                    </div>
                </div>

                <div class="item-faq">
                    <div class="question">
                        <h3> ¿El pago es seguro? <span>P</span></h3>
                        <div class="more"><i>+</i></div>
                    </div>
                    <div class="answer">
                        <p>Tomamos todas las medidas de seguridad que se encuentran a nuestro alcance para garantizar la seguridad de tus compras.</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
</div>
   
</body>
</html>

@endsection
@section('js')
<script>
let question = document.querySelectorAll('.question');
let btnDropdown = document.querySelectorAll('.question .more')
let answer = document.querySelectorAll('.answer');
let parrafo = document.querySelectorAll('.answer p');

for ( let i = 0; i < btnDropdown.length; i ++ ) {

    let altoParrafo = parrafo[i].clientHeight;
    let switchc = 0;

    btnDropdown[i].addEventListener('click', () => {

        if ( switchc == 0 ) {

            answer[i].style.height = `${altoParrafo}px`;
            question[i].style.marginBottom = '10px';
            btnDropdown[i].innerHTML = '<i>-</i>';
            switchc ++;

        }

        else if ( switchc == 1 ) {

            answer[i].style.height = `0`;
            question[i].style.marginBottom = '0';
            btnDropdown[i].innerHTML = '<i>+</i>';
            switchc --;

        }

    })

}
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