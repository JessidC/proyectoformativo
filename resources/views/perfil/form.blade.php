
@extends('layouts.app')


<!--<form 
<br>


<div class="form-group">
<label for="nombre"> nombre</label>
<input type="text" class="form-control"  name="name"   value="{{$empleado->name}}"  id="name" >
</div>

<div class="form-group">
<label for="nombre"> email</label>
<input type="text"  class="form-control "name="email"  value="{{$empleado->email}}"  id="email"  >
<br>
</div>

<div class="form-group">
<label for="nombre"> docmuento   </label>
<input type="text" class="form-control" name="documento"  value="{{$empleado->documento}}"  id="documentoo"  >
<br>
</div>

<div class="form-group">
<label for="nombre">telefono   </label>
<input type="text" class="form-control" name="telefono"  value="{{$empleado->telefono}}"  id="telefonoo"  >
<br>
</div>

<div class="form-group">
<label for="nombre">imagen  </label>
<img   class="rounded-circle" src="{{asset('storage').'/'.$empleado->imagen}}" width= "150" border-radius ="1000" alt="">
<input type="file"  name="imagen"  value="{{$empleado->imagen}}"   id="imagen"  >

<br>
</div>
<input class="btn btn-success" type="submit" value ="guardar datos"  >

</form>-->

@section('content')
<center> <div class="card" style="width: 26rem;">
<img   class="rounded-circle" src="{{asset('storage').'/'.$empleado->imagen}}" width= "250" border-radius ="1000" alt="">
  <div class="card-body">
    <h5 class="card-title">PERFIL</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

 
  <ul class="list-group list-group-flush">

    <li  class="list-group-item"> <h5>NOMBRE</h5></li>
    <li class="list-group-item"><div class="form-group">
<label for="nombre"> nombre</label>
<input type="text" class="form-control"  name="name"   value="{{$empleado->name}}"  id="name" >
</div>
</li>

    <li  class="list-group-item"> <h5>EMAIL</h5></li>
    <li class="list-group-item"><div class="form-group">
<label for="nombre"> email</label>
<input type="text"  class="form-control "name="email"  value="{{$empleado->email}}"  id="email"  >
<br>
</div>
</li>


    <li  class="list-group-item"> <h5>DOCUMENTO</h5></li>
    <li class="list-group-item"><div class="form-group">
<label for="nombre"> documento   </label>
<input type="text" class="form-control" name="documento"  value="{{$empleado->documento}}"  id="documentoo"  >
<br>
</div>
</li>

    <li  class="list-group-item"> <h5>TELEFONO</h5></li>
    <li class="list-group-item"><div class="form-group">
<label for="nombre">telefono   </label>
<input type="text" class="form-control" name="telefono"  value="{{$empleado->telefono}}"  id="telefonoo"  >
<br>
</div>
</li>
  
  </ul>
  <div class="card-body">
    <a href="{{  url('/perfil/'.$empleado->id.'/edit')}}" class="btn btn-warning"  class="card-link">editar</a>
    <form action="{{  url('/perfil/'.$empleado->id)}}" class="d-inline" method="post">

   
@csrf



</form>

  </div>
  
</div> 
</center>


@endsection







