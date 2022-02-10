@extends('adminlte::page')

@section('title', 'Editar Productos')

@section('content_header')
    <h1>Editar Productos</h1>
@stop

@section('content')

<form method="post" action="{{ Route ('pro.actualizar')}}">
    @csrf
    
  </div>
  <div class="col-md-4">
      <label for="exampleFormControlSelect1">Subcategoria</label>
        <select class="form-control" name="subcategoria">
          @foreach ($subcategorias as $subca)
            <option value="{{$subca->id_subcategoria}}" >{{$subca->nombre_subcategoria}}</option>
            {{-- @if ({{ $productos->id_subcategoria == $subca->id_subcategoria }})
                <option value="{{$subca->id_subcategoria}}" selected >{{$subca->nombre_subcategoria}}</option>
                 @else --}}
                <option value="{{$subca->id_subcategoria}}" {{$productos->id_subcategoria == $subca->id_subcategoria ? 'selected' : ''}}>{{$subca->nombre_subcategoria}}</option>
                {{-- @endif --}}
            @endforeach
        </select>
    </div>

  <div class="col-md-4">
            <label class="form-label">Nombre de Producto</label>
            <input type="text" name="nombre" class="form-control" value="{{$productos->nombre_producto}}">
            <input type="hidden" name="id" class="form-control" value="{{$productos->id_producto}}">
    </div>

  <div class="col-md-4">
    <label class="form-label">Valor</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">$</span>
      <input type="number" class="form-control" name="valor" value="{{$productos->valor_actual}}" >
    </div>
  </div>

  <div class="col-md-4">
            <label class="form-label">Cantidad</label>
            <input type="number" name="cantidad" class="form-control" value="{{$productos->cantidad_existente}}">
  </div>
  <div class="col-md-4">
    <label class="form-label">Descripcion</label>
    <input type="text" name="descripcion"class="form-control" value="{{$productos->descripcion_producto}}">
  </div>

  <div class="col-md-4">
      <label for="exampleFormControlSelect1">Marca</label>
        <select class="form-control" name="marca">
          @foreach ($marcas as $mar)
            <option value="{{$mar->id}}" >{{$mar->nombre_marcas}}</option>
            {{-- @if ({{ $productos->marcas_id_marcas == $mar->id}})
                <option value="{{$mar->id}}" selected >{{$mar->nombre_marcas}}</option>
                 @else --}}
                <option value="{{$mar->id}}" {{$productos->marcas_id_marcas == $mar->id ? 'selected' : ''}}>{{$mar->nombre_marcas}}</option>
                {{-- @endif --}}
          @endforeach
          
        </select>
  </div>

  <div class="col-md-4">
    <label class="form-label">Imagen</label>
    <input type="text" name="imagen" class="form-control" value="{{$productos->imagen_producto}}">
  </div>

  <div class="col-md-4">
    <label class="form-label">Descuento</label>
    <input type="number" name="descuento" class="form-control" value="{{$productos->descuento}}">
  </div>

  <div class="col-md-4">
            <label class="form-label">Garantia</label>
            <input type="number" name="garantia" class="form-control" value="{{$productos->garantia}}">
  <br>
  </div>

  <div class="mb-3 row">
    <br>
    <label class="col-sm-2 col-form-label">Usuario</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" name="usuario" value= {{auth()->user()->id}}> 
    </div>
   

  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
  <a class="btn btn-danger" href="{{ Route ('productos')}}">Cancelar</a>
</form>

@stop

@section('css')

@stop

@section('js')

@stop
