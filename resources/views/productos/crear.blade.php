@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  
@stop

@section('content')
<br>
<div class="card">

  <div class="card-header"style="background-color:#61ADE8;">
  
     <center><h1><b>Crear Producto</b></h1></center>
  </div>
   <div class="card-body">
   <div class="container overflow-hidden">

<form method="post" action="{{ Route('pro.guardar') }}">
  @csrf
  <br>
  <div class="row">
  <div class="form group col">
      <label for="exampleFormControlSelect1">Subcategoria</label>
        <select class="form-control" name="subcategoria">
          @foreach ($subcategorias as $subca)
            <option value="{{$subca->id_subcategoria}}" >{{$subca->nombre_subcategoria}}</option>
          @endforeach
        </select>
  </div>

  <div class="col-md-4">
            <label class="form-label">Nombre de roducto</label>
            <input type="text" name="nombre" class="form-control">
  </div>

  <div class="col-md-4">
    <label class="form-label">Valor</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">$</span>
      <input type="number" class="form-control" min=0 name="valor" >
    </div>
  </div>

  <div class="col-md-4">
  <br><br>
            <label class="form-label">Cantidad</label>
            <input type="number" name="cantidad" class="form-control">
  </div>
  <div class="col-md-4">
  <br><br>
    <label class="form-label">Descripcion</label>
    <input type="text" name="descripcion"class="form-control">
  </div>

  <div class="col-md-4">
  <br><br>
      <label for="exampleFormControlSelect1">Marca</label>
        <select class="form-control" name="marca">
          @foreach ($marcas as $mar)
         @if($mar->estado=="1"){
          <option value="{{$mar->id}}" >{{$mar->nombre_marcas}}</option>
         }
         @endif
          @endforeach
        </select>
  </div>


  <div class="col-md-4">
  <br><br>
    <label class="form-label">Imagen</label>
    <input type="file" name="imagen" >
  </div>

  <div class="col-md-4">
  <br><br>
    <label class="form-label">Descuento</label>
    <input type="number" name="descuento" class="form-control">
  </div>

  <div class="col-md-4">
  <br><br>
            <label class="form-label">Garantia</label>
            <input type="number" name="garantia" class="form-control">
  <br>
  </div>

   <!--<div class="mb-3 row">
    <br>
   <label class="col-sm-2 col-form-label">Usuario</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" name="usuario" value= {{auth()->user()->id}}> 
    </div>-->

  <div class="col-12">
    <br>
    <button class="btn btn-primary" type="submit">Crear producto</button>
    <a class="btn btn-danger" href="{{ Route ('productos')}}">Cancelar</a>
  </div>
  </div>

</form>
 </div>
</div>

@stop

@section('css')

@stop

@section('js')

@stop