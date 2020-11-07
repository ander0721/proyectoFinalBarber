<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from slidesigma.com/themes/html/costic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:03:18 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Punto Barber</title>
  <!-- Iconic Fonts -->
  <link href="{{asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}" rel="stylesheet">
  <link href="{{asset('vendors/iconic-fonts/font-awesome/css/all.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('vendors/iconic-fonts/flat-icons/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/iconic-fonts/cryptocoins/cryptocoins.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css')}}">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="{{asset('assets/css/jquery-ui.min.css')}}" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->
  <link href="{{asset('assets/css/slick.css" rel="stylesheet')}}">
  <link href="{{asset('assets/css/datatables.min.css')}}" rel="stylesheet">
  <!-- Costic styles -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
  <!-- Preloader -->
  <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div>
  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>
  <!-- Sidebar Navigation Left -->
  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="index.html">
        <img src="assets/img/costic/L-barber-large.png" alt="logo">
      </a>
    </div>
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
<!-- Barberías -->

      <!-- Espacio para barberías -->
      <li class="menu-item">
         <a href="#" class="has-chevron" data-toggle="collapse" data-target="#product" aria-expanded="false" aria-controls="product"> <span><img src="https://img.icons8.com/ios/16/000000/barbershop.png"/></i>  Barberías</span>
        </a>
        <ul id="product" class="collapse" aria-labelledby="product" data-parent="#side-nav-accordion">
        <li class="{{request()->routeIs('barberias') ? 'active' : ''}}"><a href="/barberias">Administrar</a>
          </li>
          </ul>
           </li>

<!-- Lista desplegable servicio -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#servir" aria-expanded="false" aria-controls="servir"> <span><img src="https://img.icons8.com/ios/16/000000/barbershop.png"/></i>  Servicios</span>
        </a>
        <ul id="servir" class="collapse" aria-labelledby="servir" data-parent="#side-nav-accordion">
          <li class="{{request()->routeIs('servicio') ? 'active' : ''}}"><a href="/servicio">Administrar</a>
          </li>

          <li class="{{request()->routeIs('catalogo') ? 'active' : ''}}"><a href="/catalogo">Catálogo de Servicios</a>
          </li>
        </ul>
         </li>



      <!-- Lista desplegable marcas -->
<!-- Marcas-->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#marcas" aria-expanded="false" aria-controls="marcas"> <span><img src="https://img.icons8.com/ios/18/000000/product.png"/></i>Marcas</span>
        </a>
        <ul id="marcas" class="collapse" aria-labelledby="marcas" data-parent="#side-nav-accordion">
          <li class="{{request()->routeIs('marca') ? 'active' : ''}}"><a href="/marca">Administrar </a>
          </li>
        </ul>
         </li>

<!-- Productos-->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#productos" aria-expanded="false" aria-controls="productos"> <span><img src="https://img.icons8.com/ios/18/000000/product.png"/></i>Productos</span>
        </a>
        <ul id="productos" class="collapse" aria-labelledby="productos" data-parent="#side-nav-accordion">
          <li class="{{request()->routeIs('producto') ? 'active' : ''}}"><a href="/producto">Administrar</a>
          </li>
        </ul>
      </li>
<!-- Tipo de producto-->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#tipopro" aria-expanded="false" aria-controls="tipopro"> <span><img src="https://img.icons8.com/ios/18/000000/product.png"/></i>Tipos de producto</span>
        </a>
        <ul id="tipopro" class="collapse" aria-labelledby="tipopro" data-parent="#side-nav-accordion">


          <li class="{{request()->routeIs('tipo') ? 'active' : ''}}"><a href="/tipo">Administrar</a>
          </li>
        </ul>
      </li>

<!-- productos  end -->
</ul>
  </aside>
  <!-- Sidebar Right -->

  <!-- Main Content -->
  <main class="body-content">
    <!-- Navigation Bar -->
    <nav class="navbar ms-navbar">
      <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft"> <span class="ms-toggler-bar bg-danger"></span>
        <span class="ms-toggler-bar bg-danger"></span>
        <span class="ms-toggler-bar bg-danger"></span>
      </div>
      <div class="logo-sn logo-sm ms-d-block-sm">
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="index.html"><img src="assets/img/costic/L-barber-large.png" alt="logo"> </a>
      </div>
<!--Aquí comienza el buscador-->
      <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
        <li class="ms-nav-item ms-search-form pb-0 py-0">
          <form class="ms-form" method="post">
            <div class="ms-form-group my-0 mb-0 has-icon fs-14">
              <input type="search" class="ms-form-input" name="search" placeholder="Buscar..." value=""> <i class="flaticon-search text-disabled"></i>
            </div>
          </form>
        </li>
<!--Aquí termina el buscador-->
<!--Aquí comienza todo lo relacionado con Mensajes-->
        <li class="ms-nav-item dropdown"> <a href="#" class="text-disabled ms-has-notification" id="mailDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-mail"></i></a>
          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="mailDropdown">
            <li class="dropdown-menu-header">
              <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Mensajes</span></h6><span class="badge badge-pill badge-success">3 nuevos</span>
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-scrollable ms-dropdown-list">
              <a class="media p-2" href="#">
                <div class="ms-chat-status ms-status-offline ms-chat-img mr-2 align-self-center">
                  <img src="assets/img/costic/customer-3.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body"> <span>Hola, señorita. Te necesito urgente.</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i>Hace 30 segundos</p>
                </div>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer text-center"> <a href="pages/apps/email.html">Ir a mi correo</a>
            </li>
          </ul>
        </li>
