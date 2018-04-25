
<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>Home</title>

      <link rel="shortcut icon" href="img/icons/favicon.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/114x114.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/72x72.png">
      <link rel="apple-touch-icon-precomposed" href="img/icons/default.png">

      <!-- Fav and touch icons -->
      <link rel="shortcut icon" href="img/icons/favicon.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/114x114.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/72x72.png">
      <link rel="apple-touch-icon-precomposed" href="img/icons/default.png">

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">

      <!-- Bootstrap CSS File -->
      <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Libraries CSS Files -->
      <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">
      <link href="lib/owlcarousel/owl.theme.min.css" rel="stylesheet">
      <link href="lib/owlcarousel/owl.transitions.min.css" rel="stylesheet">

      <!-- Main Stylesheet File -->
      <link href="css/style.css" rel="stylesheet">

      <!--Your custom colour override - predefined colours are: colour-blue.css, colour-green.css, colour-lavander.css, orange is default-->
      <link href="#" id="colour-scheme" rel="stylesheet">


    </head>
                   
    <body class="body">



    
    <div id="background-wrapper" class="buildings" data-stellar-background-ratio="0.1">



    <!-- ======== @Region: #navigation ======== -->
    <div id="navigation" class="wrapper">
      <!--Hidden Header Region-->
    
      <!--Header & navbar-branding region-->
      <div class="header">
        
          <div class="row" align="center-block">
            <div class="col-md-4"></div>
            <div class="col-md-8">
              <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
              <a class="" >
                <h1 class="">
                    <img src="http://res.cloudinary.com/dlsg09pvn/image/upload/v1524369889/serengueti.png" alt="">
                    Serengueti Teen
                  </h1>
              </a>
              <div class="navbar-slogan">
                Serengueti Teen Tienda online
                <br> By kikepages.com
              </div>
            </div>
            <!--header rightside-->
            <div class="col-md-4">
              <!--user menu-->
            </div>
          </div>
        
      </div>
      <div class="container">
        <div class="navbar navbar-default">
          <!--mobile collapse menu button-->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <!--social media icons-->
        
          <!--everything within this div is collapsed on mobile-->
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" id="main-menu">
              <li class="icon-link">
                <a href="/index"><i class="fa fa-home"></i></a>
              </li>
              
              <li><a href="/articulosd">Articulos Destacados</a></li>
              <li><a href="/sobrenosotros">sobre nosotros</a></li>
              <li><a href="/contactanos">Contactanos</a></li>
              
            </ul>
          </div>
          <!--/.navbar-collapse -->
        </div>
      </div>
    </div>
  </div>
@yield('content')
<div class="block block-pd-sm block-bg-primary">
    <div class="container">
      <div class="row">
        <h3 class="col-md-4">
            Algunos de nuestros clientes
          </h3>
        <div class="col-md-8">
          <div class="row">
            <!--Client logos should be within a 120px wide by 60px height image canvas-->
            <div class="col-xs-6 col-md-2">
              <a  title="Client 1">
                  <img src="https://static1.squarespace.com/static/536703e7e4b03af4b79eaaaf/t/53a25191e4b080549e614d27/1403146641650/logo-petco.png?format=500w" alt="Client 1 logo" class="img-responsive">
                </a>
            </div>
            <div class="col-xs-6 col-md-2">
              <a  title="Client 2">
                  <img src="http://cdn.emprender-facil.com/wp-content/uploads/2015/03/Tienda-de-mascotas-El-g%C3%BCau-de-+Kota-texto1.png" alt="Client 2 logo" class="img-responsive">
                </a>
            </div>
            <div class="col-xs-6 col-md-2">
              <a title="Client 3">
                  <img src="http://www.abouttimecanecorso.com/images/ATCC_Logo_Versatile_275.png" alt="Client 3 logo" class="img-responsive">
                </a>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
<footer id="footer" class="block block-bg-grey-dark" data-block-bg-img="img/bg_footer-map.png" data-stellar-background-ratio="0.4">
    <div class="container">

     

      <div class="row subfooter">
        <!--@todo: replace with company copyright details-->
        <div class="col-md-7">
          <p>Copyright © Serengueti Teen</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flexor
            -->
            
          </div>
        </div>

      </div>
    </div>
  </footer>
  











    	<!-- Required JavaScript Libraries -->
      <script src="lib/jquery/jquery.min.js"></script>
      <script src="lib/bootstrap/js/bootstrap.min.js"></script>
      <script src="lib/owlcarousel/owl.carousel.min.js"></script>
      <script src="lib/stellar/stellar.min.js"></script>
      <script src="lib/waypoints/waypoints.min.js"></script>
      <script src="lib/counterup/counterup.min.js"></script>
      <script src="contactform/contactform.js"></script>

      <!-- Template Specisifc Custom Javascript File -->
      <script src="js/custom.js"></script>

      <!--Custom scripts demo background & colour switcher - OPTIONAL -->
      <script src="js/color-switcher.js"></script>

      <!--Contactform script -->
      <script src="contactform/contactform.js"></script>

       
    </body>
                    
                      

</html>
