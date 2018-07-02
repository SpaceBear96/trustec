@extends('layouts.app')
@section('content')
    <div class="card-deck mb-3  flex-row">
        <div class="row">

            <div class="col-md-8">
                <div class="card mb-4 box-shadow my-5 my-md-3">
                    <nav class="nav nav-pills flex-column flex-sm-row">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="true"
                               aria-expanded="false">Filtrar por : Estado de publicaciones</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Publicado</a>
                                <a class="dropdown-item" href="#">Sin publicar</a>
                                <a class="dropdown-item" href="#">Pendiente</a>
                            </div>
                        </li>
                    </nav>
                </div>
                <div class="card mb-5 box-shadow ">
                    <div class="card-body">
                        <div class="card-header"><font class="my-0 font-weight-normal h4">Mis Prestamos</font></Strong></div>
                        <div class="badge-pill search card box-shadow my-3 flex-row">
                            <div class="">
                                <div class="bmd-form-group bmd-collapse-inline pull-xs-right">
                                    <button class="btn bmd-btn-icon" for="search" data-toggle="collapse"
                                            data-target="#collapse-search" aria-expanded="false"
                                            aria-controls="collapse-search">
                                        <i class="material-icons">search</i>
                                    </button>
                                    <span id="collapse-search" class="collapse">
                                        <input class="form-control" type="text" id="search" placeholder="Busca tu producto">
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body" style="height: 600px; overflow-y: auto;border-radius: 5px">
                            <!--Card 1-->
                            <div class="">
                                <div class="card flex-md-row mb-4 box-shadow h-md-250  ">
                                    <div class="card-body d-flex flex-column align-items-start">
                                        <h3 class="mb-1">
                                            <a class="text-dark" href="#"><font color="black">Nivelador </font></a>
                                        </h3>
                                        <p class="card-text mb-auto"><font class="text-secondary">Presto nivelador , rojo es
                                            bueno me ayudo en mi proyecto pasado
                                            , util para la getne de pesada.</font></p>
                                        <!-- Color de la pastilla-->
                                        <font class="my-3 badge-pill" style="background-color: #ffd180"><strong>Estado de pedido: </strong>Pendiente</font>

                                    </div>
                                </div>
                            </div>
                            <!--Fin Card 1-->
                            <div class="">
                                <div class="card flex-md-row mb-4 box-shadow h-md-250  ">
                                    <div class="card-body d-flex flex-column align-items-start">
                                        <h3 class="mb-1">
                                            <a class="text-dark" href="#"><font color="black">Nivelador </font></a>
                                        </h3>
                                        <p class="card-text mb-auto"><font class="text-secondary">Presto nivelador , rojo es
                                            bueno me ayudo en mi proyecto pasado
                                            , util para la getne de pesada.</font></p>
                                        <!-- Color de la pastilla-->
                                        <font class="my-3 badge-pill text-light" style="background-color: #b71c1c"><strong>Estado de pedido: </strong>Rechazado</font>

                                    </div>
                                </div>
                            </div>
                            <!--Fin Card 1-->
                            <div class="">
                                <div class="card flex-md-row mb-4 box-shadow h-md-250  ">
                                    <div class="card-body d-flex flex-column align-items-start">
                                        <h3 class="mb-1">
                                            <a class="text-dark" href="#"><font color="black">Nivelador </font></a>
                                        </h3>
                                        <p class="card-text mb-auto"><font class="text-secondary">Presto nivelador , rojo es
                                            bueno me ayudo en mi proyecto pasado
                                            , util para la getne de pesada.</font></p>
                                        <!-- Color de la pastilla-->
                                        <font class="my-3 badge-pill" style="background-color: #76ff03"><strong>Estado de pedido: </strong>Aceptado</font>

                                    </div>
                                </div>
                            </div>
                            <!--Fin Card 1-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow d-none d-md-block my-5 my-md-3">
                    <div class="card-body d-flex flex-column align-items-start">
                        <div class="card-header"><strong>Leyenda estados del producto</strong></div>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Pendiente
                                <span class="mx-1 badge badge-primary badge-pill " style="background-color:#ffd180">A</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Rechazado
                                <span class="mx-1 badge badge-primary badge-pill" style="background-color: #b71c1c">B</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Aceptada
                                <span class="mx-1 badge badge-primary badge-pill" style="background-color: #76ff03">C</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection