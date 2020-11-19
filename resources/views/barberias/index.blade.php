@extends('administrador.masterpage')


@section('contenido')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.17/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('PR/css/style.css')}}">
    
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.17/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
    

    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body class="bg-white">
 <div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="card mt-5">
         <div class="card-header">
            <div class="col-md-12">
                <h4 class="card-title">
                    
                <h2>Lista de barberias</h2>
                  <a class="btn btn-agregar btn-sm" id="createNewItem">Agregar
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="28" height="28" viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,6.88c-43.65603,0 -79.12,35.46397 -79.12,79.12c0,43.65603 35.46397,79.12 79.12,79.12c43.65603,0 79.12,-35.46397 79.12,-79.12c0,-43.65603 -35.46397,-79.12 -79.12,-79.12zM86,13.76c39.93779,0 72.24,32.30221 72.24,72.24c0,39.93779 -32.30221,72.24 -72.24,72.24c-39.93779,0 -72.24,-32.30221 -72.24,-72.24c0,-39.93779 32.30221,-72.24 72.24,-72.24zM82.56,44.72v37.84h-37.84v6.88h37.84v37.84h6.88v-37.84h37.84v-6.88h-37.84v-37.84z"></path></g></g></svg>

</a>
                </h4>

            </div>
         </div>
         <div class="card-body">
           <table class="table table-hover">
                <thead>
                    <tr>
                    <th class="table-danger">ID</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Propietario</th>
                    <th>Teléfono</th>
                    <th>Horario</th>
                    <th>servicio</th>
                    <th width="1px">Acciones</th>
                    </tr>
                </thead>


                <tbody>

                @foreach ($barberia as $barberia)
        <tr>
            <td>{{ $barberia->idB }}</td>
            <td>{{ $barberia->nombreB }}</td>
            <td>{{ $barberia->direccion }}</td>
            <td>{{ $barberia->propietario }}</td>
            <td>{{ $barberia->telefono }}</td>
            <td>{{ $barberia->horario }}</td>
            <td>{{ $barberia->servicios->flatten()->pluck('nombreS')}}</td>


        <td>
           <form action="{{ route('barberias.destroy', $barberia->idB) }}" method="POST">


                <a class="btn btn-primary" href="{{ route('barberias.edit',$barberia->idB) }}"><img src="https://img.icons8.com/ios/24/000000/edit.png" /></a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger"><img src="https://img.icons8.com/ios/24/000000/trash.png" /></button>
            </form> 
        </td>
    </tr>
    @endforeach
                </tbody>
            </table>
        </div>
        <div class="modal fade" id="ajaxModel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modelHeading"></h4>
                    </div>
                    <div class="modal-body">
                        <form id="ItemForm" name="ItemForm" class="form-horizontal">
                           <input type="hidden" name="barberia_id" id="barberia_id">
                            <div class="cf-container">
                                <div class="cf-col-6">
                                    <h6>Nombre barbería</h6>
                                    <input type="text" class="form-control" id="nombreB" name="nombreB" placeholder="Ingrese nombre de la barberia" value="" maxlength="50" required="">
                               
                                </div>
                                <div class="cf-col-6">
                                <h6>Latitud barbeía</h6>
                                    <input type="number" class="form-control" id="latitud" name="latitud" placeholder="Ingrese latitud de barberia" value="" maxlength="50" required="">
                                </div>

                                <div class="cf-col-6"><br>
                                    <h6>Longitud barberia</h6>
                                    <input type="number" class="form-control" id="longitud" name="longitud" placeholder="Ingrese longitud de la barberia" value="" maxlength="50" required="">
                                </div>

                                <div class="cf-col-6"><br>
                                    <h6>Dirección barbería</h6>
                                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese dirrección de barberia" value="" maxlength="50" required="">
                                </div>

                                <div class="cf-col-6"><br>
                                    <h6>Nombre propietario</h6>
                                    <input type="text" class="form-control" id="propietario" name="propietario" placeholder="Ingrese nombre del propietario" value="" maxlength="50" required="">
                                </div>

                                <div class="cf-col-6"><br>
                                    <h6>Teléfono barbería</h6>
                                    <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Ingrese número de teléfono" value="" maxlength="50" required="">
                                </div>

                                <div class="cf-col-6"><br>
                                    <h6>Horario barbería</h6>
                                    <input type="text" class="form-control" id="horario" name="horario" placeholder="Ingrese horario barberia" value="" maxlength="50" required="">
                                </div>

                            </div>

                            <div class="col-sm-offset-2 col-sm-10">
                             <button type="submit" class="btn btn-guardar btn-sm" id="saveBtn" value="create">Guardar
                             </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</body>

<script type="text/javascript">


  $(function () {

    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });

   

    $('#createNewItem').click(function () {
        $('#saveBtn').val("Crear barberia");
        $('#barberia_id').val('');
        $('#ItemForm').trigger("reset");
        $('#modelHeading').html("Crear barberia");
        $('#ajaxModel').modal('show');
    });



    $('body').on('click', '.editItem', function () {

    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
      var barberia_id = $(this).data("id");
      $.get("{{ route('barberias.index') }}" +'/' + barberia_id +'/edit', function (data) {
          $('#modelHeading').html("Editar Barberia");
          $('#saveBtn').val("edit-user");
          $('#ajaxModel').modal('show');
          $('#barberia_id').val(data.idB);
          $('#nombreB').val(data.nombreB);
          $('#latitud').val(data.latitud);
          $('#longitud').val(data.longitud);
          $('#direccion').val(data.direccion);
          $('#propietario').val(data.propietario);
          $('#telefono').val(data.telefono);
          $('#horario').val(data.horario);
      })



   });

    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Enviando...');

        $.ajax({
          data: $('#ItemForm').serialize(),
          url: "{{ route('barberias.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
            e.preventDefault()

              $('#ItemForm').trigger("reset");
              $('#ajaxModel').modal('hide');
             window.location.replace("barberias");
              

          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Guardando');
          }
      });
    });



    $('body').on('click', '.deleteItem', function () {

        var barberia_id = $(this).data("id");
        confirm("¿Esta seguro de eliminar la barberia?");

        $.ajax({
            type: "DELETE",
            url: "{{ route('barberias.store') }}"+'/'+barberia_id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

  });
</script>
@endsection
