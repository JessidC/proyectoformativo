@extends('adminlte::page')

@section('title', 'Crear Subcategoria')

@section('content_header')
    <h1>Editar subcategoria</h1>
@stop

@section('content')

<form method="post" action="{{ Route ('sub.actualizar')}}">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control" value="{{$subcategorias->nombre_subcategoria}}">
        <input type="hidden" name="id" class="form-control" value="{{$subcategorias->id_subcategoria}}">
    </div>

    <div class="form-group">
    <label for="exampleFormControlSelect1">Categoria</label>
        <select class="form-control" name="categoria">
            @foreach ($categorias as $cat)
                {{-- @if ({{ $subcategorias->id_categoria == $cat->id_categoria }})
                <option value="{{$cat->id_categoria}}" selected >{{$cat->nombre_categoria}}</option>
                 @else --}}
<option value="{{$cat->id_categoria}}" {{$subcategorias->id_categoria == $cat->id_categoria ? 'selected' : ''}}>{{$cat->nombre_categoria}}</option>
                {{-- @endif --}}

            @endforeach
        </select>
    </div>

  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
  <a class="btn btn-danger" href="{{ Route ('subca')}}">Cancelar</a>
</form>

@stop

@section('css')

@stop

@section('js')

@stop
