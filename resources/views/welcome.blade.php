@extends('layouts.app')

@section('titulo')
Compra Segura
@endsection

@section('css')
<!-- Bootstrap icons-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
@endsection

@section('content')
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light" >
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Compra Segura</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Inicio</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($categorias as $ca)
                            <a class="dropdown-item" value="{{$ca->id_categoria}}" >{{$ca->nombre_categoria}}</a>
                            @endforeach 
                            
                        </ul>
                    
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>   
                        </li>
                        
                        
                    </ul>
                    
                    <form class="d-flex">
                    
                        <button class="btn btn-outline-dark" href="{{ Route('cart') }}" type="button" >
                            <i class="bi-cart-fill me-1"></i>
                            Carrito
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                       
                        


                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class=" py-1">
            <div class="container px-4 px-lg-5 my-3">
                <div class="d-flex justify-content-center">

                <div class="carousel slide w-75 " data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="height: 300px;">
                        <img src="{{asset('img/1.png')}}"  height="300px"  alt="...">
                        </div>
                        <div class="carousel-item" style="height: 300px;">
                        <img src="{{asset('img/2.png')}}"  height="300px" alt="...">
                        </div>
                        <div class="carousel-item" style="height: 300px;">
                        <img src="{{asset('img/3.png')}}" height="300px"  alt="...">
                        </div>
                    </div>
                </div>
                </div> 
        </div>
        </header>

<div class="d-flex justify-content-center">
    <div class="p-2 d-flex-xxl-fill bg-primary.bg-gradient border border-5 primary">
    <div class="d-flex bd-highlight border border-5 primary" >
    <div class="p-2 d-flex-xxl-fill bg-primary opacity-25 border border-5 ">
        Envios seguros </div>
  <div class="p-2 d-flex-fill bg-primary opacity-25 border border-5 ">
      Envios en 72 horas

  </div>
  <div class="p-2 d-flex-fill bg-primary opacity-25  border border-5 ">
      Calidad y servicio </div>
  </div>
  </div>
</div>
  
</div>

        <!--<div class="py-1 center-text" style= "primary">
        //<h1 class="display-4 fw-bolder">Shop in style</h1>
        //<p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
        //<div>-->

        <!-- Section-->
        <section class="py-1">
            <div class="container px-3 px-lg-4 mt-2">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-4 row-cols-xl-5 justify-content-center">
                    @foreach ( $productos as $p)
                    <div class="col mb-5">
                        <div class="card h-90">
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
                                    <a class="btn btn-outline-primary btn-sm" onclick="addCarrito({{$p->id_producto}})" role="button" >Agregar Carrito</a>
                                    


                                    <a  class="btn btn btn-primary btn-sm" onclick="datos({{$p->id_producto}})" data-bs-toggle="modal" data-bs-target="#exampleModal">Detalle</a>
                                    {{-- <button role="button" class="btn btn-primary"  >
                                        Launch demo modal
                                      </button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    

                    <!-- Modal -->
        <div class="d-flex justify-content-center">             
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >   
            
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
            function datos(h){
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
                        id : h,
                        _token: '{{ csrf_token() }}'
                    },
                    // dataType: 'json',
                    success:function(res) {
                        $('#tituloP').val(res['nombre_producto'])
                        $('#valor').val(res['valor_actual'])
                        $('#cantidad').val(res['cantidad_existente'])
                        $('#descripcionP').val(res['descripcion_producto'])
                        $('#imagenP').attr("src",res['imagen_producto'])
                        
                    },
                    error: function(error) {
                        console.log(error);
                    }
                    
                    });

            }

            function addCarrito(id) {


                $.ajax({
                    type: "post",
                    // url:"{{ Route ('pro.api.detalle',"+h+")}}",
                    url: 'apicarrito/' + id,
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    // dataType: 'json',
                    success:function(res) {
                        if (res == "ok") {
                            console.log("no registrado"); 
                        } else if(res == "bad") {
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
@stop
