<html lang="en">

<!-- Mirrored from templates.g5plus.net/thedir/demo/automotive-service/home-automotive-services.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jun 2020 18:32:05 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Punto Barber</title>

    <script src="../../../cdn-cgi/apps/head/2oc_RD5SS6wgN5SiQnSEnWVNHg8.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('PRvendors/font-awesome/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('PR/vendors/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('PR/vendors/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('PR/vendors/animate.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/jquery-ui/jquery-ui.min.css')}}">

    <link rel="stylesheet" href="{{asset('PR/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('PR/css/estilo.css')}}">

</head>

<body>

    <div id="site-wrapper" class="site-wrapper home-automotive-service">

        <header id="header"
            class="main-header header-float header-sticky header-sticky-smart header-light header-style-03 font-normal light-color">
            <div class="header-wrapper sticky-area">
                <div class="container">
                    <nav class="navbar navbar-expand-xl">
                        <div
                            class="header-mobile d-flex d-xl-none flex-fill justify-content-between align-items-center">
                            <div class="navbar-toggler toggle-icon" data-toggle="collapse"
                                data-target="#navbar-main-menu">
                                <span></span>
                            </div>
                            <a class="navbar-brand navbar-brand-mo  bile" href="home-automotive-services.html">
                                <img src="{{asset('PR/images/L-barber-large-blanco.png')}}" alt="Punto Barber">
                            </a>
                            <a class="mobile-button-search" href="#search-popup" data-gtf-mfp="true"
                                data-mfp-options='{"type":"inline","mainClass":"mfp-move-from-top mfp-align-top search-popup-bg","closeOnBgClick":false,"showCloseBtn":false}'><i
                                    class="far fa-search"></i>
                            </a>
                        </div>
                        <!--Logo-->
                        <div class="collapse navbar-collapse d-xl-flex align-items-center" id="navbar-main-menu">
                            <a class="navbar-brand d-none d-xl-block" href="home-automotive-services.html">
                                <img src="{{asset('PR/images/L-barber-large-blanco.png')}}" alt="Punto Barber">
                            </a>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    

                                @can('administrador' and 'moderador')
                                <li class="nav-item">
                                    <a class="nav-link"
                                    href="{{ route('Pagadmin') }}">Administracion</a>
                                </li>
                                @endcan

                            </ul>
                            <div
                                class="header-customize justify-content-end align-items-center d-none d-xl-flex ml-auto">
                                <div class="header-customize-item">
                                    <a href="{{ route('login') }}"
                                        class="link">
                                        <svg class="icon icon-user-circle-o">
                                            <use xlink:href="#icon-user-circle-o"></use>
                                        </svg>
                                        Iniciar sesión
                                    </a>

                                    
                                <!-- Authentication Links -->
                                @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('') }}</a>
                                </li>
                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('') }}</a>
                                </li>
                                @endif
                                @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Cerrar sesión') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
                                </div>




        </header>

        <div class="content-wrap">
            <section class="banner">
                <div class="container">
                    <div class="banner-content">
                        <div class="heading" data-animate="fadeInLeft">
                            <h1 class="mb-0 text-white">
                                <span class="d-block lh-1">Encuentra profesionales cerca de ti para cambiar tu
                                    look</span>

                            </h1>
                        </div>
                        <div class="form-search" data-animate="fadeInRight">
                            <form>
                                <div class="row align-items-end">
                                    <div class="col-xl-6 mb-4 mb-xl-0">
                                        <label for="key-word"
                                            class="text-white font-weight-bold text-uppercase">Servicios</label>
                                        <div class="input-group dropdown bg-white rounded">
                                            <input type="text" autocomplete="off" id="key-word"
                                                class="form-control border-0 form-control-lg"
                                                placeholder="Ej: Barba, Corte" data-toggle="dropdown"
                                                aria-haspopup="true">
                                            <a href="#" class="input-group-append text-decoration-none">
                                                <i class="fal fa-chevron-down"></i>
                                            </a>
                                            <ul class="dropdown-menu form-search-ajax" aria-labelledby="key-word">
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
                                                        <svg class="icon icon-pizza">

                                                        </svg>
                                                        <span class="font-size-md">Barba</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
                                                        <svg class="icon icon-bed">

                                                        </svg>
                                                        <span class="font-size-md">Base</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
                                                        <svg class="icon icon-pharmaceutical">

                                                        </svg>
                                                        <span class="font-size-md">Cejas</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
                                                        <svg class="icon icon-cog">

                                                        </svg>
                                                        <span class="font-size-md">Manicure</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-item item">
                                                    <a href="#" class="link-hover-dark-white">
                                                        <svg class="icon icon-car">

                                                        </svg>
                                                        <span class="font-size-md">Pedicure</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class=" col-xl-2">
                            <button type="submit"
                                class="btn btn-dark font-weight-bold font-size-h5 btn-block btn-icon-left btn-lg lh-16"><svg
                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                                    viewBox="0 0 172 172" style=" fill:#000000;">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,172v-172h172v172z" fill="none"></path>
                                        <g fill="#ffffff">
                                            <path
                                                d="M72.24,10.32c-32.26344,0 -58.48,26.21656 -58.48,58.48c0,32.26344 26.21656,58.48 58.48,58.48c12.76563,0 24.56375,-4.11187 34.185,-11.0725l45.2575,45.15l9.675,-9.675l-44.72,-44.8275c8.78813,-10.23937 14.0825,-23.52906 14.0825,-38.055c0,-32.26344 -26.21656,-58.48 -58.48,-58.48zM72.24,17.2c28.54125,0 51.6,23.05875 51.6,51.6c0,28.54125 -23.05875,51.6 -51.6,51.6c-28.54125,0 -51.6,-23.05875 -51.6,-51.6c0,-28.54125 23.05875,-51.6 51.6,-51.6z">
                                            </path>
                                        </g>
                                    </g>
                                </svg> Buscar
                            </button>
                        </div>

                    </div>

            </section>


            <section id="section-02" class="py-12">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-lg-4 mb-4 mb-lg-0 px-0 px-lg-4" data-animate="fadeInUp">
                            <div class="media icon-box-style-02">
                                <div class="d-flex flex-column align-items-center mr-6 color-primary">
                                    <svg class="icon icon-checkmark-circle">
                                        <use xlink:href="#icon-checkmark-circle"></use>
                                    </svg>
                                    <span class="number h1 font-weight-bold">1</span>
                                </div>
                                <div class="media-body lh-14">
                                    <h4 class="mb-3 font-weight-bold">
                                        Encuentre barberías cercanas a su ubicación.
                                    </h4>
                                    <p class="font-size-md text-gray mb-0 text-muted">
                                        Encuentre el lugar ideal con los servicios desaeados cerca a su ubicación.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0 px-0 px-lg-4" data-animate="fadeInUp">
                            <div class="media icon-box-style-02">
                                <div class="d-flex flex-column align-items-center mr-6 color-primary">
                                    <svg class="icon icon-checkmark-circle">
                                        <use xlink:href="#icon-checkmark-circle"></use>
                                    </svg>
                                    <span class="number h1 font-weight-bold">2</span>
                                </div>
                                <div class="media-body lh-14">
                                    <h4 class="mb-3 font-weight-bold">
                                        Encuentre reseñas reales de clientes
                                    </h4>
                                    <p class="font-size-md text-gray mb-0 text-muted">
                                        Encuentre reseñas reales o escriba una reseña de una barbería para que otros
                                        conozcan su experiencia.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0 px-0 px-lg-4" data-animate="fadeInUp">
                            <div class="media icon-box-style-02">
                                <div class="d-flex flex-column align-items-center mr-6 color-primary">
                                    <svg class="icon icon-checkmark-circle">
                                        <use xlink:href="#icon-checkmark-circle"></use>
                                    </svg>
                                    <span class="number h1 font-weight-bold">3</span>
                                </div>
                                <div class="media-body lh-14">
                                    <h4 class="mb-3 font-weight-bold">
                                        Elija el mejor servicio
                                    </h4>
                                    <p class="font-size-md text-gray mb-0 text-muted">
                                        Encuentre excelenetes barberias con buenos servicios al mejor precio.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-03" class="pt-12 pb-13 bg-pattern-01 ">
                <div class="container">
                    <div class="mb-9 text-center main-header">
                        <h2 class="mb-0 font-weight-normal letter-spacing-50">Los mejores lugares para lo que necesita
                        </h2>
                    </div>
                    <div class="listing-image-card">
                        <div class="mb-7">
                            <h3 class="font-weight-normal mb-0 letter-spacing-50">Barber Club</h3>
                        </div>
                        <div class="slick-slider arrow-top"
                            data-slick-options='{"slidesToShow": 4, "autoplay":false,"dots":false,"responsive":[{"breakpoint": 992,"settings": {"slidesToShow": 3}},{"breakpoint": 768,"settings": {"slidesToShow": 2}},{"breakpoint": 400,"settings": {"slidesToShow": 1,"arrows":false}}]}'>
                            <div class="box">
                                <div class="card border-0 image-box-style-card box-shadow-hover">
                                    <a href="listing-details-image.html">
                                        <img src="https://image.freepik.com/free-photo/stylish-man-sitting-barbershop_1157-20488.jpg"
                                            alt="Furniture assembly">
                                    </a>
                                    <div class="card-body lh-1">
                                        <a href="listing-details-image.html"
                                            class="card-text text-dark font-size-md lh-11">
                                            Corte
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="card border-0 image-box-style-card box-shadow-hover">
                                    <a href="listing-details-image.html">
                                        <img src="https://img.freepik.com/free-photo/stylish-man-sitting-barbershop_1157-21506.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906"
                                            alt="Carpet installation">
                                    </a>

                                    <div class="card-body lh-1">
                                        <a href="explore-half-map-list.html"
                                            class="card-text text-dark font-size-md lh-11">
                                            Tratamiento capilar
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="card border-0 image-box-style-card box-shadow-hover">
                                    <a href="listing-details-image.html">
                                        <img src="https://img.freepik.com/free-photo/man-cuts-his-beard-barbershop_1157-16045.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906"
                                            alt="Local removal">
                                    </a>
                                    <div class="card-body lh-1">
                                        <a href="explore-half-map-list.html"
                                            class="card-text text-dark font-size-md lh-11">
                                            Barba
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="card border-0 image-box-style-card box-shadow-hover">
                                    <a href="listing-details-image.html">
                                        <img src="https://img.freepik.com/free-photo/stylish-man-sitting-barbershop_1157-24980.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906"
                                            alt="Television repair">
                                    </a>
                                    <div class="card-body lh-1">
                                        <a href="explore-half-map-list.html"
                                            class="card-text text-dark font-size-md lh-11">
                                            Tinte
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="card border-0 image-box-style-card box-shadow-hover">
                                    <a href="listing-details-image.html">
                                        <img src="https://img.freepik.com/free-photo/man-cuts-his-beard-barbershop_1157-16204.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906"
                                            alt="Furniture assembly">
                                    </a>
                                    <div class="card-body lh-1">
                                        <a href="listing-details-image.html"
                                            class="card-text text-dark font-size-md lh-11">
                                            Tratamiento barba
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="card border-0 image-box-style-card box-shadow-hover">
                                    <a href="listing-details-image.html">
                                        <img src="https://img.freepik.com/free-photo/man-cuts-his-beard-barbershop_1157-16062.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906"
                                            alt="Carpet installation">
                                    </a>
                                    <div class="card-body lh-1">
                                        <a href="explore-half-map-list.html"
                                            class="card-text text-dark font-size-md lh-11">
                                            6
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="listing-image-card">
                        <div class="mb-7">
                            <h3 class="font-weight-normal mb-0 letter-spacing-50">Boca del lobo </h3>
                        </div>
                        <div class="slick-slider arrow-top"
                            data-slick-options='{"slidesToShow": 4, "autoplay":false,"dots":false,"responsive":[{"breakpoint": 992,"settings": {"slidesToShow": 3}},{"breakpoint": 768,"settings": {"slidesToShow": 2}},{"breakpoint": 400,"settings": {"slidesToShow": 1,"arrows":false}}]}'>
                            <div class="box">
                                <div class="card border-0 image-box-style-card box-shadow-hover">
                                    <a href="listing-details-image.html">
                                        <img src="https://img.freepik.com/free-photo/woman-using-spray-man-barbershop_23-2147737065.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906"
                                            alt="Wedding & Event Makeup">
                                    </a>
                                    <div class="card-body lh-1">
                                        <a href="explore-half-map-list.html"
                                            class="card-text text-dark font-size-md lh-11">
                                            Tratamiento capilar
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="box">
                                <div class="card image-box-style-card border-0 box-shadow-hover">
                                    <a href="listing-details-image.html">
                                        <img src="https://img.freepik.com/free-photo/man-barbershop_1303-5414.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906"
                                            alt="Wedding DJ">
                                    </a>
                                    <div class="card-body lh-1">
                                        <a href="explore-half-map-list.html"
                                            class="card-text text-dark font-size-md lh-11">
                                            Lavado
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="card image-box-style-card border-0 box-shadow-hover">
                                    <a href="listing-details-image.html">
                                        <img src="https://img.freepik.com/free-photo/woman-wiping-face-client-barbershop_23-2147736959.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906"
                                            alt="Wedding Catering (Buffet)">
                                    </a>
                                    <div class="card-body lh-1">
                                        <a href="explore-half-map-list.html"
                                            class="card-text text-dark font-size-md lh-11">
                                            Tinte de barba
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="card image-box-style-card border-0 box-shadow-hover">
                                    <a href="listing-details-image.html">
                                        <img src="https://image.freepik.com/free-photo/customer-hairdresser-barbershop_23-2147737050.jpg"
                                            alt="Wedding & Event Makeup">
                                    </a>
                                    <div class="card-body lh-1">
                                        <a href="explore-half-map-list.html"
                                            class="card-text text-dark font-size-md lh-11">
                                            Tratamieto barba
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="card image-box-style-card border-0 box-shadow-hover">
                                    <a href="listing-details-image.html">
                                        <img src="https://img.freepik.com/free-photo/pretty-woman-preparing-client-barbershop_23-2147736967.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906"
                                            alt="Event Videography">
                                    </a>
                                    <div class="card-body lh-1">
                                        <a href="explore-half-map-list.html"
                                            class="card-text text-dark font-size-md lh-11">

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="listing-image-card">
                        <div class="mb-7">
                            <h3 class="font-weight-normal mb-0 letter-spacing-50">Mostacho</h3>
                        </div>
                        <div class="slick-slider arrow-top"
                            data-slick-options='{"slidesToShow": 4, "autoplay":true,"dots":false,"responsive":[{"breakpoint": 992,"settings": {"slidesToShow": 3}},{"breakpoint": 768,"settings": {"slidesToShow": 2}},{"breakpoint": 400,"settings": {"slidesToShow": 1,"arrows":false}}]}'>
                            <div class="box">
                                <div class="card image-box-style-card border-0 box-shadow-hover">
                                    <a href="listing-details-image.html">
                                        <img src="https://img.freepik.com/free-photo/guy-barbershop_1157-7706.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906"
                                            alt="Afforable Plumbing Services">
                                    </a>
                                    <div class="card-body lh-1">
                                        <a href="explore-half-map-list.html"
                                            class="card-text text-dark font-size-md lh-11">
                                            Tratamiento facial
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="card image-box-style-card border-0 box-shadow-hover">
                                    <a href="listing-details-image.html">
                                        <img src="https://img.freepik.com/free-photo/guy-barbershop_1157-7709.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906"
                                            alt="image box">
                                    </a>
                                    <div class="card-body lh-1">
                                        <a href="explore-half-map-list.html"
                                            class="card-text text-dark font-size-md lh-11">
                                            Corte barba
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="card image-box-style-card border-0 box-shadow-hover">
                                    <a href="listing-details-image.html">
                                        <img src="https://img.freepik.com/free-photo/guy-barbershop_1157-7714.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906"
                                            alt="Image box">
                                    </a>
                                    <div class="card-body lh-1">
                                        <a href="explore-half-map-list.html"
                                            class="card-text text-dark font-size-md lh-11">
                                            Tinte de barba
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="card image-box-style-card border-0 box-shadow-hover">
                                    <a href="listing-details-image.html">
                                        <img src="https://image.freepik.com/free-photo/guy-barbershop_1157-7715.jpg"
                                            alt="Image box">
                                    </a>
                                    <div class="card-body lh-1">
                                        <a href="explore-half-map-list.html"
                                            class="card-text text-dark font-size-md lh-11">
                                            Corte
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="box">
                                <div class="card image-box-style-card border-0 box-shadow-hover">
                                    <a href="listing-details-image.html">
                                        <img src="https://img.freepik.com/free-photo/guy-barbershop_1157-7721.jpg?size=626&ext=jpg&ga=GA1.2.1467202214.1596135906"
                                            alt="Image box">
                                    </a>
                                    <div class="card-body lh-1">
                                        <a href="explore-half-map-list.html"
                                            class="card-text text-dark font-size-md lh-11">
                                            Spa
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>


        <section id="section-04" class="pt-12 pb-10 text-center categories">
            <div class="container">
                <div class="heading text-center mb-9">
                    <h3 class="mb-6 font-weight-bold">
                        ¿Qué tipos de servicio busca?
                    </h3>

                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4" data-animate="pulse">
                        <a class="btn btn-hero text-capitalize rounded-0" title="Category"
                            href="explore-half-map-grid.html">
                            Manicure y Pedicure</a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4" data-animate="pulse">
                        <a class="btn btn-hero text-capitalize rounded-0" title="Category"
                            href="explore-half-map-grid.html">
                            Corte barba</a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4" data-animate="pulse">
                        <a class="btn btn-hero text-capitalize rounded-0" title="Category"
                            href="explore-half-map-grid.html">
                            Corte cejas </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4" data-animate="pulse">
                        <a class="btn btn-hero text-capitalize rounded-0" title="Category"
                            href="explore-half-map-grid.html">
                            Corte cabello </a>
                    </div>

                </div>
            </div>
        </section>


        <section id="section-05" class="pt-12 pb-13 bg-pattern-01 ">
            <div class="container">
                <div class="text-center mb-8">
                    <div class="text-center mb-9">
                        <h3 class="mb-0 font-weight-normal letter-spacing-50">
                            Los servicios más populares
                        </h3>
                    </div>
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8 mb-6">
                            <div class="image-box card rounded-0 border-0 hover-scale" data-animate="zoomIn">
                                <a href="explore-half-map-grid.html" class="image position-relative card-img">
                                    <img src="https://image.freepik.com/free-photo/stylish-man-sitting-barbershop_1157-20482.jpg"
                                        alt="Image box">
                                </a>
                                <div class="text-white content-box px-4 pb-3 card-img-overlay">
                                    <p class="mb-1 text-capitalize">
                                        Corte</p>
                                    <a href="explore-half-map-grid.html"
                                        class="font-size-h4 font-weight-normal text-white">

                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-6">
                            <div class="image-box card mb-7 rounded-0 border-0 hover-scale" data-animate="zoomIn">
                                <a href="explore-half-map-grid.html" class="image position-relative card-img">
                                    <img src="https://depilacion.me/wp-content/uploads/2019/05/Depilaci%C3%B3n-cejas-principal.jpg"
                                        alt="Image box">
                                </a>
                                <div class="text-white content-box px-4 pb-3 card-img-overlay">
                                    <p class="mb-1 text-capitalize">
                                        Depilación
                                    </p>
                                    <a href="explore-half-map-grid.html"
                                        class="font-weight-normal  text-white font-size-lg">

                                    </a>
                                </div>
                            </div>
                            <div class="image-box card rounded-0 border-0 hover-scale" data-animate="zoomIn">
                                <a href="explore-half-map-grid.html" class="image position-relative card-img">
                                    <img src="https://image.freepik.com/free-photo/close-up-beautician-painting-woman-s-nails-with-brush-nail-salon_1139-1703.jpg"
                                        alt="Image box">
                                </a>
                                <div class="text-white content-box px-4 pb-3 card-img-overlay">
                                    <p class="mb-1 text-capitalize">
                                        Manicure</p>
                                    <a href="explore-half-map-grid.html"
                                        class="font-weight-normal  text-white font-size-lg">

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-6">
                            <div class="image-box card rounded-0 border-0 hover-scale" data-animate="zoomIn">
                                <a href="explore-half-map-grid.html" class="image position-relative card-img">
                                    <img src="https://image.freepik.com/free-photo/young-man-doing-pedicure-salon-beauty-concept_1301-3370.jpg"
                                        alt="Image box">
                                </a>
                                <div class="text-white content-box px-4 pb-3 card-img-overlay">
                                    <p class="mb-1 text-capitalize">
                                        Pedicure</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 mb-6">
                            <div class="image-box card rounded-0 border-0 hover-scale" data-animate="zoomIn">
                                <a href="explore-half-map-grid.html" class="image position-relative card-img">
                                    <img src="https://image.freepik.com/free-photo/stylish-man-sitting-barbershop_1157-24980.jpg"
                                        alt="Image box">
                                </a>
                                <div class="text-white content-box px-4 pb-3 card-img-overlay">
                                    <p class="mb-1 text-capitalize">
                                        Barba</p>
                                    <a href="explore-half-map-grid.html"
                                        class="font-size-h4 font-weight-normal text-white">

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>


        <section class="section-01 py-12" id="section-06">
            <div class="container">
                <h2 class="text-center mb-11">
                    ¿Qué dicen los clientes sobre Punto Barber?
                </h2>
                <div class="row">
                    <div class="col col-md-12">
                        <div class="slick-slider arrow-center equal-height testimonials-slider"
                            data-slick-options='{"slidesToShow": 3, "autoplay":false,"dots":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow": 2}},{"breakpoint": 768,"settings": {"slidesToShow": 1,"arrows":false}}]}'>
                            <div class="box">
                                <div class="card testimonial-item h-100 border-0">
                                    <div class="card-title text-uppercase font-weight-medium text-gray mb-3">
                                        Marco dice:
                                    </div>
                                    <div class="card-body h5 font-weight-normal px-0 mb-0 lh-15 letter-spacing-35">

                                        Estoy muy satisfecho, pude encontrar un buen precio y además ver que tan lejos
                                        queda e mi casa. Excelente aplicación.

                                    </div>
                                    <div class="card-footer bg-transparent px-0 pt-6 pb-0">
                                        <div class="media">

                                            <div class="media-body lh-14">

                                                <div class="author-rate align-items-end mt-1">


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="card testimonial-item h-100 border-0">
                                    <div class="card-title text-uppercase font-weight-medium text-gray mb-3">
                                        Valeria dice:
                                    </div>
                                    <div class="card-body h5 font-weight-normal px-0 mb-0 lh-15 letter-spacing-35">
                                        Estoy satisfecha, ésta página me ayudó a encontrar un buen establecimiento y a
                                        un excelente precio.
                                    </div>
                                    <div class="card-footer bg-transparent px-0 pt-6 pb-0">
                                        <div class="media">

                                            <div class="media-body lh-14">

                                                <div class="author-rate align-items-end mt-1">
                                                    <span class="rate-item checked">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="card testimonial-item h-100 border-0">
                                    <div class="card-title text-uppercase font-weight-medium text-gray mb-3">
                                        Marlon dice:
                                    </div>
                                    <div class="card-body h5 font-weight-normal px-0 mb-0 lh-15 letter-spacing-35">

                                        Es una buena opción para ver sitios cerca de mi ubicación con buenos precios y
                                        excelentes servicios.
                                    </div>
                                    <div class="card-footer bg-transparent px-0 pt-6 pb-0">
                                        <div class="media">

                                            <div class="media-body lh-14">

                                                <div class="author-rate align-items-end mt-1">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="card testimonial-item h-100 border-0">
                                    <div class="card-title text-uppercase font-weight-medium text-gray mb-3">
                                        Luis dice:
                                    </div>
                                    <div class="card-body h5 font-weight-normal px-0 mb-0 lh-15 letter-spacing-35">

                                        Estoy muy satisfecho con el servicio del barbero, su trabajo es de primera
                                        categoría y tiene una actitud incomparable, muy trabajador, agradable, puntual y
                                        respetuoso.
                                    </div>
                                    <div class="card-footer bg-transparent px-0 pt-6 pb-0">
                                        <div class="media">

                                            <div class="media-body lh-14">

                                                <div class="author-rate align-items-end mt-1">


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!----->
                        </div>
                    </div>
                </div>
        </section>
        




        <center>
            <footer class="pt-4 pb-1 bg-pattern-01">




                <!-- Footer -->

                <!-- Footer Text -->
                <!--  <div class="pt-12 pb-13 bg-pattern-01 container-fluid text-center text-md-left">-->


                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2020
                    <a href=""> Punto Barber</a>
                </div>

    </div>
    </footer>


    </footer>
    </center>



    <div id="login-popup" class="mfp-hide">
        <div class="form-login-register">
            <div class="tabs mb-8">
                <ul class="nav nav-pills tab-style-01 text-capitalize justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab"
                            aria-controls="login" aria-selected="true">
                            <h3>Log In</h3>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab"
                            aria-controls="register" aria-selected="false">
                            <h3>Register</h3>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                    <div class="form-login">
                        <form>
                            <div class="font-size-md text-dark mb-5">Log In Your Account</div>
                            <div class="form-group mb-2">
                                <label for="username" class="sr-only">Username</label>
                                <input id="username" type="text" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group flex-nowrap align-items-center">
                                    <label for="password" class="sr-only">Password</label>
                                    <input id="password" type="text" class="form-control" placeholder="Password">
                                    <a href="#" class="input-group-append text-decoration-none">Forgot?</a>
                                </div>
                            </div>
                            <div class="form-group mb-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check">
                                    <label class="custom-control-label text-dark" for="check">Remember</label>
                                </div>
                            </div>
                            <button type="submit"
                                class="btn btn-primary btn-block font-weight-bold text-uppercase font-size-lg rounded-sm mb-8">
                                Log In
                            </button>
                        </form>
                        <div class="font-size-md text-dark mb-5">Or Log In With</div>
                        <div class="social-icon origin-color si-square">
                            <ul class="row no-gutters list-inline text-center">
                                <li class="list-inline-item si-facebook col-3">
                                    <a target="_blank" title="Facebook" href="#">
                                        <i class="fab fa-facebook-f">
                                        </i>
                                        <span>Facebook</span>
                                    </a>
                                </li>
                                <li class="list-inline-item si-twitter col-3">
                                    <a target="_blank" title="Twitter" href="#">
                                        <i class="fab fa-twitter">
                                        </i>
                                        <span>Twitter</span>
                                    </a>
                                </li>
                                <li class="list-inline-item si-google col-3">
                                    <a target="_blank" title="Google plus" href="#">
                                        <svg class="icon icon-google-plus-symbol">
                                            <use xlink:href="#icon-google-plus-symbol"></use>
                                        </svg>
                                        <span>Google plus</span>
                                    </a>
                                </li>
                                <li class="list-inline-item si-rss col-3">
                                    <a target="_blank" title="RSS" href="#">
                                        <i class="fas fa-rss"></i>
                                        <span>RSS</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="register" role="tabpanel" aria-labelledby="register-tab">
                    <div class="form-register">
                        <form>
                            <div class="font-size-md text-dark mb-5">Create Your Account</div>
                            <div class="form-group mb-2">
                                <label for="username-rt" class="sr-only">Username</label>
                                <input id="username-rt" type="text" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group mb-2">
                                <label for="email" class="sr-only">Email</label>
                                <input id="email" type="text" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group mb-2">
                                <label for="password-rt" class="sr-only">Username</label>
                                <input id="password-rt" type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group mb-3">
                                <label for="r-password" class="sr-only">Username</label>
                                <input id="r-password" type="password" class="form-control"
                                    placeholder="Retype password">
                            </div>
                            <div class="form-group mb-8">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check-term">
                                    <label class="custom-control-label text-dark" for="check-term">You agree with our
                                        Terms Privacy Policy and</label>
                                </div>
                            </div>
                            <button type="submit"
                                class="btn btn-primary btn-block font-weight-bold text-uppercase font-size-lg rounded-sm">
                                Create an
                                account
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <form>
            </form>
        </div>
    </div>
    <div id="search-popup" class="mfp-hide">
        <div class="search-popup text-center">
            <h2 class="mb-8">Search</h2>
            <div class="form-search">
                <form>
                    <div class="row align-items-end">
                        <div class="form-search-item col-md-7 mb-4 mb-md-0 text-left bg-white">
                            <label for="key-word-02"
                                class="pt-4 mb-0 text-dark font-weight-semibold font-size-lg lh-1">What</label>
                            <div class="input-group dropdown show pr-0 bg-transparent align-items-start">
                                <input type="text" autocomplete="off" id="key-word-02"
                                    class="form-control bg-transparent border-0 p-0 font-size-md lh-1"
                                    data-toggle="dropdown" aria-haspopup="true"
                                    placeholder="Ex: food, service, barber, hotel">
                                <button type="submit"
                                    class="btn text-dark btn-link input-group-append font-weight-normal p-0">
                                    <i class="fal fa-search"></i>
                                </button>
                                <ul class="dropdown-menu form-search-ajax" aria-labelledby="key-word-02">
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-pizza">
                                                <use xlink:href="#icon-pizza"></use>
                                            </svg>
                                            <span class="font-size-md">Foods & Restaurants</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-bed">
                                                <use xlink:href="#icon-bed"></use>
                                            </svg>
                                            <span class="font-size-md">Hotels & Resorts</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-pharmaceutical">
                                                <use xlink:href="#icon-pharmaceutical"></use>
                                            </svg>
                                            <span class="font-size-md">Healths & Medicals</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-cog">
                                                <use xlink:href="#icon-cog"></use>
                                            </svg>
                                            <span class="font-size-md">Services</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-car">
                                                <use xlink:href="#icon-car"></use>
                                            </svg>
                                            <span class="font-size-md">Automotive</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-search-item col-md-5 mb-4 mb-md-0 text-left bg-white">
                            <label for="region-02"
                                class="pt-4 mb-0 text-dark font-weight-semibold font-size-lg lh-1">Where</label>
                            <div class="input-group dropdown show pr-0 bg-transparent align-items-start">
                                <input type="text" autocomplete="off" id="region-02"
                                    class="form-control bg-transparent border-0 p-0 font-size-md lh-1"
                                    data-toggle="dropdown" aria-haspopup="true" placeholder="San Francisco">
                                <button type="submit"
                                    class="btn text-dark btn-link input-group-append font-weight-normal p-0">
                                    <i class="fal fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu form-search-ajax" aria-labelledby="region-02">
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Austin
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Boston
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Chicago
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Denver
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Los Angeles
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            New York
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            San Francisco
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Seattle
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Washington
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="heading mb-4">
                <div class="pt-8 font-size-lg mb-5">
                    Or browse the highlights
                </div>
            </div>
            <div class="list-inline flex-wrap my-n2">
                <div class="list-inline-item py-2">
                    <a href="explore-half-map-list.html" class="card icon-box-style-01 link-hover-dark-white">
                        <div class="card-body p-0">
                            <svg class="icon icon-pizza">
                                <use xlink:href="#icon-pizza"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                Foods
                            </span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-half-map-list.html" class="card icon-box-style-01 link-hover-dark-white">
                        <div class="card-body p-0">
                            <svg class="icon icon-bed">
                                <use xlink:href="#icon-bed"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block ">
                                Hotels
                            </span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-half-map-list.html" class="card icon-box-style-01 link-hover-dark-white">
                        <div class="card-body p-0">
                            <svg class="icon icon-brush2">
                                <use xlink:href="#icon-brush2"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                Jobs
                            </span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-half-map-list.html" class="card link-hover-dark-white icon-box-style-01">
                        <div class="card-body p-0">
                            <svg class="icon icon-pharmaceutical">
                                <use xlink:href="#icon-pharmaceutical"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                Medicals
                            </span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-half-map-list.html" class="card link-hover-dark-white icon-box-style-01">
                        <div class="card-body p-0">
                            <svg class="icon icon-cog">
                                <use xlink:href="#icon-cog"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                Services
                            </span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-half-map-list.html" class="card link-hover-dark-white icon-box-style-01">
                        <div class="card-body p-0">
                            <svg class="icon icon-bag">
                                <use xlink:href="#icon-bag"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                Shopping
                            </span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-half-map-list.html" class="card link-hover-dark-white icon-box-style-01">
                        <div class="card-body p-0">
                            <svg class="icon icon-car">
                                <use xlink:href="#icon-car"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                Automotive
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <a href="#"
                class="d-inline-block button-close mt-11 pt-1 text-dark font-size-lg font-weight-semibold text-decoration-none">
                <span class="d-block"><i class="fal fa-times"></i></span>
                <span class="d-block">Close</span>
            </a>
        </div>
    </div>
    <div id="canvas-menu" class="mfp-hide mfp-popup mfp-with-anim canvas-menu">
        <a class="popup-menu-canvas-dismiss link-hover-dark-primary font-size-h4 lh-1 mb-8 d-inline-block" href="#"><i
                class="fal fa-times"></i></a>
        <div class="menu-top d-flex align-items-center mb-10">
            <ul class="list-inline mb-0 ml-n3">
                <li class="list-inline-item mr-0 px-3">
                    <a href="#" class="font-size-md link-hover-gray-primary font-weight-semibold">ENG</a>
                </li>
                <li class="list-inline-item mr-0 px-3">
                    <a href="#" class="font-size-md link-hover-gray-primary font-weight-semibold">FRA</a>
                </li>
                <li class="list-inline-item mr-0 px-3">
                    <a href="#" class="font-size-md link-hover-gray-primary font-weight-semibold">GER</a>
                </li>
            </ul>
            <span class="separate"></span>
            <ul class="list-inline mb-0 ml-7 mr-n3">
                <li class="list-inline-item mr-0 px-3"><a href="#"
                        class="font-size-md link-hover-gray-primary font-weight-semibold">USD</a>
                </li>
                <li class="list-inline-item mr-0 px-3"><a href="#"
                        class="font-size-md link-hover-gray-primary font-weight-semibold">EURO</a>
                </li>
                <li class="list-inline-item mr-0 px-3"><a href="#"
                        class="font-size-md link-hover-gray-primary font-weight-semibold">PROUND</a>
                </li>
            </ul>
        </div>
        <div class="menu mb-12" id="menu">
            <ul class="list-group list-group-flush list-group-borderless">
                <li class="list-group-item p-0">
                    <a href="#" data-toggle="collapse" data-target="#itemOne" aria-expanded="true"
                        aria-controls="itemOne" class="text-decoration-none font-size-h2 font-weight-semibold">Demo</a>
                    <ul id="itemOne"
                        class="sub-menu py-3 x-animated x-fadeInUp collapse show list-group list-group-flush list-group-borderless"
                        data-parent="#menu">
                        <li class="list-group-item p-0"><a href="../../index-2.html"
                                class="font-size-md link-hover-gray-dark text-capitalize lh-19">main</a>
                        </li>
                        <li class="list-group-item p-0"><a href="home-automotive-services.html"
                                class="font-size-md link-hover-gray-dark text-capitalize lh-19">
                                automotive service</a></li>
                        <li class="list-group-item p-0"><a href="../food-and-restaurant/home-food-and-restaurant.html"
                                class="font-size-md link-hover-gray-dark text-capitalize lh-19">
                                food and restaurant</a></li>
                        <li class="list-group-item p-0"><a href="../health-and-medical/home-health-and-medical.html"
                                class="font-size-md link-hover-gray-dark text-capitalize lh-19">
                                health and medical</a></li>
                        <li class="list-group-item p-0"><a href="../hotel/home-hotels.html"
                                class="font-size-md link-hover-gray-dark text-capitalize lh-19">hotel</a>
                        </li>
                        <li class="list-group-item p-0"><a href="../job/home-jobs.html"
                                class="font-size-md link-hover-gray-dark text-capitalize lh-19">jobs</a>
                        </li>
                        <li class="list-group-item p-0"><a href="../service-finder/home-services-finder.html"
                                class="font-size-md link-hover-gray-dark text-capitalize lh-19">
                                service finder</a></li>
                        <li class="list-group-item p-0"><a href="../shopping/home-shopping.html"
                                class="font-size-md link-hover-gray-dark text-capitalize lh-19">
                                shopping</a></li>
                    </ul>
                </li>
                <li class="list-group-item p-0">
                    <a class="menu-link collapsed text-decoration-none font-size-h2 font-weight-semibold"
                        href="blog-listing-grid.html">Blog </a>
                </li>
                <li class="list-group-item p-0">
                    <a class="menu-link collapsed text-decoration-none font-size-h2 font-weight-semibold" href="#"
                        data-toggle="collapse" data-target="#itemFour" aria-expanded="true"
                        aria-controls="itemFour">Pages </a>
                    <ul id="itemFour"
                        class="sub-menu py-3 x-animated x-fadeInUp collapse list-group list-group-flush list-group-borderless"
                        data-parent="#menu">
                        <li class="list-group-item p-0"><a href="page-contact.html"
                                class="font-size-md link-hover-gray-dark text-capitalize lh-19">
                                contact</a></li>
                        <li class="list-group-item p-0"><a href="page-faqs.html"
                                class="font-size-md link-hover-gray-dark text-capitalize lh-19">
                                faqs</a></li>
                        <li class="list-group-item p-0"><a href="page-how-it-work.html"
                                class="font-size-md link-hover-gray-dark text-capitalize lh-19">
                                how it work</a></li>
                        <li class="list-group-item p-0"><a href="page-pricing-plan.html"
                                class="font-size-md link-hover-gray-dark text-capitalize lh-19">
                                pricing plan</a></li>
                        <li class="list-group-item p-0"><a href="page-privacy-policy.html"
                                class="font-size-md link-hover-gray-dark text-capitalize lh-19">
                                privacy
                                policy</a></li>
                        <li class="list-group-item p-0"><a href="page-submit-listing.html"
                                class="font-size-md link-hover-gray-dark text-capitalize lh-19">submit
                                listing</a></li>
                        <li class="list-group-item p-0"><a href="page-terms-and-condition.html"
                                class="font-size-md link-hover-gray-dark text-capitalize lh-19">Term
                                and condition</a></li>
                        <li class="list-group-item p-0"><a href="page-typography.html"
                                class="font-size-md link-hover-gray-dark text-capitalize lh-19">
                                typography</a></li>
                        <li class="list-group-item p-0"><a href="page-common-elements.html"
                                class="font-size-md link-hover-gray-dark text-capitalize lh-19">
                                Common elements</a></li>
                    </ul>
                </li>
                <li class="list-group-item p-0">
                    <a class="menu-link collapsed text-decoration-none font-size-h2 font-weight-semibold"
                        href="explore-half-map-list.html">Explore </a>
                </li>
            </ul>
        </div>
        <div class="social-icon light-color mb-7">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a target="_blank" title="Twitter" href="#">
                        <i class="fab fa-twitter">
                        </i>
                        <span>Twitter</span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a target="_blank" title="Facebook" href="#">
                        <i class="fab fa-facebook-f">
                        </i>
                        <span>Facebook</span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a target="_blank" title="Google plus" href="#">
                        <svg class="icon icon-google-plus-symbol">
                            <use xlink:href="#icon-google-plus-symbol"></use>
                        </svg>
                        <span>Google plus</span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a target="_blank" title="Instagram" href="#">
                        <svg class="icon icon-instagram">
                            <use xlink:href="#icon-instagram"></use>
                        </svg>
                        <span>Instagram</span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a target="_blank" title="Linkedin" href="#">
                        <i class="fab fa-linkedin-in"></i>
                        <span>Linkedin</span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a target="_blank" title="Dribbble" href="#">
                        <i class="fab fa-dribbble"></i>
                        <span>Dribbble</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="text-dark">
            <p class="mb-0">&copy;Punto Barber/p>
            <p class="mb-0">Design by G5Theme</p>
        </div>
    </div>

    <script src="{{asset('PR/vendors/jquery.min.js')}}"></script>
    <script src="{{asset('PR/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('PR/vendors/popper/popper.js')}}"></script>
    <script src="{{asset('PR/vendors/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('PR/vendors/hc-sticky/hc-sticky.js')}}"></script>
    <script src="{{asset('PR/vendors/isotope/isotope.pkgd.js')}}"></script>
    <script src="{{asset('PR/vendors/magnific-popup/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('PR/vendors/slick/slick.js')}}"></script>
    <script src="{{asset('PR/vendors/waypoints/jquery.waypoints.js')}}"></script>

    <script src="{{asset('PR/js/app.js')}}"></script>
    <svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden" version="1.1"
        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>
            <symbol id="icon-bed" viewBox="0 0 32 32">
                <title>bed</title>
                <path
                    d="M28 28.8h-1.6c-0.442 0-0.8-0.358-0.8-0.8s0.358-0.8 0.8-0.8h1.6c0.442 0 0.8 0.358 0.8 0.8s-0.358 0.8-0.8 0.8zM4 28.8h-1.6c-0.442 0-0.8-0.358-0.8-0.8s0.358-0.8 0.8-0.8h1.6c0.442 0 0.8 0.358 0.8 0.8s-0.358 0.8-0.8 0.8zM29.853 18.229l-3.789-11.365c-0.318-0.954-1.229-1.738-2.221-1.984-0.035-0.152-0.074-0.298-0.118-0.432-0.363-1.088-0.986-1.25-1.325-1.25h-6.4c-0.203 0-0.509 0.059-0.8 0.341-0.291-0.282-0.597-0.341-0.8-0.341h-6.4c-0.339 0-0.962 0.163-1.325 1.25-0.045 0.134-0.085 0.278-0.118 0.432-0.994 0.246-1.904 1.029-2.221 1.984l-3.789 11.365c-0.307 0.92-0.547 2.402-0.547 3.371v3.2c0 1.323 1.077 2.4 2.4 2.4h25.6c1.323 0 2.4-1.077 2.4-2.4v-3.2c0-0.97-0.24-2.451-0.547-3.371zM16.251 4.8h5.898c0.112 0.251 0.251 0.822 0.251 1.6s-0.139 1.349-0.251 1.6h-5.898c-0.112-0.251-0.251-0.822-0.251-1.6s0.139-1.349 0.251-1.6zM8.251 4.8h5.898c0.112 0.251 0.251 0.822 0.251 1.6s-0.139 1.349-0.251 1.6h-5.898c-0.112-0.251-0.251-0.822-0.251-1.6s0.139-1.349 0.251-1.6zM5.853 7.371c0.086-0.259 0.296-0.507 0.552-0.686 0.022 0.621 0.115 1.203 0.27 1.666 0.363 1.088 0.986 1.25 1.325 1.25h6.4c0.203 0 0.509-0.059 0.8-0.341 0.291 0.282 0.597 0.341 0.8 0.341h6.4c0.339 0 0.962-0.163 1.325-1.25 0.154-0.462 0.248-1.046 0.27-1.666 0.256 0.181 0.466 0.427 0.552 0.686l1.277 3.829h-21.246l1.277-3.829zM4.043 12.8h22.314l1.978 5.934c0.051 0.152 0.099 0.326 0.146 0.514-0.155-0.032-0.315-0.048-0.48-0.048h-25.6c-0.165 0-0.325 0.016-0.48 0.048 0.046-0.187 0.094-0.362 0.146-0.514l1.979-5.934zM28.8 24.8c0 0.442-0.358 0.8-0.8 0.8h-25.6c-0.442 0-0.8-0.358-0.8-0.8v-3.2c0-0.442 0.358-0.8 0.8-0.8h25.6c0.442 0 0.8 0.358 0.8 0.8v3.2z">
                </path>
            </symbol>
            <symbol id="icon-brush2" viewBox="0 0 32 32">
                <title>brush2</title>
                <path
                    d="M5.6 27.2c-0.211 0-0.418-0.085-0.565-0.235s-0.235-0.355-0.235-0.565 0.085-0.416 0.235-0.565c0.149-0.149 0.355-0.235 0.565-0.235s0.416 0.085 0.565 0.235c0.149 0.149 0.235 0.355 0.235 0.565s-0.085 0.418-0.235 0.565c-0.149 0.149-0.355 0.235-0.565 0.235zM29.834 15.102l-12.938-12.938c-0.453-0.453-1.054-0.701-1.698-0.701s-1.245 0.25-1.698 0.701l-8.138 8.138c-0.862 0.862-1.112 2.394-0.566 3.486l2.57 5.138c0.078 0.158 0.093 0.309 0.038 0.424s-0.178 0.203-0.35 0.243c-0.138 0.034-3.406 0.834-5.418 2.845-1.058 1.058-1.64 2.464-1.64 3.96s0.582 2.902 1.64 3.96c1.058 1.058 2.464 1.64 3.96 1.64 0 0 0 0 0 0 1.496 0 2.902-0.582 3.96-1.64 2.011-2.011 2.813-5.28 2.845-5.418 0.034-0.142 0.131-0.382 0.398-0.382 0.085 0 0.176 0.024 0.27 0.072l5.138 2.57c0.381 0.19 0.827 0.291 1.293 0.291 0.837 0 1.656-0.32 2.192-0.856l8.138-8.138c0.936-0.936 0.936-2.458 0-3.394zM20.566 25.502c-0.235 0.235-0.653 0.387-1.061 0.387-0.219 0-0.419-0.042-0.578-0.122l-5.138-2.57c-0.318-0.16-0.651-0.24-0.986-0.24-0.938 0-1.723 0.646-1.954 1.61-0.006 0.029-0.733 2.973-2.421 4.659-0.755 0.755-1.76 1.171-2.829 1.171s-2.074-0.416-2.829-1.171c-0.755-0.755-1.171-1.76-1.171-2.829s0.416-2.074 1.171-2.829c1.688-1.688 4.63-2.414 4.659-2.421 0.646-0.155 1.166-0.565 1.427-1.123s0.24-1.221-0.058-1.816l-2.57-5.138c-0.24-0.478-0.112-1.261 0.266-1.638l1.502-1.502 14.069 14.069-1.502 1.502zM28.702 17.366l-5.502 5.502-14.069-14.069 5.502-5.502c0.15-0.15 0.35-0.232 0.566-0.232s0.416 0.083 0.566 0.232l12.938 12.938c0.312 0.312 0.312 0.819 0 1.131z">
                </path>
            </symbol>
            <symbol id="icon-cog" viewBox="0 0 32 32">
                <title>cog</title>
                <path
                    d="M12.21 31.523c-0.066 0-0.133-0.008-0.2-0.026-1.437-0.37-2.818-0.939-4.102-1.694-0.373-0.219-0.504-0.694-0.298-1.074 0.254-0.467 0.389-0.995 0.389-1.531 0-1.765-1.435-3.2-3.2-3.2-0.534 0-1.064 0.134-1.531 0.389-0.379 0.206-0.854 0.075-1.074-0.298-0.755-1.286-1.325-2.666-1.694-4.102-0.104-0.406 0.123-0.824 0.52-0.957 1.302-0.438 2.179-1.658 2.179-3.032s-0.875-2.594-2.179-3.032c-0.397-0.134-0.624-0.55-0.52-0.957 0.37-1.437 0.939-2.818 1.694-4.102 0.219-0.373 0.694-0.504 1.074-0.298 0.466 0.254 0.995 0.389 1.531 0.389 1.765 0 3.2-1.435 3.2-3.2 0-0.534-0.134-1.064-0.389-1.531-0.206-0.379-0.075-0.854 0.298-1.074 1.286-0.755 2.666-1.325 4.102-1.694 0.406-0.104 0.824 0.123 0.957 0.52 0.438 1.302 1.658 2.179 3.032 2.179s2.594-0.875 3.032-2.179c0.134-0.397 0.552-0.624 0.957-0.52 1.437 0.37 2.818 0.939 4.102 1.694 0.373 0.219 0.504 0.694 0.298 1.074-0.254 0.467-0.389 0.995-0.389 1.531 0 1.765 1.435 3.2 3.2 3.2 0.534 0 1.064-0.134 1.531-0.389 0.379-0.206 0.854-0.075 1.074 0.298 0.755 1.286 1.325 2.666 1.694 4.102 0.104 0.406-0.123 0.824-0.52 0.957-1.302 0.438-2.179 1.658-2.179 3.032s0.875 2.594 2.179 3.032c0.397 0.134 0.624 0.55 0.52 0.957-0.37 1.437-0.939 2.818-1.694 4.102-0.219 0.373-0.694 0.504-1.074 0.298-0.467-0.254-0.995-0.389-1.531-0.389-1.765 0-3.2 1.435-3.2 3.2 0 0.534 0.134 1.064 0.389 1.531 0.206 0.379 0.075 0.854-0.298 1.074-1.286 0.755-2.666 1.325-4.102 1.694-0.406 0.104-0.824-0.123-0.957-0.52-0.438-1.302-1.658-2.179-3.032-2.179s-2.594 0.875-3.032 2.179c-0.112 0.331-0.422 0.546-0.758 0.546zM16 27.2c1.803 0 3.427 1.005 4.248 2.563 0.832-0.258 1.642-0.59 2.416-0.995-0.173-0.502-0.262-1.034-0.262-1.568 0-2.646 2.154-4.8 4.8-4.8 0.534 0 1.066 0.090 1.568 0.262 0.405-0.774 0.739-1.582 0.995-2.416-1.558-0.819-2.563-2.443-2.563-4.248s1.005-3.427 2.563-4.248c-0.258-0.832-0.59-1.642-0.995-2.416-0.502 0.173-1.034 0.262-1.568 0.262-2.646 0-4.8-2.154-4.8-4.8 0-0.534 0.090-1.066 0.262-1.568-0.774-0.405-1.582-0.739-2.416-0.995-0.819 1.558-2.443 2.563-4.248 2.563s-3.427-1.005-4.248-2.563c-0.832 0.256-1.642 0.59-2.416 0.995 0.173 0.502 0.262 1.034 0.262 1.568 0 2.646-2.154 4.8-4.8 4.8-0.534 0-1.066-0.090-1.568-0.262-0.405 0.774-0.739 1.582-0.995 2.416 1.558 0.819 2.563 2.443 2.563 4.248s-1.005 3.427-2.563 4.248c0.256 0.832 0.59 1.642 0.995 2.416 0.502-0.173 1.034-0.262 1.568-0.262 2.646 0 4.8 2.154 4.8 4.8 0 0.534-0.090 1.066-0.262 1.568 0.774 0.405 1.582 0.739 2.416 0.995 0.819-1.558 2.443-2.563 4.248-2.563zM16 20.8c-2.646 0-4.8-2.154-4.8-4.8s2.154-4.8 4.8-4.8 4.8 2.154 4.8 4.8-2.154 4.8-4.8 4.8zM16 12.8c-1.765 0-3.2 1.435-3.2 3.2s1.435 3.2 3.2 3.2c1.765 0 3.2-1.435 3.2-3.2s-1.435-3.2-3.2-3.2z">
                </path>
            </symbol>
            <symbol id="icon-bag" viewBox="0 0 32 32">
                <title>bag</title>
                <path
                    d="M13.6 27.2c-0.349 0-0.669-0.229-0.77-0.581-0.122-0.426 0.125-0.867 0.549-0.989l11.2-3.2c0.426-0.122 0.867 0.125 0.989 0.549s-0.125 0.867-0.549 0.989l-11.2 3.2c-0.074 0.021-0.147 0.030-0.221 0.030zM28.797 26.333l-1.6-19.2c-0.022-0.274-0.186-0.523-0.438-0.65l-3.2-1.6c-0.395-0.197-0.875-0.037-1.074 0.358s-0.037 0.875 0.358 1.074l1.115 0.557-2.013 0.403c-0.046-0.331-0.099-0.669-0.155-1.006-0.712-4.277-1.79-6.269-3.389-6.269-0.638 0-1.238 0.269-1.731 0.778-1.125 1.158-1.822 3.624-2.133 7.536-0.013 0.152-0.022 0.301-0.034 0.45l-3.933 0.787-2.965-1.976 6.17-1.371c0.432-0.096 0.704-0.523 0.608-0.955s-0.523-0.702-0.955-0.608l-1.64 0.365c0.442-2.154 1.096-3.406 1.813-3.406 0.086 0 0.262 0.115 0.475 0.438 0.243 0.37 0.739 0.472 1.107 0.229s0.472-0.739 0.229-1.107c-0.63-0.96-1.333-1.16-1.813-1.16-0.734 0-1.774 0.355-2.566 2.043-0.39 0.834-0.709 1.955-0.946 3.339l-4.662 1.035c-0.314 0.069-0.554 0.318-0.613 0.634-0.005 0.029-0.008 0.058-0.011 0.085v0l-1.6 20.8c-0.026 0.325 0.149 0.632 0.44 0.778l6.4 3.2c0.112 0.056 0.235 0.085 0.358 0.085 0.070 0 0.141-0.010 0.211-0.029l17.6-4.8c0.373-0.101 0.619-0.454 0.587-0.838zM17.816 1.893c0.254-0.262 0.454-0.293 0.584-0.293s0.482 0.261 0.882 1.246c0.354 0.872 0.666 2.109 0.926 3.674 0.059 0.358 0.114 0.717 0.163 1.070l-4.242 0.848c0.363-4.557 1.213-6.058 1.686-6.546zM6.293 8.624l3.307 2.205v19.077l-4.762-2.381 1.454-18.902zM11.2 30.152v-19.096l3.214-0.643c-0.067 1.803-0.029 3.136-0.027 3.211 0.013 0.434 0.368 0.776 0.798 0.776 0.008 0 0.016 0 0.024 0 0.442-0.013 0.789-0.382 0.776-0.824 0-0.019-0.045-1.53 0.043-3.486l4.539-0.907c0.173 1.614 0.234 2.837 0.234 2.856 0.021 0.442 0.395 0.782 0.837 0.762s0.782-0.395 0.762-0.837c-0.003-0.078-0.067-1.382-0.256-3.094l3.534-0.707 1.47 17.643-15.947 4.349z">
                </path>
            </symbol>
            <symbol id="icon-pizza" viewBox="0 0 32 32">
                <title>pizza</title>
                <path
                    d="M31.92 14.931c-0.072-0.2-0.219-0.363-0.411-0.454l-4.338-2.058c0 0 0 0 0 0s0 0 0 0l-26.029-12.342c-0.306-0.146-0.669-0.082-0.909 0.157s-0.302 0.603-0.157 0.909l12.342 26.029c0 0 0 0 0 0s0 0 0 0l2.056 4.338c0.091 0.192 0.254 0.339 0.454 0.411 0.086 0.030 0.178 0.046 0.269 0.046 0.118 0 0.235-0.026 0.344-0.077 7.146-3.395 12.95-9.2 16.346-16.346 0.091-0.192 0.102-0.411 0.030-0.611zM22.4 12.8c0 0.882-0.718 1.6-1.6 1.6s-1.6-0.718-1.6-1.6 0.718-1.6 1.6-1.6c0.019 0 0.038-0.002 0.058-0.003l1.138 0.539c0.262 0.293 0.405 0.666 0.405 1.064zM18.866 10.253c-0.768 0.586-1.266 1.509-1.266 2.547 0 1.765 1.435 3.2 3.2 3.2s3.2-1.435 3.2-3.2c0-0.038-0.003-0.077-0.010-0.117l1.762 0.835c-2.682 5.25-6.984 9.552-12.234 12.234l-3.139-6.621c0.269 0.046 0.544 0.070 0.822 0.070 2.646 0 4.8-2.154 4.8-4.8s-2.154-4.8-4.8-4.8c-1.261 0-2.451 0.485-3.354 1.365-0.331 0.323-0.608 0.686-0.83 1.078l-4.533-9.56 16.382 7.768zM8.011 14.139c0.131-1.661 1.499-2.939 3.189-2.939 1.765 0 3.2 1.435 3.2 3.2s-1.435 3.2-3.2 3.2c-0.658 0-1.282-0.195-1.816-0.565l-1.373-2.896zM15.576 30.091l-1.373-2.894c5.582-2.84 10.154-7.411 12.994-12.994l2.894 1.373c-3.158 6.246-8.269 11.358-14.515 14.515zM7.2 8h1.6c0.442 0 0.8-0.358 0.8-0.8s-0.358-0.8-0.8-0.8h-1.6c-0.442 0-0.8 0.358-0.8 0.8s0.358 0.8 0.8 0.8zM18.4 20.8c0.442 0 0.8-0.358 0.8-0.8v-1.6c0-0.442-0.358-0.8-0.8-0.8s-0.8 0.358-0.8 0.8v1.6c0 0.442 0.358 0.8 0.8 0.8z">
                </path>
            </symbol>
            <symbol id="icon-car" viewBox="0 0 32 32">
                <title>car</title>
                <path
                    d="M32.002 24.816c0-0.018 0-0.037-0.002-0.054-0.010-0.413-0.15-2.933-2.042-3.878-0.274-0.136-0.84-0.419-6.213-0.838-0.195-0.448-0.523-1.17-0.922-1.925-1.246-2.365-2.032-2.907-2.515-3.109-1.691-0.707-6.787-0.867-10.102-0.038-2.075 0.518-3.934 1.741-5.376 3.534-0.821 1.021-1.291 1.957-1.478 2.373-0.475 0.374-0.904 0.81-1.285 1.307-1.371 1.784-2.066 4.277-2.066 7.411 0 0.213 0.085 0.416 0.234 0.566s0.354 0.234 0.566 0.234h1.656c0.398 0 0.736-0.293 0.792-0.686 0.045-0.315 0.122-0.621 0.226-0.912 0.661 1.862 2.44 3.2 4.525 3.2s3.864-1.338 4.525-3.2c0.104 0.293 0.181 0.597 0.226 0.912 0.056 0.394 0.394 0.686 0.792 0.686h9.714c0.398 0 0.736-0.293 0.792-0.686 0.027-0.19 0.067-0.378 0.117-0.56 0.498 1.645 2.027 2.846 3.832 2.846 2.208 0 4.003-1.795 4.003-4.003 0-0.888-0.29-1.714-0.786-2.382 0.435-0.008 0.786-0.362 0.786-0.8zM10.594 16.526c3.062-0.766 7.837-0.565 9.098-0.038 0.061 0.026 0.624 0.307 1.71 2.368 0.195 0.368 0.373 0.733 0.525 1.056-0.968-0.067-2.056-0.138-3.28-0.211-4.95-0.298-9.766-0.499-9.814-0.501-0.011 0-0.022 0-0.034 0-0.994 0-1.91 0.115-2.747 0.344 0.933-1.168 2.403-2.483 4.542-3.018zM8 30.4c-1.765 0-3.2-1.435-3.2-3.2 0-0.131 0.010-0.261 0.024-0.39 0.854-0.754 1.971-1.21 3.176-1.21s2.322 0.456 3.176 1.21c0.016 0.13 0.024 0.259 0.024 0.39 0 1.765-1.435 3.2-3.2 3.2zM22.602 28.8h-8.405c-0.288-1.117-0.877-2.139-1.704-2.955-0.008-0.008-0.018-0.018-0.026-0.026-0.083-0.082-0.17-0.162-0.258-0.238-1.165-1.019-2.661-1.579-4.211-1.579s-3.045 0.562-4.211 1.579c-0.069 0.061-0.136 0.122-0.202 0.186-0.046 0.037-0.088 0.077-0.125 0.123-0.803 0.808-1.378 1.814-1.659 2.912h-0.186c0.168-3.819 1.621-7.992 7.166-8 0.315 0.013 4.933 0.21 9.693 0.494 9.090 0.544 10.541 0.92 10.765 1.021 0.637 0.318 0.923 1.083 1.053 1.685h-1.494c-0.16 0-0.32 0.006-0.478 0.018-0.010 0-0.019 0.002-0.029 0.002-1.042 0.083-2.045 0.418-2.922 0.976-0.010 0.005-0.018 0.011-0.027 0.018-0.264 0.17-0.517 0.358-0.755 0.566-0.976 0.854-1.667 1.979-1.987 3.219zM27.997 30.4c-1.325 0-2.403-1.078-2.403-2.403 0-0.629 0.238-1.216 0.67-1.666 0.621-0.389 1.333-0.64 2.091-0.71 1.171 0.174 2.045 1.182 2.045 2.376 0 1.325-1.078 2.403-2.403 2.403z">
                </path>
            </symbol>
            <symbol id="icon-pharmaceutical" viewBox="0 0 32 32">
                <title>pharmaceutical</title>
                <path
                    d="M25.003 17.956c-3.858 0-6.997 3.139-6.997 6.997s3.139 6.997 6.997 6.997 6.997-3.139 6.997-6.997c-0-3.858-3.139-6.997-6.997-6.997zM25.003 30.588c-3.107 0-5.634-2.528-5.634-5.634s2.528-5.634 5.634-5.634 5.634 2.528 5.634 5.634c-0 3.107-2.528 5.634-5.634 5.634z">
                </path>
                <path
                    d="M27.133 21.498c-0.32-0.197-0.74-0.098-0.938 0.223l-3.545 5.751c-0.198 0.32-0.098 0.74 0.223 0.938 0.111 0.069 0.235 0.102 0.357 0.102 0.229 0 0.452-0.115 0.581-0.324l3.545-5.751c0.198-0.321 0.098-0.74-0.223-0.938z">
                </path>
                <path
                    d="M5.541 27.145l-0.104-0.065c-0.565-0.354-0.959-0.907-1.109-1.559s-0.038-1.322 0.316-1.887c0.2-0.319 0.103-0.74-0.216-0.939s-0.74-0.103-0.939 0.216c-0.547 0.874-0.72 1.909-0.489 2.916s0.84 1.862 1.714 2.409l0.104 0.065c0.112 0.070 0.237 0.104 0.361 0.104 0.227 0 0.449-0.113 0.578-0.32 0.2-0.319 0.103-0.74-0.216-0.939z">
                </path>
                <path
                    d="M19.45 4.692l0.104 0.065c1.169 0.732 1.525 2.278 0.793 3.446-0.2 0.319-0.103 0.74 0.216 0.939 0.112 0.070 0.237 0.104 0.361 0.104 0.227 0 0.449-0.113 0.578-0.32 1.13-1.806 0.581-4.195-1.225-5.325l-0.104-0.065c-0.319-0.2-0.74-0.103-0.939 0.216s-0.103 0.74 0.216 0.939z">
                </path>
                <path
                    d="M18.279 19.538c0-0 0-0 0-0l5.679-9.074c0.958-1.531 1.263-3.343 0.858-5.103s-1.471-3.257-3.002-4.215l-0.104-0.065c-1.077-0.674-2.316-1.031-3.581-1.031-2.348 0-4.493 1.187-5.737 3.175l-11.359 18.148c-0.958 1.531-1.263 3.343-0.858 5.103s1.471 3.257 3.002 4.215l0.104 0.065c1.077 0.674 2.316 1.031 3.582 1.031 2.348 0 4.493-1.187 5.737-3.175l5.679-9.074c0 0 0 0 0 0zM13.547 3.947c0.994-1.587 2.706-2.535 4.582-2.535 1.009 0 1.998 0.285 2.858 0.823l0.104 0.065c1.222 0.765 2.073 1.96 2.397 3.365s0.080 2.852-0.685 4.074l-5.318 8.496-9.256-5.793 5.318-8.496zM11.444 27.889c-0.994 1.587-2.706 2.535-4.582 2.535-1.009 0-1.998-0.285-2.858-0.823l-0.104-0.065c-1.222-0.765-2.073-1.96-2.397-3.365s-0.080-2.852 0.685-4.075l5.318-8.496 9.256 5.793-5.318 8.496z">
                </path>
            </symbol>
            <symbol id="icon-checkmark-circle" viewBox="0 0 32 32">
                <title>checkmark-circle</title>
                <path
                    d="M15.2 32c-4.061 0-7.877-1.581-10.749-4.451s-4.451-6.688-4.451-10.747c0-4.061 1.581-7.877 4.451-10.749s6.688-4.453 10.749-4.453c4.061 0 7.877 1.581 10.749 4.453s4.451 6.688 4.451 10.749-1.581 7.877-4.451 10.747c-2.87 2.87-6.688 4.451-10.749 4.451zM15.2 3.2c-7.499 0-13.6 6.101-13.6 13.6s6.101 13.6 13.6 13.6 13.6-6.101 13.6-13.6-6.101-13.6-13.6-13.6zM12 23.2c-0.205 0-0.41-0.078-0.566-0.234l-4.8-4.8c-0.312-0.312-0.312-0.819 0-1.131s0.819-0.312 1.131 0l4.234 4.234 10.634-10.634c0.312-0.312 0.819-0.312 1.131 0s0.312 0.819 0 1.131l-11.2 11.2c-0.157 0.157-0.362 0.234-0.566 0.234z">
                </path>
            </symbol>
            <symbol id="icon-user-circle-o" viewBox="0 0 28 28">
                <title>user-circle-o</title>
                <path
                    d="M14 0c7.734 0 14 6.266 14 14 0 7.688-6.234 14-14 14-7.75 0-14-6.297-14-14 0-7.734 6.266-14 14-14zM23.672 21.109c1.453-2 2.328-4.453 2.328-7.109 0-6.609-5.391-12-12-12s-12 5.391-12 12c0 2.656 0.875 5.109 2.328 7.109 0.562-2.797 1.922-5.109 4.781-5.109 1.266 1.234 2.984 2 4.891 2s3.625-0.766 4.891-2c2.859 0 4.219 2.312 4.781 5.109zM20 11c0-3.313-2.688-6-6-6s-6 2.688-6 6 2.688 6 6 6 6-2.688 6-6z">
                </path>
            </symbol>
            <symbol id="icon-expand" viewBox="0 0 32 32">
                <title>expand</title>
                <path
                    d="M12.566 11.434l-9.834-9.834h6.069c0.442 0 0.8-0.358 0.8-0.8s-0.358-0.8-0.8-0.8h-8c-0.442 0-0.8 0.358-0.8 0.8v8c0 0.442 0.358 0.8 0.8 0.8s0.8-0.358 0.8-0.8v-6.069l9.834 9.834c0.157 0.157 0.362 0.234 0.566 0.234s0.41-0.078 0.566-0.234c0.312-0.312 0.312-0.819 0-1.131zM31.2 0h-8c-0.442 0-0.8 0.358-0.8 0.8s0.358 0.8 0.8 0.8h6.069l-9.834 9.834c-0.312 0.312-0.312 0.819 0 1.131 0.157 0.157 0.362 0.234 0.565 0.234s0.41-0.078 0.565-0.234l9.835-9.834v6.069c0 0.442 0.358 0.8 0.8 0.8s0.8-0.358 0.8-0.8v-8c0-0.442-0.358-0.8-0.8-0.8zM12.566 19.435c-0.312-0.312-0.819-0.312-1.131 0l-9.834 9.834v-6.069c0-0.442-0.358-0.8-0.8-0.8s-0.8 0.358-0.8 0.8v8c0 0.442 0.358 0.8 0.8 0.8h8c0.442 0 0.8-0.358 0.8-0.8s-0.358-0.8-0.8-0.8h-6.069l9.834-9.835c0.312-0.312 0.312-0.819 0-1.131zM31.2 22.4c-0.442 0-0.8 0.358-0.8 0.8v6.069l-9.835-9.834c-0.312-0.312-0.819-0.312-1.131 0s-0.312 0.819 0 1.131l9.835 9.834h-6.069c-0.442 0-0.8 0.358-0.8 0.8s0.358 0.8 0.8 0.8h8c0.442 0 0.8-0.358 0.8-0.8v-8c0-0.442-0.358-0.8-0.8-0.8z">
                </path>
            </symbol>
            <symbol id="icon-quote" viewBox="0 0 20 20">
                <title>quote</title>
                <path
                    d="M5.315 3.401c-1.61 0-2.916 1.343-2.916 3s1.306 3 2.916 3c2.915 0 0.972 5.799-2.916 5.799v1.4c6.939 0.001 9.658-13.199 2.916-13.199zM13.715 3.401c-1.609 0-2.915 1.343-2.915 3s1.306 3 2.915 3c2.916 0 0.973 5.799-2.915 5.799v1.4c6.938 0.001 9.657-13.199 2.915-13.199z">
                </path>
            </symbol>
            <symbol id="icon-google-plus-symbol" viewBox="0 0 32 32">
                <title>google-plus-symbol</title>
                <path
                    d="M18.413 20.375c-0.34-0.455-0.715-0.879-1.125-1.269s-0.821-0.747-1.231-1.067c-0.41-0.32-0.785-0.628-1.125-0.923s-0.615-0.602-0.827-0.923-0.317-0.647-0.317-0.981c0-0.462 0.148-0.894 0.442-1.298s0.654-0.795 1.077-1.173c0.423-0.378 0.846-0.792 1.269-1.24s0.782-1.042 1.077-1.779c0.295-0.737 0.442-1.58 0.442-2.529 0-1.128-0.25-2.212-0.75-3.25s-1.205-1.846-2.115-2.423h2.596l2.596-1.519h-8.403c-1.192 0-2.391 0.128-3.596 0.385-1.782 0.397-3.282 1.305-4.5 2.721s-1.827 3.022-1.827 4.817c0 1.897 0.683 3.474 2.048 4.731s3.003 1.884 4.913 1.884c0.385 0 0.833-0.032 1.346-0.096-0.026 0.102-0.070 0.24-0.134 0.413s-0.116 0.311-0.154 0.414c-0.038 0.102-0.071 0.227-0.096 0.375s-0.038 0.298-0.038 0.452c0 0.846 0.41 1.801 1.231 2.865-0.974 0.026-1.936 0.112-2.884 0.26s-1.942 0.378-2.981 0.692c-1.038 0.314-1.968 0.769-2.788 1.365s-1.436 1.304-1.846 2.125c-0.474 0.949-0.712 1.814-0.712 2.596 0 0.859 0.192 1.638 0.577 2.337s0.878 1.269 1.481 1.711c0.603 0.443 1.298 0.814 2.087 1.116s1.57 0.516 2.346 0.644c0.776 0.128 1.542 0.192 2.298 0.192 3.436 0 6.128-0.84 8.077-2.519 1.795-1.564 2.692-3.372 2.692-5.423 0-0.731-0.106-1.413-0.317-2.048s-0.487-1.18-0.827-1.635zM11 13.385c-0.654 0-1.276-0.167-1.865-0.5s-1.090-0.766-1.5-1.298c-0.41-0.532-0.769-1.131-1.077-1.798s-0.535-1.333-0.683-2c-0.147-0.666-0.221-1.301-0.221-1.904 0-1.231 0.327-2.288 0.981-3.173s1.577-1.327 2.769-1.327c0.846 0 1.612 0.263 2.298 0.788s1.224 1.192 1.615 2c0.391 0.808 0.692 1.644 0.904 2.509s0.317 1.683 0.317 2.452c0 1.282-0.279 2.311-0.836 3.087s-1.458 1.163-2.702 1.163zM16.317 27.826c-0.352 0.603-0.83 1.074-1.432 1.413s-1.247 0.59-1.933 0.75c-0.686 0.161-1.407 0.241-2.163 0.241-0.821 0-1.635-0.096-2.442-0.289s-1.58-0.484-2.317-0.875c-0.737-0.391-1.333-0.929-1.788-1.615s-0.683-1.465-0.683-2.337c0-0.769 0.173-1.455 0.519-2.058s0.789-1.083 1.327-1.442c0.538-0.359 1.167-0.654 1.885-0.884s1.41-0.391 2.077-0.481c0.666-0.090 1.346-0.134 2.038-0.134 0.423 0 0.744 0.013 0.962 0.038 0.077 0.052 0.272 0.186 0.587 0.404s0.526 0.366 0.635 0.443c0.109 0.077 0.308 0.224 0.596 0.442s0.493 0.381 0.615 0.49c0.121 0.109 0.298 0.272 0.529 0.49s0.401 0.407 0.51 0.567c0.109 0.16 0.244 0.356 0.404 0.586s0.272 0.452 0.337 0.664c0.064 0.212 0.125 0.442 0.182 0.692s0.086 0.51 0.086 0.779c0 0.807-0.176 1.513-0.529 2.115z">
                </path>
                <path d="M27.077 4.923v-4.923h-2.462v4.923h-4.923v2.462h4.923v4.923h2.462v-4.923h4.923v-2.462z"></path>
            </symbol>
            <symbol id="icon-instagram" viewBox="0 0 20 20">
                <title>instagram</title>
                <path
                    d="M17 1h-14c-1.1 0-2 0.9-2 2v14c0 1.101 0.9 2 2 2h14c1.1 0 2-0.899 2-2v-14c0-1.1-0.9-2-2-2zM9.984 15.523c3.059 0 5.538-2.481 5.538-5.539 0-0.338-0.043-0.664-0.103-0.984h1.581v7.216c0 0.382-0.31 0.69-0.693 0.69h-12.614c-0.383 0-0.693-0.308-0.693-0.69v-7.216h1.549c-0.061 0.32-0.104 0.646-0.104 0.984 0 3.059 2.481 5.539 5.539 5.539zM6.523 9.984c0-1.912 1.55-3.461 3.462-3.461s3.462 1.549 3.462 3.461-1.551 3.462-3.462 3.462c-1.913 0-3.462-1.55-3.462-3.462zM16.307 6h-1.615c-0.382 0-0.692-0.312-0.692-0.692v-1.617c0-0.382 0.31-0.691 0.691-0.691h1.615c0.384 0 0.694 0.309 0.694 0.691v1.616c0 0.381-0.31 0.693-0.693 0.693z">
                </path>
            </symbol>
            <symbol id="icon-ionicons_svg_md-menu" viewBox="0 0 32 32">
                <title>ionicons_svg_md-menu</title>
                <path d="M4 24h24v-2.667h-24v2.667zM4 17.333h24v-2.667h-24v2.667zM4 8v2.667h24v-2.667h-24z"></path>
            </symbol>
            <symbol id="icon-quotes-left" viewBox="0 0 32 32">
                <title>quotes-left</title>
                <path
                    d="M7.031 14c3.866 0 7 3.134 7 7s-3.134 7-7 7-7-3.134-7-7l-0.031-1c0-7.732 6.268-14 14-14v4c-2.671 0-5.182 1.040-7.071 2.929-0.364 0.364-0.695 0.751-0.995 1.157 0.357-0.056 0.724-0.086 1.097-0.086zM25.031 14c3.866 0 7 3.134 7 7s-3.134 7-7 7-7-3.134-7-7l-0.031-1c0-7.732 6.268-14 14-14v4c-2.671 0-5.182 1.040-7.071 2.929-0.364 0.364-0.695 0.751-0.995 1.157 0.358-0.056 0.724-0.086 1.097-0.086z">
                </path>
            </symbol>
            <symbol id="icon-ionicons_svg_md-star" viewBox="0 0 32 32">
                <title>ionicons_svg_md-star</title>
                <path
                    d="M16 23.293l7.802 4.707-2.064-8.879 6.887-5.97-9.079-0.78-3.546-8.371-3.546 8.371-9.079 0.78 6.887 5.97-2.064 8.879z">
                </path>
            </symbol>
        </defs>
    </svg>
</body>

<!-- Mirrored from templates.g5plus.net/thedir/demo/automotive-service/home-automotive-services.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jun 2020 18:33:50 GMT -->

</html>