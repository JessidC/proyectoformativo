


@extends('layouts.app')


  





@section('content')

<form action="{{url('/perfil/'.$empleado->id)}}" method="post" enctype="multipart/form-data">


@csrf

{{ method_field('PATCH')}}
<center> <div class="card" style="width: 26rem;">
<img   class="rounded-circle" src="{{asset('storage').'/'.$empleado->imagen}}" width= "400" border-radius ="1000" alt="">
  <div class="card-body">

    <h5 class="card-title"></h5>

    <ul class="list-group list-group-flush">
    <li  class="list-group-item"><h4>cambiar foto de perfil</h4> <input  type="file"name="imagen"  value="{{$empleado->imagen}}" id="imagen"  ></li>
</ul>
  
    
    <p class="card-text"></p>
  </div>

 
  <ul class="list-group list-group-flush">

    <li  class="list-group-item"> <h5>NOMBRE</h5></li>
    <li class="list-group-item"><div class="form-group">

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
<label for="nombre"> docmuento   </label>
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
    

   
@csrf

<form action="{{url('/perfil/'.$empleado->id)}}" method="post" enctype="multipart/form-data">

<input class="btn btn-success" type="submit" value ="guardar datos"  >


  </div>
  
</div> 
</center>



@endsection
</form>


