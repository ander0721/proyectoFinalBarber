<!DOCTYPE html>
<html>

<head>
    <title>Punto barber</title>
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css') }}" rel="stylesheet">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700,800,900&amp;display=swap') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('pagina/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('pagina/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('pagina/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('pagina/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('pagina/css/jquery-ui.min.css') }}">

    <link rel="stylesheet" href="{{ asset('pagina/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('pagina/css/estilo.css') }}">
    <!-- Iconic Fonts -->
    <link href="{{ asset('https://fonts.googleapis.com/icon?family=Material+Icons') }}" rel="stylesheet">
    <link href="{{ asset('pagAdmin/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('pagAdmin/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('pagAdmin/css/cryptocoins.css') }}">
    <link rel="stylesheet" href="{{ asset('pagAdmin/css/cryptocoins-colors.css') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('pagAdmin/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="{{ asset('pagAdmin/css/jquery-ui.min.css') }}" rel="stylesheet">
    <!-- Page Specific CSS (Slick Slider.css) -->
    <link href="{{ asset('pagAdmin/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('pagAdmin/css/datatables.min.css') }}" rel="stylesheet">
    <!-- Costic styles -->
    <link href="{{ asset('pagAdmin/css/style.css') }}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
    <style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        width: 100%;
        height: 80%;
      }
      #coords{width: 500px;}
      </style>
</head>

<body>
    <br>
    @yield('content')
    <!--Incluye layout-->
    <script async defer src="{{ asset('https://maps.googleapis.com/maps/api/js?callback=initMap') }}"></script>
    <script src="{{ asset('pagina/js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/maps.js') }}"></script>
    <script src="{{ asset('pagina/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('pagina/js/popper.js') }}"></script>
    <script src="{{ asset('pagina/js/bootstrap.js') }}"></script>
    <script src="{{ asset('pagina/js/hc-sticky.js') }}"></script>
    <script src="{{ asset('pagina/js/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('pagina/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('pagina/js/slick.js') }}"></script>
    <script src="{{ asset('pagina/js/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('pagina/js/app.js') }}"></script>
    <script src="{{ asset('pagAdmin/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('pagAdmin/js/popper.min.js') }}"></script>
    <script src="{{ asset('pagAdmin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('pagAdmin/js/perfect-scrollbar.js') }}">
    </script>
    <script src="{{ asset('pagAdmin/js/jquery-ui.min.js') }}">
    </script>


    <script src="pagAdmin/js/Chart.bundle.min.js">
    </script>
    <script src="pagAdmin/js/widgets.js"> </script>
    <script src="pagAdmin/js/clients.js"> </script>
    <script src="pagAdmin/js/Chart.Financial.js"> </script>
    <script src="pagAdmin/js/d3.v3.min.js">
    </script>
    <script src="pagAdmin/js/topojson.v1.min.js">
    </script>
    <script src="pagAdmin/js/datatables.min.js">
    </script>
    <script src="pagAdmin/js/data-tables.js">
    </script>
    <!-- Page Specific Scripts Finish -->
    <!-- Costic core JavaScript -->
    <script src="pagAdmin/js/framework.js"></script>
    <!-- Settings -->
    <script src="pagAdmin/js/settings.js"></script>
</body>

</html>