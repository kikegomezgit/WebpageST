@extends('main')

@section('content')

<div id="contact" class="block block-bg-grey-dark" data-block-bg-img="img/bg_footer-map.png" data-stellar-background-ratio="0.4">

        <div class="col-md-3">
         
        </div>

        <div class="col-md-6">
          <h4 class="text-uppercase">
            <strong>Contactanos</strong>
              
            </h4>
          <div class="form">
           
            <form method="post" action="{{ route('sendmail') }}" id="usrform">
               {{ csrf_field() }}
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Tu Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Tu Razon" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="msage"  id="msage" rows="4" form="usrform" placeholder="Tu mensaje"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
            </form>
          </div>
        </div>

       

      </div>
@endsection
