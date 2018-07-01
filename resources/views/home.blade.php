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
                        <li class="nav-item">
                            <a class="btn" href="{{ route('producto.index') }}" style="border-color:crimson ; color: gray">
                                 Mis Productos
                            </a>
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
                    
                        <a class="btn" href="{{ route('producto.store') }}" style="border-color:crimson ; color: gray">
                         Publicar un producto
                        </a>
                        
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
                        
                        @foreach($prod as $prods)
            
        <div>
            id auth: {{Auth::user()->id}}
            <img src="https://pikmail.herokuapp.com/{{$prods->email}}?size=30" alt="Profile Picture" style="border-radius: 40px; margin-rigth: 10px;">{{$prods->name}}<br>
            {{$prods->nombre}} <br>
            {{$prods->descripcion}} <br>
            {{$prods->area}} <br>
            {{$prods->estado}}
            <img src="./images/{{$prods->imagen}}" id="prods" style="    width: 60px;
            height: 60px;">
            
        </div>
        @endforeach

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
