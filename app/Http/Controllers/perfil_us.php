<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class perfil_us extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $datos['users']=User::paginate(1);
          
        return view ("perfil.index", $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("perfil.crear");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       //$datosdelEmpleado = request ()->all();
      
       $datosdelusuario = request()->except('_token');

      //$datosdelEmpleado = empleando::select('nombre', 'apellido','imagen','correo')->get();

      if ($request->hasFile('imagen')){
        $datosdelusuario['imagen']=$request->file('imagen')->store('uploads','public');


      }
    User::insert($datosdelusuario);

//return response()->json($datosdelEmpleado );
 return redirect('perfil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = User::findOrfail($id);


        return view ("perfil/editar",compact('empleado'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosdelusuario = request ()->except(['_token','_method']);
        if ($request->hasFile('imagen')){
            $empleado =User::findOrfail($id);
            Storage::delete('public/'.$empleado->imagen);
            $datosdelusuario ['imagen']=$request->file('imagen')->store('uploads','public');
           
  

        }

    User::where('id','=',$id)->update($datosdelusuario);
        
       

        return redirect('perfil');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('perfil');
    }
}
