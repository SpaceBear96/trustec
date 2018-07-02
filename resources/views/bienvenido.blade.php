<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>TrusTec | Presentacion</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet"
          href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
          integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/cover.css">
    <link rel="stylesheet" href="./css/micss.css">
</head>
<body>
<main role="main" class="mb-5">


    <nav class="navbar navbar-expand-lg navbar-light fixed-bottom text-center opacity srbnav "
         style="background-color: white">
        <a class="navbar-brand" href="#">
            <img class="" src="./img/icons-system/trustec-brand.png" width="100" height="20" alt="">
        </a>
        <button style="border: transparent" class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img style="" src="./img/icons-system/menu.svg" height="25px" alt="">
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">¿Que es trustec?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">¿Quienes somos?</a>
                </li>
                <li class="nav-item dropup">

                    @if (Route::has('login'))
                    @auth
                    @else 
                    <a class="nav-link dropupx-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Movil
                    </a>     
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                          <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                   
                    </div>
                    @endauth
                @endif  
    
                        


                </li>
            </ul>
            <div class="align-content-sm-center">
                <div class="align-content-sm-center">
                @if (Route::has('login'))
        
                    @auth
                        <a class="btn btn-lg rounded btn-raised btn-api" href="{{ route('inicio') }}">Inicio</a>
                    @else      
                    <div class="bmd-form-group bmd-collapse-inline pull-xs-right">
                        <a class="btn btn-lg rounded btn-raised btn-api" href="{{url('auth/google')}}">
                            <img src="{{ asset('img/icons-system/google-api.png')}}" height="25" alt="" class="mx-2">Iniciar
                            Sesion
                      </a>
                          
                    </div>
                    @endauth

                @endif 
                </div>
            </div>
        </div>
    </nav>
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column mb-5 text-center">
        <header class="masthead mb-auto my-5">
            <h3 class="masthead-brand mb-3 "><img src="./img/icons-system/trustec-brand.png" alt=""></h3>
        </header>
        <main role="main" class="inner cover jumbotron jum ">
            <div class="jum-in">
                <h1 class="cover-heading"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font
                        color="blue">Trustec</font>
                    , la aplicacion de prestamo libre .</font></font></h1>
                <p class="lead"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font
                        style="color: #e91e63">Trustec</font> es
                    una
                    aplicacion de prestamos de objetos , sin ningun costo, solo otorgando tu confianza en el
                    resto.</font><font
                        style="vertical-align: inherit;">Publica lo que ya no uses , prestale a tus amigos , tal vez
                    algun
                    dia tu tambien lo necesites , y te podremos ayudar .</font></font></p>
                <p class="lead">
                    <a href="#" class="btn btn-lg btn-raised text-light  "
                       style="background-color:#311b92 ;box-shadow: -2px 4px 7px 1px #311b92;"><font
                            style="vertical-align: inherit;"><font
                            style="vertical-align: inherit;">Ver video</font></font></a>
                </p>
            </div>
        </main>
        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trustec es una
                    aplicacion creada por el team : ForWork
                </font>
                </font>
                </p>
            </div>
        </footer>
    </div>
    <div class="container">
        <div class="row my-4">
            <div class="bg-danger d-none  col-lg-12" style="height: 100px"></div>
            <div class="col-lg-12 my-5">
                <h1 class="cover-heading">En <font style="vertical-align: inherit;"><font
                        style="vertical-align: inherit;"><font color="blue">Trustec</font>
                    , que hacer ?</font></font></h1>
            </div>
            <div class="col-lg-4">
                <div class="card tstyle mb-3">
                    <div class="card-body ">
                        <div class="text-center">
                            <img class="rounded-circle"
                                 src="./img/wallpapers/slider/slider-calculadora.jpg"
                                 alt="Generic placeholder image" width="140" height="140">
                        </div>
                        <h2>Publica</h2>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum
                            id
                            ligula
                            porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                            condimentum
                            nibh,
                            ut fermentum massa justo sit amet risus.</p>
                        <p>
                            <btn class="sbrigth  sbrbutton btn text-light " style="background-color: #254bbc"> Ver mas
                                »
                            </btn>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card tstyle mb-3">
                    <div class="card-body ">
                        <div class="text-center">
                            <img class="rounded-circle "
                                 src="./img/wallpapers/slider/slider-work.jpg"
                                 alt="Generic placeholder image" width="140" height="140">
                        </div>
                        <h2>Busca</h2>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum
                            id
                            ligula
                            porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                            condimentum
                            nibh,
                            ut fermentum massa justo sit amet risus.</p>
                        <p>
                            <btn class="sbrigth  sbrbutton btn text-light " style="background-color: #254bbc"> Ver mas
                                »
                            </btn>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card tstyle mb-3">
                    <div class="card-body ">
                        <div class="text-center">
                            <img class="rounded-circle "
                                 src="./img/wallpapers/slider/slider-nivelador.jpg"
                                 alt="Generic placeholder image" width="140" height="140">
                        </div>
                        <h2>Reserva</h2>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum
                            id
                            ligula
                            porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                            condimentum
                            nibh,
                            ut fermentum massa justo sit amet risus.</p>
                        <p>
                            <btn class="sbrigth  sbrbutton btn text-light " style="background-color: #254bbc"> Ver mas
                                »
                            </btn>
                        </p>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->

        <hr class="featurette-divider my-5">

        <div class="row featurette ">
            <div class="col-md-7">
                <h2 class="featurette-heading mb-3">Trustec <span
                        class="text-muted">es tu toolbox de la comunidad.</span></h2>
                <p class="lead text-justify
