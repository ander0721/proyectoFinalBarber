@extends('administrador.masterpage')


@section('contenido')
    <body>
        <div class="container mt-4">
        @foreach($barberia as $barberia)

        <div class="col-lg-12 col-md-6 col-sm-6">
      <div class="ms-card">
        <div class="ms-card-img">
          <img src="../../assets/img/costic/3.jpg" alt="card_img">
        </div>
        <div class="ms-card-body ">
          <div class="wrapper-new2">
            <h3 class="white text-center">{{ $barberia->nombreB }}</h6>
            <hr>
          </div>
          <div class="wrapper-new2">
            <h5 class="white text-center">{{ $barberia->direccion }}</h6>
        <hr>

          </div>
          <div class="wrapper-new2">
            <h5 class="white text-center">{{ $barberia->telefono }}</h6>
            <hr>

          </div>
          <div class="wrapper-new2">
            <h5 class="white text-center">{{ $barberia->horario }}</h6>
            <hr>

            <span class="white">$11.000</span>

          </div>
          <div class="wrapper-new2">
            <h5>Servicios:</h6>
            @foreach($barberia->servicios as $servicio)

            <span class="white wrapper">{{ $servicio->nombreS }}</span>
            <hr>

            @endforeach


          </div>
          
        </div>
      </div>
    </div>
           
                        <strong>servicios</strong>:
                            <span class="badge badge-primary">{{ $servicio->nombreS }}</span>

                       
                    </p>

                    <hr>
                    <strong>productos</strong>:
                        @foreach($barberia->productos as $producto)
                        <span class="badge badge-primary">{{ $producto->nombreP }}</span>
                        <span class="badge badge-primary">{{ $producto->marca->nombreM }}</span>

                        @endforeach
                    <hr>
                    <strong>marcas</strong>:
                        @foreach($barberia->productos as $marca)
                        <span class="badge badge-primary">{{ $marca->marca->nombreM }}</span>

                        @endforeach

                        <hr>
                    <strong>tipo producto</strong>:
                        @foreach($barberia->productos as $tipo)
                        <span class="badge badge-primary">{{ $tipo->tipo->nombreT }}</span>

                        @endforeach

                        <hr>
                    <strong>comentarios</strong>:
                        @foreach($comentarios as $comentario)
                        <span class="badge badge-primary">{{ $comentario->users->name }}</span>
                        <p> <span class="badge badge-primary">{{ $comentario->comentario }}</span></p>

                        @endforeach


                       

                    <h3>Videos</h3>

                   
            	</div>
            </div>
            @endforeach
        </div>
        @endsection
