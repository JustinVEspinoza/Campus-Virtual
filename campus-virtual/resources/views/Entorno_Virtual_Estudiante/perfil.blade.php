
<title>Perfil</title>



<div>
@include('mods.header-estudiante')
<div class="container py-5">

<div class="row center-height">
    <div class="container-calendario ">
        <img src="https://www.uhfug.com/wp-content/uploads/2020/02/146-1468479_my-profile-icon-blank-profile-picture-circle-hd.png" style="width:100%;"alt=""/>
    </div>
    <div class=" container-cursos-card">
        <div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="true">Información</a>
                </li>
            </ul>
        </div>    
        <div class="mt-3 fade show active" id="info" role="tabInfo" aria-labelledby="info-tab">                            
            <table class="tabla-perfil">
                <tr><td>Cédula:</td>
                    <td>########</td>
                </tr>
                <tr><td>Nombre:</td>
                    <td>Josh</td>
                </tr>
                <tr><td>Apellidos:</td>
                    <td>Apellido1 Apellido2</td>
                </tr>
                <tr><td>Email:</td>
                    <td>correo@gmail.com</td>
                </tr>
            </table>
        </div>           
    </div>
</div>


</div>    
@include('mods.footer')
</div>