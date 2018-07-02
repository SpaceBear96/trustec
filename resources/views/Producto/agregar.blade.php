@extends('layouts.app')
@section('content')
        <main role="main" class="inner cover jumbotron jum ">
                <h2>Agregar un Producto</h2>
                <hr>
                <form action="{{ route('producto.store') }}" method="POST" file="true" enctype="multipart/form-data">
                       {{ csrf_field() }}
                       <br>
                    <div class="form-group">
                        <label for="">Nombre del Producto :</label>
                        <input type="text" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="">Descripcion :</label>
                        <input type="text" name="descripcion">
                    </div>
                    <div class="form-group">
                    Area: 
                <select name="area" id="">
                <option value="Todos">Todos</option>         
                <option value="Administración de Redes y Comunicaciones">Administración de Redes y Comunicaciones</option>
                <option value="Diseño y Desarrollo de Simuladores y Videojuegos">Diseño y Desarrollo de Simuladores y Videojuegos</option>
                <option value="Diseño Industrial">Diseño Industrial</option>
                <option value="Aviónica y Mecánica Aeronáutica">Aviónica y Mecánica Aeronáutica</option>
                <option value="Diseño y Desarrollo de Software">Diseño y Desarrollo de Software</option>
                <option value="Electrónica y Automatización Industrial">Electrónica y Automatización Industrial</option>
                <option value="Gestión y Mantenimiento de Maquinaria Industrial">Gestión y Mantenimiento de Maquinaria Industrial</option>
                <option value="Electricidad Industrial">Electricidad Industrial</option>
                <option value="Gestión y Mantenimiento de Maquinaria Pesada">Gestión y Mantenimiento de Maquinaria Pesada</option>
                <option value="Mecatrónica Industrial">Mecatrónica Industrial</option>
                <option value="Operaciones Mineras">Operaciones Mineras</option>
                <option value="Producción y Gestión Industrial">Producción y Gestión Industrial</option>
                <option value="Procesos Químicos y Metalúrgicos">Procesos Químicos y Metalúrgicos</option>
                 </select>
                    </div>
             
                <div class="form-group">
                        <input type="file" name="imagen">
                </div>
           
                <a class="btn btn-secondary btn-dangerous" href="{{url('/')}}">Atras</a>
                <input type="submit" value="Guardar" class="btn btn-primary btn-success">
            </form>
        </main>
@endsection 