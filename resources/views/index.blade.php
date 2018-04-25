@extends('main')

@section('content')
<div class="hero" id="highlighted">
      <div class="inner">
        <!--Slideshow-->
        <div id="highlighted-slider" class="container">
          <div class="item-slider" data-toggle="owlcarousel" data-owlcarousel-settings='{"singleItem":true, "navigation":true, "transitionStyle":"fadeUp"}'>
            <!--Slideshow content-->
            <!--Slide 1-->
            <div class="item">
              <div class="row">
               
                  <h2 class="h1 text-weight-light">
                     <img src="http://res.cloudinary.com/dlsg09pvn/image/upload/v1524375754/alimentacionprep.png" alt="Slide 1" class="center-block img-responsive" >
                    </h2>
              </div>
            </div>
            <!--Slide 2-->
           <div class="item">
              <div class="row">
               
                  <h2 class="h1 text-weight-light">
                     <img src="http://res.cloudinary.com/dlsg09pvn/image/upload/v1524376764/accesoiriosv2.png" alt="Slide 2" class="center-block img-responsive"   >
                    </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 <div class="services block block-bg-gradient block-border-bottom">
      <div class="container text-fancy">
        <h2 class="block-title">
            Nuestros Servicios
          </h2>
        <div class="row">
          <div class="col-md-4 text-center">
            <span class="fa-stack fa-5x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-group fa-stack-1x fa-inverse"></i> </span>
            <h4 class="text-weight-strong">
                Educacion humana
              </h4>
            <p>Aparte de educarte sobre la mascota ideal para ti , te instruiremos sobre los cuidados de esta para que puedan vivir en armonia</p>
          </div>
          <div class="col-md-4 text-center">
            <span class="fa-stack fa-5x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-pencil fa-stack-1x fa-inverse"></i> </span>
            <h4 class="text-weight-strong">
                Venta de Articulos y accesorios para mascotas
              </h4>
            <p>Aqui manejamos una alta gama de productos de la mas alta calidad para el cuidado y </p>
          </div>
          <div class="col-md-4 text-center">
            <span class="fa-stack fa-5x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-cogs fa-stack-1x fa-inverse"></i> </span>
            <h4 class="text-weight-strong">
                Servicio de Veterinaria
              </h4>
            <p>Damos servicio de veterinaria basica y vacunas</p>
          </div>
        </div>
      </div>
    </div>

 @endsection
