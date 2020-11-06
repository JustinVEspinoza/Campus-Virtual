<div>
@include('mods.headerHome')
<main class="py-5">

<div class="col-sm-12">
    <div id="carouselExampleControls" class="carousel slide container-carousel" data-ride="carousel">
        <!-- Initialise carousel -->
        <div id="kitchenSink" class="carousel slide " data-ride="carousel">
        <!-- Carousel indicators -->
            <ul class="carousel-indicators">
                <li data-target="#kitchenSink" data-slide-to="0" class="active"></li>
                <li data-target="#kitchenSink" data-slide-to="1"></li>
                <li data-target="#kitchenSink" data-slide-to="2"></li>
                <li data-target="#kitchenSink" data-slide-to="3"></li>
            </ul>
        <!-- The slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://via.placeholder.com/250x150/0000FF?text=+" class="d-block container-100" alt="blue rectangle">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Blue</h5>
                        <p>The sky is this colour</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/250x150/008000?text=+" class="d-block container-100" alt="green rectangle">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Green</h5>
                        <p>Grass is this colour</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/250x150/000000?text=+" class="d-block container-100" alt="black rectangle">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Black</h5>
                        <p>The night is this colour</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/250x150/FF0000?text=+" class="d-block container-100" alt="red rectangle">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>Red</h5>
                    <p>Stop lights are this colour</p>
                </div>
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control-prev" href="#kitchenSink" data-slide="prev"><span class="fas fa-chevron-circle-left fa-3x"></span></a>
        <a class="carousel-control-next" href="#kitchenSink" data-slide="next"><span class="fas fa-chevron-circle-right fa-3x"></span></a>
    </div>
</div>



<div></div>

</main>
      

@include('mods.footer')
</div>