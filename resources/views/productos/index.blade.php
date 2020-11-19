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
                <h2>Lista de productos</h2>
                <a class="btn btn-agregar btn-sm" id="createNewItem">Agregar
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="28" height="28" viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,6.88c-43.65603,0 -79.12,35.46397 -79.12,79.12c0,43.65603 35.46397,79.12 79.12,79.12c43.65603,0 79.12,-35.46397 79.12,-79.12c0,-43.65603 -35.46397,-79.12 -79.12,-79.12zM86,13.76c39.93779,0 72.24,32.30221 72.24,72.24c0,39.93779 -32.30221,72.24 -72.24,72.24c-39.93779,0 -72.24,-32.30221 -72.24,-72.24c0,-39.93779 32.30221,-72.24 72.24,-72.24zM82.56,44.72v37.84h-37.84v6.88h37.84v37.84h6.88v-37.84h37.84v-6.88h-37.84v-37.84z"></path></g></g></svg>

</a>
                </h4>
            </div>
         </div>
         <div class="card-body">
           <table class="table table-bordered data-table">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th width="1px">Precio</th>
                    <th width="1px">Marca</th>
                    <th width="1px">barberia</th>
                    <th width="1px">Acciones</th>
                    </tr>
                </thead>


                 <tbody>

                @foreach ($data as $data)
        <tr>
            <td>{{ $data->idP }}</td>
            <td>{{ $data->nombreP }}</td>
            <td>{{ $data->precioP }}</td>
            <td>{{ $data->marca->nombreM }}</td>
            <td>{{ $data->barberias->flatten()->pluck('nombreB') }}</td>


        <td>
           <form action="{{ route('producto.destroy', $data->idP) }}" method="POST">


                <a class="btn btn-primary" href="{{ route('producto.edit',$data->idP) }}"><img src="https://img.icons8.com/ios/24/000000/edit.png" /></a>

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
                           <input type="hidden" name="producto_id" id="producto_id">

                                <div class="form-group">
                                <h6>Nombre producto</h6>
                                <div class="col-md-12">
                                <input id="nombreP" name="nombreP" type="text" placeholder="Ingrese el nombre del producto" class="form-control input-md">
                                    </div>
<br>
                            <div class="form-group">
                            <h6>Precio producto</h6>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="precioP" name="precioP" placeholder="Ingresar precio producto" value="" maxlength="50" required="">
                                </div>
                            </div>
                           

                            <h6>Nombre marca</h6>
                      <div class="col-md-12">
                        <input id="nombreM" name="nombreM" type="text" class="form-control @error('nombre') is-invalid @enderror" required autocomplete="nombre" placeholder="Ingrese la marca">
                      </div><br>

                      <h6>Nombre tipo producto</h6>
                                <div class="col-md-12">
                        <input id="nombreT" name="nombreT" type="text" placeholder="Ingrese el tipo de producto" class="form-control input-md">
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
        $('#saveBtn').val("Agregar producto");
        $('#producto_id').val('');
        $('#producto_id').val('');
        $('#ItemForm').trigger("reset");
        $('#modelHeading').html("Agregar producto");
        $('#ajaxModel').modal('show');
    });



    $('body').on('click', '.editItem', function () {

    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
      var producto_id = $(this).data("id");
      $.get("{{ route('producto.index') }}" +'/' + producto_id +'/edit', function (data) {
          $('#modelHeading').html("Editar producto");
          $('#saveBtn').val("edit-user");
          $('#ajaxModel').modal('show');
          $('#producto_id').val(data.idP);
          $('#nombreP').val(data.nombreP);
          $('#precioP').val(data.precioP);
          $('#nombreM').val(data.nombreM);
          $('#nombreT').val(data.nombreT);
          $('#nombreB').val(data.nombreB);


      })



   });

    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Guardando...');

        $.ajax({
          data: $('#ItemForm').serialize(),
          url: "{{ route('producto.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {

              $('#ItemForm').trigger("reset");
              $('#ajaxModel').modal('hide');
              window.location.replace("producto");

          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Guardando');
          }
      });
    });



    $('body').on('click', '.deleteItem', function () {

        var producto_id = $(this).data("id");
        confirm("¿Esta seguro de eliminar el producto? ");

        $.ajax({
            type: "DELETE",
            url: "{{ route('producto.store') }}"+'/'+producto_id,
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
