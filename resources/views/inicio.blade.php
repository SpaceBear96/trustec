
@extends('layouts.nav')
@section('content')
            <!--Cuerpo-->
        <div class="card-deck mb-3  flex-row">
       <div class="card mb-4 box-shadow col-md-8 ">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Publicaciones</h4>
            </div>
            <div class="card-body" style="height: 600px; overflow-y: auto;border-radius: 5px">
            @foreach($prod as $prods)
            @if ($prods->estado == 1)
                <!--Card 1-->
                <div class="d-none d-md-block">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250 ">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">{{$prods->name}}</strong>
                            <h3 class="mb-1">
                                <a class="text-dark" href="#">{{$prods->nombre}}</a>
                                <A HREF="mailto:{{$prods->email}}" target="_blank">Escribeme</A>    
                            </h3>
                            <p class="card-text mb-auto">{{$prods->descripcion}}</p>
                            <a class="btn btn-primary"
                            href="{{ URL::to('inicio/solicitar',$prods->id)}}">Solicitar Producto
                            </a>
                        </div>
                        <img class="card-img-right flex-auto " data-src="holder.js/200x250?theme=thumb"
                             alt="No hay imagen disponible" style="width: 200px; height: 250px;"
                             src="./images/{{$prods->imagen}}"
                             data-holder-rendered="true">
                    </div>
                </div>
                <div class="d-md-none d-sm-block">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250 ">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">{{$prods->name}}</strong>
                            <h3 class="mb-1">
                                <a class="text-dark" href="#">{{$prods->nombre}}</a>
                            </h3>
                            <p class="card-text mb-auto">{{$prods->descripcion}}</p>
                            <a type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target=".bd-example-modal-sm" href="#">Solicitar Producto
                            </a>
                            
                        </div>
                        <img class="card-img-right flex-auto " data-src="holder.js/200x250?theme=thumb"
                             alt="No hay imagen disponible" style=" height:300px;"
                             src="./images/{{$prods->imagen}}"
                             data-holder-rendered="true">
                    </div>
                </div>
                <!--Fin Card 1-->
                @endif
                @endforeach
           </div>
        </div>  
        <div class="card mb-4 box-shadow col-md-4 d-none d-md-block">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Nuestros puntos de encuentros</h4>
            </div>
            <div class="card-img-top" id="map"></div>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">Nuestros puntos de encuentro oficiales de Tecsup</p>
                <a href="#" class="btn  btn-sm bg-light" style="background-color: #e0e0e0">Ver los puntos</a>
            </div>
        </div>
    </div>
@endsection