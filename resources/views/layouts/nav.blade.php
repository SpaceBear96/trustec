<html lang="en">
<head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet"
          href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
          integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/micss')}}'">
    <link rel="stylesheet" href="{{ asset('css/objects')}}'">
    <link rel="script" href="{{ asset('js/popper.min.js')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> TrusTec | {{ Auth::user()->name }}</title>
    <link rel="shortcut icon" href="{{ asset('img/trustec.ico')}}" />

    <!-- Bootstrap-->
    <link rel="stylesheet" href="{{ asset('css/mibostrap/css/bootstrap-material-design.css')}}">
    <link rel="stylesheet"
          href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
          integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/objects.css')}}">
</head>

<body cz-shortcut-listen="true">
<div id="navbar" class="fixed-top">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4  bg-white border-bottom box-shadow">
        <h5 class="my-0 mr-md-auto font-weight-normal">Trustec</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a  class="btn  " href="{{ route('inventario')}}">
                <font>Inventario</font>
            </a>
            <a  class="btn" href="#">
                <font>Prestamos</font>
            </a>
            <a class="btn">
                Nivel 
            </a>
      
 <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
 <img src=" {{ Auth::user()->avatar }} " alt="Profile Picture" style="border-radius: 40px; width:35px;height: 35px; margin-rigth: 10px;"> {{Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="btn-outline-primary dropdown-item" href="{{ route('inventario') }}">Mi perfil</a>
                                    <a class="btn-outline-primary dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                               
       
        </nav>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white border-bottom box-shadow mb-3">
        <a class="navbar-brand" href="{{ url('/')}}">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/inicio')}}">Publicaciones<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/puntos')}}">Puntos de encuentro</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ayuda
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Contactanos</a>
                        <a class="dropdown-item" href="#">Terminos de uso</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Reglamento</a>
                    </div>
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
</div>
<div class="container">
    <!--nav-->
    <div class="card mb-4 box-shadow my-5 my-md-3">
        <nav class="nav nav-pills flex-column flex-sm-row">
            <select name="area" class="badge-pill bg-light flex-sm-fill text-sm-center nav-link" id="area">   
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
        </select> - <a class="badge-pill bg-light flex-sm-fill text-sm-center nav-link" href="{{ route('agregar') }}">Publicar</a>
        </nav>
    </div>
    <!--nav-->
       
     @yield('content')
      
    <!--footer-->
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="./../img/wallpapers/imgs/logo-v2.png" alt="" width="30"
                     height="30">
                <small class="d-block mb-3 text-muted">© 2017-2018</small>
            </div>
            <div class="col-6 col-md">
                <h5>Reglamentos</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="">Ver reglamentos</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Fuentes</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Recursos</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Acerca de</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>
                    <li><a class="text-muted" href="#">Tecsup</a></li>
                    <li><a class="text-muted" href="#">Privacidad</a></li>
                    <li><a class="text-muted" href="#">Terminos</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>
</body>
<script>$(document).ready(function () {
    $('body').bootstrapMaterialDesign();
});</script>

<!--App de Maps-->
<script>
    function initMap() {
        var uluru = {lat: -12.044063, lng: -76.952909};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPebF1uaLVnQ8xwOuMo44RKBpnitBhW-4&callback=initMap" async defer></script>

    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/localizacion.js')}}"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxlBD7pHLr89_h0qWzkhr_Px2Ekn3F05k&callback=initMap">
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
        integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
        integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9"
        crossorigin="anonymous"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#03a9f4',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>



</html>