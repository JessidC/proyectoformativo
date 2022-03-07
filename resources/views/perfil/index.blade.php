


@extends('layouts.app')

@section('content')




  
<!--<h1  align="center "  >PERFIL</h1>

    <table  class="table table-ligth">
    <thead class ="thead-ligth">
        
    <tr>
        <th>#</th>
</tr>   

                <tr>
            <th > <h1 > nombre </h1>
            </tr>  



</th>
          <tr>
               <th>email</th>
            </tr> 
            <tr>
                <br>
               <th>documento</th>
            </tr> 
            <br>
            <tr>
               <th>telefono</th>
               </tr> 

               <tr>
                  <th > imagen</th>
                </tr> 
        </tr>

    </thead>
    <tbody>
        @foreach($users as $empleado)
       
       <div class="card">

       <div class="card-header" style="background-color:#E8E9F2;">

     <center> <img   class="rounded-circle" src="{{asset('storage').'/'.$empleado->imagen}}" width= "250" border-radius ="1000" alt="">
     </center> </div>
     <div class="card-body">

     <div class="card-container  overflow-hidden">




 <tr>
      
          
        </tr>

          <tr>
            <td>{{$empleado->id}}</td>
          </tr>

            <td>{{$empleado->name}}</td>
            <br>
         <tr>
            <td>{{$empleado->email}}</td>
    
         </tr>
           

         <tr>
            <td>{{$empleado->documento}}</td>
         </tr>

         <tr>
            <td>{{$empleado->telefono}}</td>
            <tr>

            <td>
                
            
            
            
          </td>
         <td>
         <a href="{{  url('/perfil/'.$empleado->id.'/edit')}}"class="btn btn-warning" >  editar </a>    
            

         <form action="{{  url('/perfil/'.$empleado->id)}}" class="d-inline" method="post">

@csrf

{{method_field('DELETE')}}
<input class="btn btn-danger" type="submit"  onclick="return confirm('deseas borrar')" value="delet">
</form>
         </td>



        </tr>
      @endforeach
        
            <td></td>
            <td></td>
      
    </tbody>
</table> 

</div>

</div>
</div>




<!--<table  id="tbproductos" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Nombre</th>
              <th scope="col">email</th>
              <th scope="col">documento</th>
              <th scope="col">telefono</th>
              <th scope="col">imagen</th>
            
            </tr>
          </thead>
          <tbody>
              @foreach ($users as $empleado)
            <tr>
              <th scope="row">{{$empleado->id}}</th>
              <td>{{$empleado->nombre}}</td>
              <td>{{$empleado->email}}</td>
              <td>{{$empleado->documento}}</td>
              <td>{{$empleado->telefono}}</td>
              <td><img   class="rounded-circle" src="{{asset('storage').'/'.$empleado->imagen}}" width= "250" border-radius ="1000" alt=""></td>
             
         
              <td>
                <a class="btn btn-success btn-sm" href="" role="button">Editar</a>
                
              </td>
            </tr>


            @endforeach
          </tbody>
        </table>-->
<!--
<div class="card">
<br>
  <div class="card-header"style="background-color:#E8E9F2;">

   <center><h1><b>Crear SubCategoria</b></h1></center>
  </div>
   <div class="card-body">
   <div class="container overflow-hidden">

    <form method="post" action="{{ Route('sub.guardar') }}">
        @csrf
        <div class="mb-3">
        <br>
            <label id="tit" class="form-label">Nombre de Subcategoria</label>
            <input type="text" name="nombre" class="form-control">
        </div>

        <div class="form-group">
        <br>
            <label id="tit" for="exampleFormControlSelect1">Categoria</label>
            <select class="form-control" name="categoria">
             
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Crear Categoria</button>
        
    </form>
    </div>
  
    </div>-->


 
<center> <div class="card" style="width: 26rem;">
<img   class="rounded-circle" src="{{asset('storage').'/'.$empleado->imagen}}" width= "400" border-radius ="1000" alt="">
  <div class="card-body">
    <h5 class="card-title">MY PERFIL</h5>
    <p class="card-text"></p>
  </div>

  @foreach($users as $empleado)
  <ul class="list-group list-group-flush">
 
    <li  class="list-group-item"> <h5>NOMBRE</h5></li>
    <li class="list-group-item">{{$empleado->name}}</li>

    <li  class="list-group-item"> <h5>EMAIL</h5></li>
    <li class="list-group-item">{{$empleado->email}}</li>


    <li  class="list-group-item"> <h5>DOCUMENTO</h5></li>
    <li class="list-group-item">{{$empleado->documento}}</li>

    <li  class="list-group-item"> <h5>TELEFONO</h5></li>
    <li class="list-group-item">{{$empleado->telefono}}</li>
  
  </ul>
  <div class="card-body">
    <a href="{{  url('/perfil/'.$empleado->id.'/edit')}}" class="btn btn-warning"  class="card-link">editar</a>
    <form action="{{  url('/perfil/'.$empleado->id)}}" class="d-inline" method="post">

@csrf

{{method_field('DELETE')}}
<!--<input class="btn btn-danger" type="submit"  onclick="return confirm('deseas borrar')" value="delet">-->
</form>

    @endforeach
  </div>
</div></center>


    @endsection