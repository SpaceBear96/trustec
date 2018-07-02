<?php

namespace App\Http\Controllers;
use App\Producto;
use Illuminate\Http\Request;
Use Socialite;
use App\Carreras;
use Auth;
use App\User;
class ProductoController extends Controller
{

    public function index()
    {
      $prod = Producto::Productos();
      return view('inicio',compact('prod'));
    }

    public function agregar(Request $request)
    {
        return view('Producto.agregar');
    }

    public function store(Request $request)
    {
       //  $this->validate($request,[ 'nombre'=>'required', 'descripcion'=>'required','area'=>'required', 'dueno'=>'required']);
       //  Producto::create($request->all());
       //  return redirect()->route('home')->with('success','Registro creado satisfactoriamente');
        $due = Auth::user()->id;
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
        }
         $producto = new Producto();
         $producto->nombre = $request->input('nombre');
         $producto->descripcion = $request->input('descripcion');
         $producto->dueno = $due;
         $producto->imagen = $name;
         $producto->area = $request->input('area');
         $producto->save();

         return redirect()->route('m_agregar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto=Productos::find($id);
        return view('Prestamo.agregar',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
