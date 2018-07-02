<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carreras;
class CarrerasController extends Controller
{
	 public function agregar(){

        return view('Producto.agregar');
    }
}
