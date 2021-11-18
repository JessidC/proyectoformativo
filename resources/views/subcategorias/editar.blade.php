@extends('adminlte::page')

@section('title', 'Crear Categoria')

@section('content_header')
    <h1>Editar Categoria</h1>
@stop

@section('content')

    <form method="post" action="{{ Route('subca.actualizar') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $subcategoria->nombre_subcategoria }}">
            <input type="hidden" name="id" class="form-control" value="{{ $subcategoria->id_subcategoria }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a class="btn btn-danger" href="{{ Route('categorias') }}">Cancelar</a>
    </form>

@stop

@section('css')

@stop

@section('js')

@stop
