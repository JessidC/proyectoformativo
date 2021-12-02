@extends('adminlte::page')

@section('title', 'Crear Categoria')

@section('content_header')
    <h1>Crear SubCategoria</h1>
@stop

@section('content')

    <form method="post" action="{{ Route('sub.guardar') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre de Subcategoria</label>
            <input type="text" name="nombre" class="form-control">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Categoria</label>
            <select class="form-control" name="categoria">
                @foreach ($categorias as $cat)
                    <option value="{{$cat->id_categoria}}" >{{$cat->nombre_categoria}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Crear Categoria</button>
        <a class="btn btn-danger" href="{{ Route('categorias') }}">Cancelar</a>
    </form>



@stop

@section('css')

@stop

@section('js')

@stop
