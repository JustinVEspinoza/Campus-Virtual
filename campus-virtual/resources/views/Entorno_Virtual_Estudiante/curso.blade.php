
<title>{{ $name }}</title>



<div>
@include('mods.header-estudiante')

<div class="container-fluid py-5">

    <div class="container-info-curso mb-5">

        <div class="row col-12"><h3>{{ $name }}</h3></div>
        <div class="row ">
            <div class="card col-12">
                <div class=" d-flex m-2 justify-content-around">
                    <a href="{{ url('#') }}" class= "font-decoration-none">Chat</a>
                    <a href="{{ url('#') }}"  class= "font-decoration-none">Rúbrica</a>
                </div>
            </div> 
        </div>

        <div class="row mt-5">
            <div class="card border-color-gray col-12" style="height:15em"></div>
        </div>


        <div class="row mt-3 flex-column col-12">
            <h5>Información del profesor</h5>
            <div class="card">
                <div class="card-body d-flex justify-content-between">
                    <div>
                        <h6>Profesor:</h6>
                        <h6>Edad:</h6>
                        <h6>Estado:</h6>
                    </div>
                    <div><i class="fas fa-user fa-4x text-center" style="color:lightgray;"></i></div>
                </div>
            </div>
        </div>


        <div class="row mt-3 flex-column col-12">
            <h5>Información del curso</h5>
            <div class="card">
                <div class="d-flex card-body text-break scroll-y" style="height: 10em;">
                    <div>
                        <h6>Lecciones:</h6>
                        <h6>Requisitos:</h6>
                        <h6>Descripción:
                            ed ut perspiciatis unde omnis iste 
                            natus error sit voluptatem accusantium 
                            doloremque laudantium, totam rem aperiam,
                            eaque ipsa quae ab illo inventore veritatis 
                            et quasi architecto beatae vitae dicta sunt 
                            explicabo. Nemo enim ipsam voluptatem quia voluptas 
                            sit aspernatur aut odit aut fugit, sed quia
                            consequuntur magni dolores eos qui ratione 
                            voluptatem sequi nesciunt. Neque porro quisquam
                            est, qui dolorem ipsum quia dolor sit amet, 
                            consectetur, adipisci velit, sed quia non numquam 
                            eius modi tempora incidunt ut labore et dolore 
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    



    <a class="container-fluid mt-5 text-pointer" data-toggle="collapse" data-target="#Semana_1">
        <div class="card text-white blue">
            <div class="text-center m-2">
                <h5 class="font-weight-bold">Semana 1: xx-xx del mes x.</h5>
            </div>
        </div>
    </a>
    <div id="Semana_1" class=" collapse container-info-curso"> 
        <ul class="lista-material">
            <li><a class= "font-decoration-none" href="{{ url('#') }}"><span><i class="fa fa-file-pdf text-danger"></i></span> Descargable.pdf </a></li>    
            <li><a class= "font-decoration-none" href="{{ url('#') }}"><span><i class="fa fa-file-upload text-primary"></i></span> Punto de entrega:Nombre #1 </a></li>
            <li><a class= "font-decoration-none" href="{{ url('#') }}"><span><i class="fa fa-video text-primary"></i></span> Clase sincronica: </a></li>
            <li><a class= "font-decoration-none" href="{{ url('#') }}"><span><i class="fa fa-file-video text-secondary"></i></span> Clase grabada:Tema y fecha </a></li>
        </ul>
    </div>


    <a class="container-fluid mt-5 text-pointer" data-toggle="collapse" data-target="#Semana_2">
        <div class="card text-white blue">
            <div class="text-center m-2">
                <h5 class="font-weight-bold">Semana 2: xx-xx del mes x.</h5>
            </div>
        </div>
    </a>
    <div id="Semana_2" class=" container-info-curso collapse"> 
        <ul class="lista-material">
            <li><a class= "font-decoration-none" href="{{ url('#') }}"><span><i class="fa fa-file-pdf text-danger"></i></span> Descargable.pdf </a></li>    
            <li><a class= "font-decoration-none" href="{{ url('#') }}"><span><i class="fa fa-video text-primary"></i></span> Clase sincronica: </a></li>
            <li><a class= "font-decoration-none" href="{{ url('#') }}"><span><i class="fa fa-file-video text-secondary"></i></span> Clase grabada:Tema y fecha </a></li>
        </ul>
    </div>


    <a class="container-fluid mt-5 text-pointer" data-toggle="collapse" data-target="#Semana_3">
        <div class="card text-white blue">
            <div class="text-center m-2">
                <h5 class="font-weight-bold">Semana 3: xx-xx del mes x.</h5>
            </div>
        </div>
    </a>
    <div id="Semana_3" class=" container-info-curso collapse"> 
        <ul class="lista-material">
            <li><a class= "font-decoration-none" href="{{ url('#') }}"><span><i class="fa fa-file-pdf text-danger"></i></span> Descargable.pdf </a></li>    
            <li><a class= "font-decoration-none" href="{{ url('#') }}"><span><i class="fa fa-comments text-success"></i></span> Foro Nombre #1 </a></li>
            <li><a class= "font-decoration-none" href="{{ url('#') }}"><span><i class="fa fa-file-video text-secondary"></i></span> Clase grabada:Tema y fecha </a></li>
        </ul>
    </div>
    
  


</div>

      

@include('mods.footer')
</div>