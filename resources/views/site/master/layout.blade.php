<!DOCTYPE html>
<html lang="pt-BR">


  <head>

    <link rel="manifest" href="/../public/manifest.json">
    <script>
        if ('serviceWorker' in navigator) {
        console.log("Installing ServiceWorker...");
        navigator.serviceWorker.register('/public/sw.js')
        .then(function(registration) {
            console.log('Registration successful, scope is:', registration.scope);
        })
        .catch(function(error) {
            console.log('Service worker registration failed, error:', error);
        });
  };
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Tinômo</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ url ('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ url ('assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ url ('assets/css/templatemo-softy-pinko.css') }}">

    <link rel="icon" type="image/png" href="{{ url ('assets/images/icons/logo.png') }}">
 
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url ('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url ('assets/vendoranimate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ url ('assets/vendorcss-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url ('assets/vendorselect2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url ('assets/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url ('assets/css/main.css') }}">
<!--===============================================================================================-->
    </head>

        <!-- Accessibly-->
        <body>

  
  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
</body>
        <!-- End Accessibly--->

    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ route('site.home') }}" class="logo">
                            <img src="{{ url ('assets/images/logo.png') }}" alt="Tinômo"/>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{ route('site.home') }}">Home</a></li>
                            <li><a href="{{ route('site.about') }}">Sobre</a></li>
                            <li><a href="{{ route('site.contact') }}">Contate-nos</a></li>
                            <li><a href="{{ route('site.login') }}">Login</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    
    
    @yield('content')
    <!-- jQuery -->
    <script src="{{url ('assets/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{url ('assets/js/popper.js')}}"></script>
    <script src="{{url ('assets/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{url ('assets/js/scrollreveal.min.js')}}"></script>
    <script src="{{url ('assets/js/waypoints.min.js')}}"></script>
    <script src="{{url ('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{url ('assets/js/imgfix.min.js')}}"></script> 
    
    <!-- Global Int -->
    <script src="{{url ('assets/js/custom.js')}}"></script>

    <!--===============================================================================================-->	
	<script src="{{url ('assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
	<script src="{{url ('assets/vendor/bootstrap/js/popper')}}"></script>
	<script src="{{url ('assets/vendor/bootstrap/js/bootstrap.min')}}"></script>
    <!--===============================================================================================-->
	<script src="{{url ('assets/vendor/select2/select2.min')}}"></script>
    <!--===============================================================================================-->
	<script src="{{url ('assets/vendor/tilt/tilt.jquery.min')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
    <!--===============================================================================================-->
	<script src="{{url ('assets/js/main.js')}}"></script>

        
    <!-- ***** Footer Start ***** -->
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="https://www.youtube.com/channel/UC-uSxlO9KBvX6a0TRXg8lyg" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="https://twitter.com/TinomoO" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/tinomo.oficial/?hl=pt-br" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright">Copyright &copy; {{date('Y')}} Tinômo Company</p>
                </div>
            </div>
        </div>
    </footer>

  </body>
  
</html>