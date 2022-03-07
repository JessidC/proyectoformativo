
@extends('adminlte::page')

@section('title', 'prueba')

@section('content_header')
    <h1>contenido</h1>
@stop

@section('content')
    <p><form action="{{url('/perfil/')}}" method="post" enctype="multipart/form-data">



@csrf


<label for="nombre"> nombre</label>
<input type="text"   name="name"  id="name" >
<br>
<label for="nombre"> email</label>
<input type="text"name="email"  id="email"  >
<br>
<label for="nombre"> contraseña</label>
<input type="text"name="password"  id="password"  >
<br>
<label for="nombre"> docmuento   </label>
<input type="text"name="documento"  id="correo"  >
<br>
<label for="nombre">telefono   </label>
<input type="text"name="documento"  id="correo"  >
<br>
<label for="nombre">imagen  </label>
<input type="file"name="imagen"  id="imagen"  >
<br>

<input type="submit" value ="guardar datos"  >

</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

