<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />
    <title>DataTables</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="main.css">


    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css" />
    <!--datables estilo bootstrap 4 CSS-->
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <header>
        <h3 class='text-center'></h3>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <button id="btnNuevo" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>
            </div>
        </div>
    </div>
    <br>

    <div class="container caja">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="tablaUsuarios" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>id</th>
                                <th>marca</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--Modal para CRUD-->
    <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formUsuarios">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">nombre marca:</label>
                                    <input type="text" class="form-control" id="nombreM">
                                    <input type="hidden" class="form-control" id="idM">

                                </div>
                            </div>
                           
                        </div>
                      
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                        <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {

            tablaUsuarios = $('#tablaUsuarios').DataTable({
                ajax: {
                    url: "{{ url('barberias.index')}}",
                    method: 'POST', //usamos el metodo POST
                    data: {

                    }, 
                    "dataSrc": ""
                },
                columns: [{
                        " data": "idM"
                    },
                    {
                        "data": "nombreM"
                    },

                    {
                        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEditar'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>"
                    }
                ]
            });

            var fila; //captura la fila, para editar o eliminar
            //submit para el Alta y Actualización
            $('#formUsuarios').submit(function(e) {
                e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
                nombreM = $.trim($('#nombreM').val());
                idM = $.trim($('#idM').val());

                $.ajax({
                    url: "{{ url['barberia.index']}}",
                    type: "POST",
                    datatype: "json",
                    data: {
                        idM: idM,
                        nombreM: nombreM,
                    },
                    success: function(data) {
                        tablaUsuarios.ajax.reload(null, false);
                    }
                });
                $('#modalCRUD').modal('hide');
            });



            //para limpiar los campos antes de dar de Alta una Persona
            $("#btnNuevo").click(function() {
                idM = null;
                $("#formUsuarios").trigger("reset");
                $(".modal-header").css("background-color", "#17a2b8");
                $(".modal-header").css("color", "white");
                $(".modal-title").text("Alta de Usuario");
                $('#modalCRUD').modal('show');
            });

            //Editar        
            $(document).on("click", ".btnEditar", function() {

                fila = $(this).closest("tr");
                idM = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
                nombreM = fila.find('td:eq(1)').text();
                $("#nombreM").val(nombreM);
                $(".modal-header").css("background-color", "#007bff");
                $(".modal-header").css("color", "white");
                $(".modal-title").text("Editar Usuario");
                $('#modalCRUD').modal('show');
            });

            //Borrar
            $(document).on("click", ".btnBorrar", function() {
                fila = $(this);
                idM = parseInt($(this).closest('tr').find('td:eq(0)').text());
                opcion = route('barberias.destroy'); //eliminar        
                var respuesta = confirm("¿Está seguro de borrar el registro " + idM + "?");
                if (respuesta) {
                    $.ajax({
                        url: "url('barberia.destroy')",
                        type: "POST",
                        datatype: "json",
                        data: {
                            opcion: opcion,
                            idM: idM
                        },
                        success: function() {
                            tablaUsuarios.row(fila.parents('tr')).remove().draw();
                        }
                    });
                }
            });

        });
    </script>

    <!-- datatables JS -->
    <script type="text/javascript" src="assets/datatables/datatables.min.js"></script>

    <script type="text/javascript" src="main.js"></script>


</body>

</html>