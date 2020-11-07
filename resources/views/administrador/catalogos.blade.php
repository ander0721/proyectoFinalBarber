@extends('administrador.masterpage')


@section('contenido')

<div class="ms-content-wrapper box">

  <div class="row">
    <div class="col-md-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb pl-0">
          <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Inicio </a></li>
          <li class="breadcrumb-item"><a href="#">Servicios</a></li>
          <li class="breadcrumb-item active" aria-current="page">Catálogo de servicios</li>
        </ol>
      </nav>
    </div>


    <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="ms-card">
        <div class="ms-card-img">
          <img src="../../assets/img/costic/1.jpg" alt="card_img">
        </div>
        <div class="ms-card-body ">
          <div class="wrapper-new2 ">
            <h6>Corte barba</h6>
            <span class="white">$9.000</span>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="ms-card">
        <div class="ms-card-img">
          <img src="../../assets/img/costic/3.jpg" alt="card_img">
        </div>
        <div class="ms-card-body ">
          <div class="wrapper-new2">
            <h6>Corte clásico</h6>
            <span class="white">$8.000</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="ms-card">
        <div class="ms-card-img">
          <img src="../../assets/img/costic/4.jpg" alt="card_img">
        </div>
        <div class="ms-card-body ">
          <div class="wrapper-new2">
            <h6>Tratamiento capilar</h6>
            <span class="white">$15.000</span>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="ms-card">
        <div class="ms-card-img">
          <img src="../../assets/img/costic/7.jpg" alt="card_img">
        </div>
        <div class="ms-card-body ">
          <div class="wrapper-new2">
            <h6>Manicure</h6>
            <span class="white">$12.000</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="ms-card">
        <div class="ms-card-img">
          <img src="../../assets/img/costic/8.jpg" alt="card_img">
        </div>
        <div class="ms-card-body ">
          <div class="wrapper-new2">
            <h6>Pedicure</h6>
            <span class="white">$12.000</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="ms-card">
        <div class="ms-card-img">
          <img src="../../assets/img/costic/9.jpg" alt="card_img">
        </div>
        <div class="ms-card-body ">
          <div class="wrapper-new2">
            <h6>Corte con diseño</h6>
            <span class="white">$11.000</span>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
