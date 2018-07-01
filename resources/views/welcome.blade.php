<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Bienvenido a TrusTec</title>
        <link rel="shortcut icon" href="{{ asset('img/trustec.ico')}}" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet"
          href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
          integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/micss.css') }}">
        <!-- Styles -->
      <style>
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 45px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .2rem;
                text-decoration: none;
                text-transform: uppercase;
            }</style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <nav class="navbar navbar-expand-lg navbar-light opacity fixed-bottom ">
        <a class="navbar-brand" href="#">
            <img class="align-content-center" src="{{ asset('img/icons-system/trustec-brand.png')}}" width="120" height="28"
                 alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#fat">¿Que es Trustec?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#mdo">¿Quienes somos?</a>
                </li>
                <li class="nav-item dropup">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        Soporte
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#one">Nuestros terminos</a>
                        <a class="dropdown-item" href="#two">Reglamentos de uso</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#three">Preguntas
                            <frecuentes></frecuentes>
                        </a>
                    </div>
                </li>
            </ul>
            <div class="align-content-sm-center">
                <div class="align-content-sm-center">
                @if (Route::has('login'))
        
                    @auth
              
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
</header>

<div id="color-bar">
    <div id="nav-bar"></div>
    <div class="container-fluid my-5">
        <div class="card">
            <div class="container-fluid ">
                <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
                    <div class="card-header">
                        <h1 class=" my-4" id="fat">TRUSTEC</h1>
                    @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('home') }}">Intercambios</a>
                    @else
                        
                    @endauth
                </div>
                    @endif
                    </div>
                    
                    <div class="card-body" style=" padding-bottom: 0px;">
                        <div class="row ">
                            <div class="container-fluid text-presentacion" style="background-color:#002171;color: white">
                                <div class="col-md-6 ">
                                    <p class=" text-justify">Es una aplicacion de prestamo de objetos para la comunidad
                                        de
                                        TECSUP ,
                                        pensada para los
                                        estudiantes , que buscan herramientas para realizar sus proyectos . Encuentralas
                                        aqui ,
                                        y pidelo a
                                        alguien que ya lo tenga o puedes ayudar a alguien , prestadolo tú , con la mayor
                                        confianza . con
                                        Trustec la confianza en tus manos.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-5 col-sm-12 sbrtop " style="padding-left: 0px;padding-right: 0px;">
                                <div class="card bg-dark text-white">
                                    <img class="card-img" src="{{ asset('img/wallpapers/imgs/img-01.jpg')}}"
                                         alt="Card image">
                                    <div class="card-img-overlay" style="height:auto;overflow: auto">
                                        <h1 class="my-4 container-fluid  text">¿Quienes somos?</h1>
                                        <p class="container-fluid text-justify h5">Somos un grupo de estudiantes , como
                                            tú que busca crear una
                                            comunidad
                                            de confianza entre los estudiantes de TECSUP , con el fin de poder ayudarlo
                                            a encontrar
                                            herramientas
                                            , piezas , objetos a las personas que no saben donde encontrar.
                                            ¿Porque no prestarle a tus compañeros?, con nuestra aplicacion no tendras
                                            que
                                            preocuparte por nada ,
                                            solo confia en nosotros y nuestra comunidad.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 sbrtop  text-dark"
                                 id="mdo">
                                <div class="card text-dark" style="height:280px;overflow: auto">
                                    <div class="card-header h4">TeamWork</div>
                                    <div class="card-body">
                                        <div class="container-fluid jumbotron">
                                            Cafu Aguilar
                                        </div>
                                        <div class="container-fluid jumbotron">
                                            Cueva Fajardo
                                        </div>
                                        <div class="container-fluid jumbotron">
                                            Jhon
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 sbrtop"
                     style="background-color: white;height: auto ;padding-bottom: 20px;" id="one">
                    <br>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <h1 class="display-4 my-4  text">Nuestros terminos</h1>
                            <p class="lead  text-justify h5">Para brindarles una mayor seguridad a nuestros
                                usuarios , por
                                favor lea nuestros reminos de uso y algunas reglas de nuestra comunidad .
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div id="accordion">
                                <div class=" ">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                Reglamento
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                         data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                            terry
                                            richardson ad
                                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                            brunch. Food
                                            truck
                                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                            aliqua put a
                                            bird on it
                                            squid single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                            keffiyeh
                                            helvetica,
                                            craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                            Ad vegan
                                            excepteur
                                            butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
                                            denim
                                            aesthetic synth
                                            nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                Condiciones
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                         data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                            terry
                                            richardson ad
                                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                            brunch. Food
                                            truck
                                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                            aliqua put a
                                            bird on it
                                            squid single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                            keffiyeh
                                            helvetica,
                                            craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                            Ad vegan
                                            excepteur
                                            butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
                                            denim
                                            aesthetic synth
                                            nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                Otros Terminos
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                         data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                            terry
                                            richardson ad
                                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                            brunch. Food
                                            truck
                                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                            aliqua put a
                                            bird on it
                                            squid single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                            keffiyeh
                                            helvetica,
                                            craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                            Ad vegan
                                            excepteur
                                            butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
                                            denim
                                            aesthetic synth
                                            nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" card col separador"></div>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12" style="background-color: white;height: 400px ;padding-bottom: 20px;"
                     id="two">

                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="background-color: #4527a0;padding-left: 0px;padding-right: 0px;"
                     id="three">

                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>

        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
        integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
        integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9"
        crossorigin="anonymous"></script>
<script>$(document).ready(function () {
    $('body').bootstrapMaterialDesign();
});</script>
    </body>
</html>
