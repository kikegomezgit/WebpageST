@extends('main')

@section('content')


<hr>
        <h4 class="block-title">
          <strong>Articulos Destacados</strong>
            
          </h4>
        <div class="item-carousel" data-toggle="owlcarousel" data-owlcarousel-settings='{"items":4, "pagination":false, "navigation":true, "itemsScaleUp":true}'>
          <div class="item">
            <a  class="overlay-wrapper">
                <img src="https://www.pedigree.es/Images/ProductImages/small_dog_complete.png" width="300" alt="Project 1 image" class="img-responsive underlay">
                <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Alimento De perro</span> </span>
                </span>
              </a>
            <div class="item-details bg-noise">
              <h4 class="item-title">
                  <a href="#">Alimento De perro</a>
                </h4>
              <a>Cantidad 10kg , precio : $500</a>
            </div>
          </div>
          <div class="item">
            <a  class="overlay-wrapper">
                <img src="https://static.affinity-petcare.com/digitalcatalog/products/ultima_199/3dPack/8410650818719" width="218" alt="Project 1 image" class="img-responsive underlay">
                <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Alimento De gato</span> </span>
                </span>
              </a>
            <div class="item-details bg-noise">
              <h4 class="item-title">
                  <a href="#">Alimento De Gato</a>
                </h4>
              <a>Cantidad 8kg , precio : $900</a>
            </div>
          </div>
          <div class="item">
            <a  class="overlay-wrapper">
                <img src="http://res.cloudinary.com/dlsg09pvn/image/upload/c_scale,w_645/v1524377349/pajaros.jpg"  alt="Project 1 image" class="img-responsive underlay">
                <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Canarios Varios</span> </span>
                </span>
              </a>
            <div class="item-details bg-noise">
              <h4 class="item-title">
                  <a >Canarios Varios</a>
                </h4>
              <a>precio : $400</a>
            </div>
          </div>
          <div class="item">
            <a  class="overlay-wrapper">
                <img src="http://res.cloudinary.com/dlsg09pvn/image/upload/v1524377602/WhatsApp_Image_2018-04-05_at_11.08.39_PM_1.jpg" alt="Project 1 image" class="img-responsive underlay" width="200" height="200">
                <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Chihuahua 2 meses</span> </span>
                </span>
              </a>
            <div class="item-details bg-noise">
              <h4 class="item-title">
                  <a href="#">Chihuahua 2 meses</a>
                </h4>
              <a>precio : $2000</a>
            </div>
          </div>
          <div class="item">
            <a  class="overlay-wrapper">
                <img src="http://www.cronicanorte.es/wp-content/uploads/2015/06/vacunaci%C3%B3n-perro-mascota-Tres-cantos.png" alt="Project 1 image" class="img-responsive underlay">
                <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Vacunas simples</span> </span>
                </span>
              </a>
            <div class="item-details bg-noise">
              <h4 class="item-title">
                  <a >Vacuna simples</a>
                </h4>
              <a>precio : $100</a>
            </div>
          </div>

          
        </div>
        <hr>
@endsection
