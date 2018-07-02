<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensajesController extends Controller
{
    public function agregar(){
        return view('Mensajes.m_agregado');
    }
    public function solicitar(){
        return view('Mensajes.m_solicitado');
    }
    public function eliminar(){
        return view('Mensajes.m_eliminar');
    }

}
