<?php

namespace App\Http\Controllers;
use App\Producto;
use App\Prestamo;
use Illuminate\Http\Request;
use DB;

class PrestamoController extends Controller
{

    public function solicitar(){

       //  $this->validate($request,[ 'nombre'=>'required', 'descripcion'=>'required','area'=>'required', 'dueno'=>'required']);
       //  Producto::create($request->all());
       //  return redirect()->route('home')->with('success','Registro creado satisfactoriamente');

         $prestamo = new Producto();
         $producto->nombre = $request->input('nombre');
         $producto->descripcion = $request->input('descripcion');
         $producto->dueno = $due;
         $producto->imagen = $name;
         $producto->area = $request->input('area');
         $producto->save();

 
    	return redirect()->route('m_solicitar');
    }



    public function conseguir($id){

    	$prod = Producto::All();
    	
    	$producto = DB::table('producto')->where('id',$id)->first();
    	return view('Prestamo.agregar',compact('prod','producto'))->with('id',$id);
    }
    public function inventario(){
    	return view('Prestamo.prestamos');
    }
}
