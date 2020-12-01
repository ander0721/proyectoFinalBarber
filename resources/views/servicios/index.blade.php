
@extends('administrador.masterpage')


@section('contenido')


    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.17/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.17/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('PR/css/style.css')}}">

    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body class="bg-dark">
 <div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="card mt-5">
         <div class="card-header">
            <div class="col-md-12">
            <h4 class="card-title">
            <h2>Lista de servicios</h2>
                 
                 <a class="btn btn-agregar btn-sm" id="createNewItem">Agregar
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="28" height="28" viewBox="0 0 172 172"
style=" fill:#fffffff;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,6.88c-43.65603,0 -79.12,35.46397 -79.12,79.12c0,43.65603 35.46397,79.12 79.12,79.12c43.65603,0 79.12,-35.46397 79.12,-79.12c0,-43.65603 -35.46397,-79.12 -79.12,-79.12zM86,13.76c39.93779,0 72.24,32.30221 72.24,72.24c0,39.93779 -32.30221,72.24 -72.24,72.24c-39.93779,0 -72.24,-32.30221 -72.24,-72.24c0,-39.93779 32.30221,-72.24 72.24,-72.24zM82.56,44.72v37.84h-37.84v6.88h37.84v37.84h6.88v-37.84h37.84v-6.88h-37.84v-37.84z"></path></g></g></svg>

</a>
                 </h4>
            </div>
         </div>
         <div class="card-body">
           <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre servicio</th>
                    <th>barberia</th>
                    @can('administrador')
                    <th width="2px">Acciones</th>
                    @endcan
                </tr>
                </thead>
                <tbody>

                @foreach ($servicio as $data)
        <tr>
            <td>{{ $data->idS }}</td>
            <td>{{ $data->nombreS }}</td>
            <td>{{ $data->barberias->flatten()->pluck('nombreB') }}</td>

        <td>
           <form action="{{ route('servicio.destroy', $data->idS) }}" method="POST">

           @can('administrador') 

                <a class="btn btn-primary" href="{{ route('servicio.edit',$data->idS) }}"><img src="https://img.icons8.com/ios/24/000000/edit.png" /></a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger"><img src="https://img.icons8.com/ios/24/000000/trash.png" /></button>
            @endcan
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
                           <input type="hidden" name="servicio_id" id="servicio_id">
                            <div class="form-group">
                                <h6>Nombre servicio</h6>
                                <div class="col-md-12">
                                <input id="nombreS" name="nombreS" type="text" placeholder="Ingrese el nombre del servicio" class="form-control input-md" value="" required="">
                                    </div>
<br>
                            <div class="form-group">
                              <h6>Precio</h6>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" id="precio" name="precio" placeholder="Ingrese precio del servicio" value="" required="" >
                                </div>
                            </div>

                            <h6>Barberia</h6>   
                     <select name="nombreB" class="form-control form-control-lg">
                        <option >Selecione barberia</option>
                        @foreach ($barberias as $barberia)
                        <option id="nombreB" value="{{$barberia->nombreB}}">{{$barberia->nombreB}}</option>  
                        @endforeach
                    </select>



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
        $('#saveBtn').val("Agregar servicio");
        $('#servicio_id').val('');
        $('#ItemForm').trigger("reset");
        $('#modelHeading').html("Agregar servicio");
        $('#ajaxModel').modal('show');
    });



    $('body').on('click', '.editItem', function () {

    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
      var servicio_id = $(this).data("id");
      $.get("{{ route('servicio.index') }}" +'/' + servicio_id +'/edit', function (data) {
          $('#modelHeading').html("Editar servicio");
          $('#saveBtn').val("edit-user");
          $('#ajaxModel').modal('show');
          $('#servicio_id').val(data.idS);
          $('#nombreS').val(data.nombreS);
          $('#precio').val(data.precio);
          $('#nombreB').val(data.nombreB);
      })



   });

    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Guardando...');

        $.ajax({
          data: $('#ItemForm').serialize(),
          url: "{{ route('servicio.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {

              $('#ItemForm').trigger("reset");
              $('#ajaxModel').modal('hide');
              table.draw();

          },
          error: function (data) {
              console.log('Error:', data);
          }
      });
    });



    $('body').on('click', '.deleteItem', function () {

        var servicio_id = $(this).data("id");
        confirm("¿Esta seguro de eliminar el servicio?");

        $.ajax({
            type: "DELETE",
            url: "{{ route('servicio.store') }}"+'/'+servicio_id,
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