<!-- Aquí termina todo lo relacionado con Mensajes-->
<!-- Aquí comienza todo lo relacionado con notificaciones-->
        <li class="ms-nav-item dropdown"> <a href="#" class="text-disabled ms-has-notification" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-bell"></i></a>
          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationDropdown">
            <li class="dropdown-menu-header">
              <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Notificaciones</span></h6><span class="badge badge-pill badge-info">4 nuevas</span>
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-scrollable ms-dropdown-list">
              <a class="media p-2" href="#">
                <div class="media-body"> <span>12 barberías se registraron </span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> Hace 30 segundos</p>
                </div>
              </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer text-center"> <a href="#">Ver todas las notificaciones</a>
            </li>
          </ul>
        </li>
<!-- Aquí termina todo relacionado con notificaciones-->
<!-- Aquí comienza todo lo relacionado con login-->
        <li class="ms-nav-item ms-nav-user dropdown">
          <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="ms-user-img ms-img-round float-right" src="assets/img/costic/customer-6.jpg" alt="people">
          </a>
          <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
            <li class="dropdown-menu-header">
              <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Hola, Anny Farisha</span></h6>
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-dropdown-list">
              <a class="media fs-14 p-2" href="pages/prebuilt-pages/user-profile.html"> <span><i class="flaticon-user mr-2"></i> Perfil</span>
              </a>
              <a class="media fs-14 p-2" href="pages/apps/email.html"> <span><i class="flaticon-mail mr-2"></i> Bandeja de entrada</span> <span class="badge badge-pill badge-info">3</span>
              </a>
              <a class="media fs-14 p-2" href="pages/prebuilt-pages/user-profile.html"> <span><i class="flaticon-gear mr-2"></i>Configuración</span>
              </a>
            </li>
            </li>
            <li class="dropdown-menu-footer">
              <a class="media fs-14 p-2" href="pages/prebuilt-pages/default-login.html"> <span><i class="flaticon-shut-down mr-2"></i> Salir</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
<!--Aquí termina todo lo relacionado con login-->

<!--Contenido-->

      <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options"> <span class="ms-toggler-bar bg-danger"></span>
        <span class="ms-toggler-bar bg-danger "></span>
        <span class="ms-toggler-bar bg-danger"></span>
      </div>
    </nav>
<!--Contenido externo-->
        <div class="container">
         @yield('contenido')

        </div>
 <!--Graficos
        <div class="col-xl-3 col-lg-6 col-md-6">
          <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
            <span class="ms-chart-label bg-black"><i class="material-icons">arrow_upward</i> 3.2%</span>
            <div class="ms-card-body media">
              <div class="media-body">
                <span class="black-text"><strong>Nuevas barberías</strong></span>
                <h2>$8,451</h2>
              </div>
            </div>
            <canvas id="line-chart"></canvas>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
          <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
            <span class="ms-chart-label bg-red"><i class="material-icons">arrow_downward</i> 4.5%</span>
            <div class="ms-card-body media">
              <div class="media-body">
                <span class="black-text"><strong>Total Visitors</strong></span>
                <h2>3,973</h2>
              </div>
            </div>
            <canvas id="line-chart-2"></canvas>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
          <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
            <span class="ms-chart-label bg-black"><i class="material-icons">arrow_upward</i> 12.5%</span>
            <div class="ms-card-body media">
              <div class="media-body">
                <span class="black-text"><strong>New Users</strong></span>
                <h2>7,333</h2>
              </div>
            </div>
            <canvas id="line-chart-3"></canvas>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
          <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
            <span class="ms-chart-label bg-red"><i class="material-icons">arrow_upward</i> 9.5%</span>
            <div class="ms-card-body media">
              <div class="media-body">
                <span class="black-text"><strong>Total Orders</strong></span>
                <h2>48,973</h2>
              </div>
            </div>
            <canvas id="line-chart-4"></canvas>
          </div>
        </div>
 Graficos-->
<!--Aquí terminan los graficos-->

  <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/perfect-scrollbar.js')}}">
  </script>
  <script src="{{asset('assets/js/jquery-ui.min.js')}}">
  </script>
  <!-- Global Required Scripts End -->
  <!-- Page Specific Scripts Start -->

  <script src="{{asset('assets/js/Chart.bundle.min.js')}}">
  </script>
  <script src="{{asset('assets/js/widgets.js')}}"> </script>
  <script src="{{asset('assets/js/clients.js')}}"> </script>
  <script src="{{asset('assets/js/Chart.Financial.js')}}"> </script>
  <script src="{{asset('assets/js/d3.v3.min.js')}}">
  </script>
  <script src="{{asset('assets/js/topojson.v1.min.js')}}">
  </script>
  <script src="{{asset('assets/js/datatables.min.js')}}">
  </script>
  <script src="{{asset('assets/js/data-tables.js')}}">
  </script>
  <!-- Page Specific Scripts Finish -->
  <!-- Costic core JavaScript -->
  <script src="{{asset('assets/js/framework.js')}}"></script>
  <!-- Settings -->
  <script src="{{asset('assets/js/settings.js')}}"></script>
</body>


<!-- Mirrored from slidesigma.com/themes/html/costic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:05:48 GMT -->
</html>
