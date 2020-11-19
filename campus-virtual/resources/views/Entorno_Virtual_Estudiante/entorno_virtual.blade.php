<title>Entorno Virtual</title>



<div>
@include('mods.header-estudiante')
<div class="container-fluid py-5 cont">

    <div class="row" style="margin-right:0px;">
        <div class="card container-student-card">
            <i class="fas fa-user fa-4x text-center" style="color:lightgray;"></i>
            <div class="card-body">
                <h6>Estudiante:</h6>
                <h6>Carnet:</h6>
            </div>
        </div>
    </div>
    

    
<div class="container-entorno mt-4">
    <div class="row">
        <div class="container-cursos-card ">
            <h2 ml-2>Entorno virtual</h2>
            <div class="d-flex flex-wrap mt-4 ">
                <a class= "font-decoration-none" href="{{ url('/entorno_virtual/curso/Curso_1') }}">
                    <div class="container-detallesCurso">
                        <div class="card-body"></div> 
                        <div class="card-footer align-self-end">Curso 1</div>
                    </div>
                 </a>
                 <a class= "font-decoration-none" href="{{ url('/entorno_virtual/curso/Curso_2') }}">
                    <div class="container-detallesCurso">
                        <div class="card-body"></div> 
                        <div class="card-footer align-self-end">Curso 2</div>
                    </div>
                </a>
                <a class= "font-decoration-none" href="{{ url('/entorno_virtual/curso/Curso_3') }}">
                    <div class="container-detallesCurso">
                        <div class="card-body"></div> 
                        <div class="card-footer align-self-end">Curso 3</div>
                    </div>
                </a>
                <a class= "font-decoration-none" href="{{ url('/entorno_virtual/curso/Curso_4') }}">
                    <div class="container-detallesCurso">
                        <div class="card-body"></div> 
                        <div class="card-footer align-self-end">Curso 4</div>
                    </div>
                </a>
                <a class= "font-decoration-none" href="{{ url('/entorno_virtual/curso/Curso_5') }}">
                    <div class="container-detallesCurso">
                        <div class="card-body"></div> 
                        <div class="card-footer align-self-end">Curso 5</div>
                    </div>
                </a>                
            </div>
        </div>

        <div class="container-calendario">
            <div class="card container-fechas" >
                <h5 class="text-center">Fechas importantes</h5>
                <div class="card-body"></div>    
            </div>
            <hr>
            <div>  
                <ul>
                    <li> Lorem ipsum dolor sit</li>    
                    <li> Lorem ipsum dolor sit</li>
                    <li> Lorem ipsum dolor sit</li>
                    <li> Lorem ipsum dolor sit</li>
                    <li> Lorem ipsum dolor sit</li>
                </ul>
            </div>
        </div>
    </div>
    </div>
  
</div>
      

@include('mods.footer')
</div>