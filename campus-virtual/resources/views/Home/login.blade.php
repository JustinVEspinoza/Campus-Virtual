
<title>Inicio Sesión</title>

<div class="image-login">
@include('mods.header-home')
<div class="container-fluid py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="container-login">
                <div class="card content black-opaque rounded-0 ">
                    <div class=" container-items-login text-center">
                        <h2 class="text-dark font-weight-bold">Inicio Sesión</h2>
                                    
                        <div class="input-group mt-5">
                            <input type="text" class="form-control login-input" placeholder="Usuario" >
                        
                        </div>
                        <div class="input-group mt-4">
                            <input type="password" class="form-control login-input" placeholder="Contraseña" >
                        </div>
                        <div class="mt-5 mb-4">
                            <a href="{{ url('/entorno_virtual') }}">
                                <input type="submit" value="Ingresar" class="btn login-button">
                            </a>
                        </div>
                        <a class="text-secondary" href="{{ url('/start') }}" data-toggle="modal" data-target="#modal-forget">¿Hás olvidado tu contraseña?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('mods.footer')
</div>






<!-- Modal de editar -->


<div class="modal fade" id="modal-forget">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="text-dark text-center">Contraseña</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">
                
                <div class="form-group">
                    <label class="font-weight-normal" for="hora">Recuperar contraseña</label>
                    <input type="text" class="form-control login-input" placeholder="Ingrese el correo">
                </div>

            </div>
            <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn btn-secondary" data-dismiss="modal">Close</button>
                <div>
                <input type="submit" value="Aceptar" class="btn login-button">
                </div>
            </div>
        </div>
    </div>
</div>








