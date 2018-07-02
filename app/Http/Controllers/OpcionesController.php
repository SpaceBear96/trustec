<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Socialite;
use Auth;
use App\User;
use App\Producto;
class OpcionesController extends Controller
{
    public function inventario(){

    	 $prod = Producto::All();
        return view('Producto.perfil',compact('prod'));
    }

	public function pedientes(){

    	$prod = Producto::All();
        return view('Producto.pendientes',compact('prod'));
    }
    public function rechadazo(){

    	$prod = Producto::All();
        return view('Producto.rechazado',compact('prod'));
    }
    public function prestado(){
    	$prod = Producto::All();
        return view('Producto.prestado',compact('prod'));
    }



}
