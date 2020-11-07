<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title> </title>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #map {
            width: 20%;
            height: 20%;
            left:60%;
            top:-50%;
        }

    </style>
</head>

<body>

    <div class="container">
        <div class="col-12">
            <div class="col-6">

                <form action="{{ route('barberias.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nombre </strong>
                                <input type="text" name="nombreB" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>latitud</strong>
                                <input type="text" name="latitud" class="form-control" id="latitud">
                            </div>
                            <div class="form-group">
                                <strong>longitud</strong>
                                <input type="text" name="longitud" class="form-control" id="longitud">
                            </div>
                            <div class="form-group">
                                <strong>direccion</strong>
                                <input type="text" name="direccion" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>propietario</strong>
                                <input type="text" name="propietario" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>telefono</strong>
                                <input type="text" name="telefono" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>horario</strong>
                                <input type="text" name="horario" class="form-control">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Crear</button>
                            </div>
                        </div>

                </form>

            </div>


            </div>
        </div>

    </div>
    <div class="col-6" id="map"></div>

    <script>
        var marker; //variable del marcador
        var coords = {}; //coordenadas obtenidas con la geolocalización

        //Funcion principal
        initMap = function() {

            //usamos la API para geolocalizar el usuario
            navigator.geolocation.getCurrentPosition(
                function(position) {
                    coords = {
                        lng: position.coords.longitude,
                        lat: position.coords.latitude
                    };
                    setMapa(coords); //pasamos las coordenadas al metodo para crear el mapa


                },
                function(error) {
                    console.log(error);
                });

        }



        function setMapa(coords) {
            //Se crea una nueva instancia del objeto mapa
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: new google.maps.LatLng(coords.lat, coords.lng),

            });

            //Creamos el marcador en el mapa con sus propiedades
            //para nuestro obetivo tenemos que poner el atributo draggable en true
            //position pondremos las mismas coordenas que obtuvimos en la geolocalización
            marker = new google.maps.Marker({
                map: map,
                draggable: true,
                animation: google.maps.Animation.DROP,
                position: new google.maps.LatLng(coords.lat, coords.lng),

            });
            //agregamos un evento al marcador junto con la funcion callback al igual que el evento dragend que indica 
            //cuando el usuario a soltado el marcador
            marker.addListener('click', toggleBounce);

            marker.addListener('dragend', function(event) {
                //escribimos las coordenadas de la posicion actual del marcador dentro del input #coords
                document.getElementById("latitud").value = this.getPosition().lat();
                document.getElementById("longitud").value = this.getPosition().lng();

            });
        }

        //callback al hacer clic en el marcador lo que hace es quitar y poner la animacion BOUNCE
        function toggleBounce() {
            if (marker.getAnimation() !== null) {
                marker.setAnimation(null);
            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
</body>

</html>