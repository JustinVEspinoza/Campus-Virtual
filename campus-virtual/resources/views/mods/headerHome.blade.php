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

    <nav class="navbar navbar-expand-md navbar-dark shadow-sm blue">
        <a href="{{ url('/inicio') }}"><img class="imagen-logo" src="{{ asset('icons/InstitutoRivera.png') }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="fa fa-bars text-white" ></span>
        </button>
        <div class="container">  
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link navbar-brand" href="{{ url('/inicio') }}">Inicio</a>
                    </li>     
                    <li class="nav-item">
                        <a class="nav-link navbar-brand" href="{{ url('/contacto') }}">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-brand" href="{{ url('/login') }}">Inicio Sesión</a>
                    </li>  
                </ul>
            </div>   
        </div>
    </nav>
    </body>
</html>