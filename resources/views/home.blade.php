@extends('layouts.app')

@section('content')
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}  
                        </div>
                    @endif

                    You are logged in!
                    Bienvenido ,por favor confirmar su email {{ Auth::user()->email }}
                    {{ Auth::user()->avatar }}
                    <img src="https://pikmail.herokuapp.com/{{ Auth::user()->email }}?size=50" alt="Profile Picture" style="border-radius: 40px;">
                </div>
            </div>
        </div>
    </div>
</div>
-->
<div></div>
<div class="container-fluid" style="background:white ; ">
    <div class="row">
        <div class="col-sm-12" style="background: white">
            <nav class="navbar navbar-expand-lg navbar-light " style="background-color:white;  ">
                <a class="navbar-brand" href="#">Inicio</a>
                <!-- <nav class="navbar navbar-light navbar-expand-lg" style="background-color: #e3f2fd;"-->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Calculadoras <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Puntos de entrega</a>
                        </li>
                    </ul>
                    <div class="bmd-form-group bmd-collapse-inline pull-xs-right">
                        <button class="btn bmd-btn-icon" for="search" data-toggle="collapse"
                                data-target="#collapse-search" aria-expanded="false" aria-controls="collapse-search">
                            <i class="material-icons">search</i>
                        </button>
                        <span id="collapse-search" class="collapse">
<input class="form-control" type="text" id="search" placeholder="Busca tu producto">
</span>
                    </div>
                </div>
            </nav>
            <!--Buscador
            <div class="bmd-form-group bmd-collapse-inline pull-xs-right">
                <button class="btn bmd-btn-icon" for="search" data-toggle="collapse" data-target="#collapse-search" aria-expanded="false" aria-controls="collapse-search">
                    <i class="material-icons">search</i>
                </button>
                <span id="collapse-search" class="collapse">
<input class="form-control" type="text" id="search" placeholder="Busca tu producto">
</span>
            </div>
            -->
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12" style="background: white">
            <nav class="navbar"
                 style="background-color:#e3f2fd ; border-style: solid ;height: 50%;border-radius: 20px ;margin-top: 10px">
                <form class="form-inline">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <div class="dropdown" style="border-color: crimson">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Carreras
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Pesada</a>
                                <a class="dropdown-item" href="#">Diseño de Software</a>
                                <a class="dropdown-item" href="#">Electrotecnia Industrial</a>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-primary btn-sm"
                                style="border-color:crimson ; color: gray"> Publicar un producto
                        </button>
                    </div>
                </form>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-xs-12  col-md-12 col-lg-9 " style="background: white">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h5>Productos</h5>
                    </div>
                    <div class="card-text">
                        <table class="table table-borderless ">
                            <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h5>Celular Iphone</h5>
                                            </div>
                                            <div class="card-image">
                                                <img src="{{asset('img/mobile%20.png')}}" style="width: 40px"></div>
                                        </div>
                                    </div>

                                </th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <p>Hello</p>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-12  col-lg-3" style="background: white">
            <div class="card">
                <div class="card-img-top" id="map"></div>
                <div class="card-body">
                    <h5 class="card-title">Nuestros puntos de encuentros</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        cards content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>


        </div>
    </div>
    <br>
    <div class="row">
        <div class="col" style="background: white ;">
            <div class="card" style="margin-top: 20px ;padding-bottom: 20px">
                <div class="card-body">
                    <div class="card-title">
                        <h6>Nosotros</h6>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Numero de contacto: 54550588
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
<script>
    function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxlBD7pHLr89_h0qWzkhr_Px2Ekn3F05k&callback=initMap">
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
        integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U"
        crossorigin="anonymous"></script>

@endsection
