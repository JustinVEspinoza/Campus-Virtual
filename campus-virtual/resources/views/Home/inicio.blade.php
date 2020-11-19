<title>Inicio</title>



<div>
@include('mods.header-home')
<div class="container-fluid py-5">


<div class="col-sm-12 mt-2">
    <div class="carousel slide container-carousel" data-ride="carousel">
        <!-- Initialise carousel -->
        <div id="pageCarousel" class="carousel slide  text-muted" data-ride="carousel">
        <!-- Carousel indicators -->
            <ul class="carousel-indicators">
                <li data-target="#pageCarousel" data-slide-to="0" class="active "></li>
                <li data-target="#pageCarousel" data-slide-to="1" ></li>
                <li data-target="#pageCarousel" data-slide-to="2"></li>
                <li data-target="#pageCarousel" data-slide-to="3"></li>
            </ul>
        <!-- The slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="text-center d-block container-100">
                        <i class="fas fa-image fa-5x text-muted"></i>
                        <div class="container ">
                            <h3>Lorem ipsum dolor sit amet</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                                nisi ut aliquip ex ea commodo consequat. </p>
                        </div>    
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="text-center d-block container-100">
                        <i class="fas fa-image fa-5x text-muted"></i>
                        <div class="container ">
                            <h3>Lorem ipsum dolor sit amet</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                                nisi ut aliquip ex ea commodo consequat. </p>
                        </div>    
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="text-center d-block container-100">
                        <i class="fas fa-image fa-5x text-muted"></i>
                        <div class="container ">
                            <h3>Lorem ipsum dolor sit amet</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                                nisi ut aliquip ex ea commodo consequat. </p>
                        </div>    
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="text-center d-block container-100">
                        <i class="fas fa-image fa-5x text-muted"></i>
                        <div class="container ">
                            <h3>Lorem ipsum dolor sit amet</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                                nisi ut aliquip ex ea commodo consequat. </p>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control-prev" href="#pageCarousel" data-slide="prev"><span class="fas fa-chevron-circle-left fa-3x text-muted"></span></a>
        <a class="carousel-control-next" href="#pageCarousel" data-slide="next"><span class="fas fa-chevron-circle-right fa-3x text-muted"></span></a>
    </div>
</div>




    <div class="d-flex justify-content-around flex-wrap container-extraInfo">

        <div class="container-extraInfo-1">
            <h2>Instituto de la rivera</h2>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
                qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="container-extraInfo-2">  
            <div class="d-inline-flex ">
                <div  class="mr-4">
                    <i class="fas fa-image fa-4x text-muted"></i>
                </div>
                <div>
                    <h6>Lorem ipsum dolor sit amet</h6>
                    <p class="font-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div> 
            </div> 
            <div class="d-inline-flex ">
                <div  class="mr-4">
                    <i class="fas fa-image fa-4x text-muted"></i>
                </div>
                <div>
                    <h6>Lorem ipsum dolor sit amet</h6>
                    <p class="font-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div> 
            </div> 
        </div>
    </div>  
</div>



</div>
      

@include('mods.footer')
</div>