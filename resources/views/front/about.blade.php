@extends('layouts.app')

@section('titulo')
Compra Segura

@endsection

@section('css')

@endsection

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
            <div class="container px- px-lg-5">
                <a class="navbar-brand" href="{{ Route ('welcome') }}">Compra Segura</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ Route ('welcome') }}">Inicio</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($categorias as $ca)
                            <a class="dropdown-item" value="{{$ca->id_categoria}}" >{{$ca->nombre_categoria}}</a>
                            @endforeach 
                            
                        </ul>
                    
                        <li class="nav-item"><a class="nav-link" href="{{ Route ('info') }}">About</a></li>   
                        </li>   
                    </ul>
                    
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" href="{{ Route ('cart') }}" type="button" >
                            <i class="bi-cart-fill me-1"></i>
                            Carrito
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>

                    </form>
                </div>
            </div>
        </nav>
    <header class="section page-header"></header> 
    <header class=" py-1">
    <div class="container px-4 px-lg-5 my-3">

    <div class="card mb-3 text-center">
    <img class="card-img-top" src="{{asset('img/tienda.png')}}" height="400px" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title" >Acerca de Nosotros </h5>
        <p class="card-text">Somos una empresa Colombiana que brindamos el servicio y venta de productos en linea que se creo en el año 2020, por los aprendices del ADSI 184</p>
        <p class="card-text"><small class="text-muted">Publicado el 11 de Febrero del 2021</small></p>
    </div>
    </div>

    <div class="container px-4 px-lg-5"> 
        <div class="alert alert-primary text-center">
        
            <form>
            <h1> CONTACTENOS</H1>
            <div class="form-group text-left">
                <p>
                <label for="nombre">Nombre </label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre completo">
                <p>
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com">
                <p>
                <label for="tel">Celular</label>
                <input type="number" class="form-control" id="tel" placeholder="xxx-xxx-xx-xx">
            </div>
                        
            <div class="form-group">
                <label for="exampleFormControlTextarea1"> </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"placeholder="Escriba aqui su mensaje" ></textarea>
            </div>
            <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label text-left" for="gridCheck">
                    Acepta terminos y condiciones para el manejo de datos personales mediante la ley 1581 del 2008
                </label>
                </div>
            </div>
  <button type="submit" class="btn btn-primary">Enviar</button>


            </form>
        
        </div>
        </div>
    </div>



    </html>
@endsection
@section('js')

@stop
