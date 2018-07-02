@extends('layouts.app')
@section('content')
<div>
    <form action="{{ route('producto.store') }}" method="POST" file="true" enctype="multipart/form-data">
        {{ csrf_field() }}
        Nombre del Producto : 
        <input type="text" name="nombre" >
        <br>
        Descripcion : <br>
        <input type="text" name="descripcion">
        </input><br>
        Area :
        <select name="area" id="">
            @foreach($car as $cars)
            <option value="{{$cars->nombre}}">{{$cars->nombre}}</option>
            @endforeach
        </select>
        Imagen: 
        <input type="file" name="imagen">
        <input type="submit" value="Guardar" class="btn btn-success btn-block">
    </form>
        <a href="{{ route('inicio')}}" class="btn btn-danger btn-block">Atras</a>
@endsection 