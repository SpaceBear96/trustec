<?php

namespace App\Http\Controllers;
use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inventario(){
        $prod = Producto::Productos();

        return view('Producto.index',compact('prod'));
    }
    public function index()
    {
      //  $users = Producto::All();
      //  return view('Producto.index',compact('producto'));
      $prod = Producto::Productos();
      return view('home',compact('prod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function agregar(Request $request)
    {

        return view('Producto.agregar');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //  $this->validate($request,[ 'nombre'=>'required', 'descripcion'=>'required','area'=>'required', 'dueno'=>'required']);
       //  Producto::create($request->all());
       //  return redirect()->route('home')->with('success','Registro creado satisfactoriamente');
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
        }
         $producto = new Producto();
         $producto->nombre = $request->input('nombre');
         $producto->descripcion = $request->input('descripcion');
         $producto->dueno = $request->input('dueno');
         $producto->imagen = $name;
         $producto->area = $request->input('area');
         $producto->save();

         return redirect()->route('Producto.index')->with('success','Producto Agregado y Publicado');
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
        //
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
