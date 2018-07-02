
@extends('layouts.app')
@section('content')
<div class="card-deck mb-3  flex-row">
        <div class="card mb-4 box-shadow col-md-12 ">
            <div class="modal-header">
                <hr>
                <h3  id="exampleModalLabel">Publicar producto</h3>
                <hr>
            </div>
            <div >
                <div class="container">
                    <p class="mb-3">
                        <font class="text-center">Propietario : {{$prod->name}}</font>
                        <br>
                        <font class="text-secondary">Correo : antony.cueva@tecsup.edu.pe</font>
                    </p>

                    <div class="col-12">
                        <form class="" action="">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card box-shadow" style="width: 18rem;">
                                        <img class="card-img-top flex-auto " alt="No hay imagen disponible"
                                             src="./../../images/{{ $producto->imagen }}">
                                        <div class="card-body">
                                            <p class="h4"><font color="blue">{{$producto -> nombre}}</font></p>
                                            <p h4><font class="text-secondary"> Descripcion </font>:</p>
                                            <p>
                                                <font color="black">{{$producto -> descripcion }}</font>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">*Fecha de pedido</label>
                                        <input class="form-control" type="date">
                                    </div>
                                    <div class="form-group">
                                        <label for="">*Fecha de entrega</label>
                                        <input class="form-control" type="date">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <button class="btn btn-primary btn-raised my-4 float-right" type="submit">Realizar pedido
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
@endsection 