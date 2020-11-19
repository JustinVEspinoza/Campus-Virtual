<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body >

    <nav class="navbar navbar-expand-md navbar-dark shadow-sm blue" style="margin-right:0em">
        <a href="{{ url('/') }}"><img class="imagen-logo" src="{{ asset('icons/InstitutoRivera.png') }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarEntorno">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container-fluid" >  
            <div class="collapse navbar-collapse " id="navbarEntorno">

                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                        <a class="nav-link navbar-brand" href="{{ url('/entorno_virtual') }}">Entorno virtual</a>
                    </li>     
                    <li class="nav-item">
                        <a class="nav-link navbar-brand" >Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-brand">Cronograma</a>
                    </li>  
                    <li class="nav-item">
                        <a class="nav-link navbar-brand">Tutoría</a>
                    </li>  
                    <li class="nav-item dropdown">
                        <a class="nav-link navbar-brand " href="" id="navbardrop" data-toggle="dropdown">
                            <i class="fas fa-user fa-2x text-white"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right blue">
                            <a class="dropdown-item text-white" href="{{ url('/entorno_virtual/perfil') }}">
                                <span><i class="far fa-address-card mr-1"></i></span>Perfil
                            </a>
                            <a class="dropdown-item text-white" href="{{ url('/entorno_virtual/deudas') }}">
                                <span><i class="fas fa-file-invoice-dollar mr-1"></i></span>Deudas
                            </a>
                            <a class="dropdown-item text-white" >
                                <span><i class="far fa-folder-open mr-1"></i></span>Expediente
                            </a>
                            <a class="dropdown-item text-white">
                                <span><i class="fas fa-info-circle mr-1"></i></span>Ayuda
                            </a>
                            <a class="dropdown-item text-white" href="{{ url('/login') }}">
                                <span><i class="fa fa-door-open mr-1 "></i></span>Salir
                            </a>
                        </div>
                    </li>  
                </ul>
            </div>   
        </div>
    </nav>




    </body>
</html>