<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carreras;
class CarrerasController extends Controller
{
	 public function agregar(){
    	$car = Carreras::All();
        return view('Producto.agregar',compact('car'));
    }
}