">Buscar piezas,herramientas puede ser un trabajo dificil y costoso . Si no conoces el
                    lugar adecuado.
                    Muchos nos deshacemos de las piezas ya usadas o los tenemos guardados , entonces la pregunta que
                    podemos hacer con ellas .
                    Pues ahora con trustec puedes prestarselos a tus compañeros y obetener un prestigio de que eres una
                    gran persona , y con ello que tu tambien cuando llegues a necesitar algo te puedan devolver el favor
                    .
                    Usa trustec , se parte de nuestra gran comunidad .
                </p>
            </div>
            <div class="col-md-5">
                <img class=" img-fluid mx-auto card-img card sbrimg  " data-src="holder.js/500x500/auto"
                     alt="500x500"
                     src="./img/wallpapers/slider/slider-work.jpg"
                     data-holder-rendered="true">
            </div>
        </div>

        <card class="card separador mb-5 my-5">
            <div class="card-body "></div>
        </card>

        <div class="row mb-5">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Gana reputacion publicando y ayudando al resto. <span
                        class="text-muted">El resto podra verlo a la hora de publicar.</span></h2>
                <p class="lead">Cuando publiques podras ver como tu estatus sube de <font color="blue">nivel</font> .
                    Mientras que el resto de nuestra comunidad <font color="#dc143c">confiara</font> mas en ti .</p>
                <btn class="sbrigth  sbrbutton btn text-light " style="background-color: #254bbc">Mas informacion</btn>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto sbr sbrimg" data-src="holder.js/500x500/auto" alt="500x500"
                     style="width: 500px;"
                     src="./img/wallpapers/slider/slider-nivelador.jpg"
                     data-holder-rendered="true">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Podras revisar las publicaciones ordenadas por tu carrera. <span class="text-muted"> y podras registrarte con tu correo de <font color="blue">Tecusp</font></span></h2>
                <p class="lead"><font color="#dc143c">Busca</font> de manera <font color="blue">efectiva</font> , las publicaciones de las herramientas relacionadas a tu carrera , para que no te compliques buscando .
                Tambien podras hacerlo usando los filtros por <font color="blue">carreras</font>.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500"
                     style="width: 500px"
                     src="./img/wallpapers/slider/slider-calculadora.jpg"
                     data-holder-rendered="true">
            </div>
        </div>
        <hr class="featurette-divider">
    </div>
    <div class="container-fluid" >
    <div class="container">
        <div class="row my-4">
            <div class="col-lg-12 my-auto">
                <h1 class="cover-heading"><font style="vertical-align: inherit;"><font
                        style="vertical-align: inherit;"><font color="#5f9ea0">¿Quienes somos?</font>
                </font></font></h1>
            </div>
            <div class="col-lg-4 my-4">
                <div class="card tstyle-2 bg-light mb-3" >
                    <div class="card-body row">
                        <div class="col-6">
                            <div class="card-text">
                                <font class="text-left text-primary">
                                    Antony Sebastian Cueva Fajardo
                                </font><br><font class="align-text-to secondary-text" size="0.2em">Programador Front end</font><br>
                                <br>
                                <p><font color="#6495ed" class="text-info text-justify" size="0.3em">Soy un estudiante de tecsup con ambiciones y metas.</font>            
                            </div>
                            <button class=" btn btn-raised"><font  size="0.6"><code>Encuentrame en github</code></font></button>
                        </div>
                        <div class="col-6">
                            <div class="text-center">
                                <img class="rounded-circle"
                                     src="./img/wallpapers/imgs/perfil-sebastian.jpg"
                                     alt="Generic placeholder image" width="150" height="150">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-4">
                <div class="card tstyle-2 bg-light mb-3" >
                    <div class="card-body row">
                        <div class="col-6">
                            <div class="card-text">
                                <font class="text-left text-primary">
                                    Cafu Junior Aguilar Baldeon
                                </font><br><font class="align-text-to secondary-text" size="0.2em">Programador Back End</font><br>
                                <br>
                                <p><font color="#6495ed" class="text-info text-justify" size="0.3em">Soy un estudiante de tecsup con fascinación por los algoritmos</font></p>
                            </div>
                            <a class=" btn btn-raised" href="https://github.com/SpaceBear96" target="_blank"><font  size="0.6"><code>Encuentrame en github</code></font></a>
                        </div>
                        <div class="col-6">
                            <div class="text-center">
                                <img class="rounded-circle"
                                     src="https://avatars2.githubusercontent.com/u/33258108?s=400&amp;u=f45082440896e48cb6f490083f616dfcebda3019&amp;v=4"
                                     alt="Generic placeholder image" width="150" height="150">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-4">
                <div class="card tstyle-2 bg-light mb-3" >
                    <div class="card-body row">
                        <div class="col-6">
                            <div class="card-text">
                                <font class="text-left text-primary">
                                    John Fabian Torres
                                </font><br><font class="align-text-to secondary-text" size="0.2em">Programador Front end</font><br>
                                <br>
                                <p><font color="#6495ed" class="text-info text-justify" size="0.3em">Soy un estudiante de tecsup con ambiciones y metas.</font></p>
                            </div>
                            <button class=" btn btn-raised"><font  size="0.6"><code>Encuentrame en github</code></font></button>
                        </div>
                        <div class="col-6">
                            <div class="text-center">
                                <img class="rounded-circle"
                                     src="./img/wallpapers/imgs/perfil-sebastian.jpg"
                                     alt="Generic placeholder image" width="150" height="150">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
    </div>
</div>

    <footer class="container">
        <p class="float-right"><a href="#">Ir al incio</a></p>
        <p>© 2018 Trustec, Inc. · <a href="#">Privacidad</a> · <a href="#">Terminos</a></p>
    </footer>
    <br>
    <br>
    <br>
</main>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
        integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
        integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9"
        crossorigin="anonymous"></script>
</body>
</html>