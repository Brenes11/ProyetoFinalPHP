<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    

    <title>Gestion motoristas</title>

    <script>
        
        function eliminar(codigo) {
            swal({
                    title: "¿Estas seguro?",
                    text: "Este registro se eliminará permanentemente",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        //codigo
                        $.ajax({
                            url: '../controller/motoristaController.php',
                            type: 'post',
                            data: {
                                key: 'eliminar',
                                codigo: codigo
                            }
                        }).done(function(resp) {
                            if (resp) {
                                swal("Eliminado con éxito", {
                                    icon: "success",
                                });
                                cargarTabla();
                                //cargarTablaEstados();
                            } else {
                                swal("No se pudo eliminar");
                            }
                        }).fail(function() {
                            swal("Err al cargar la tabla")
                        });
                    }
                });
        }

        function seleccionar(codigo, nombre, apellido, nit, dui, codCarro) {
            document.getElementById("txtNombre").value = nombre;
            document.getElementById("txtApellido").value = apellido;
            document.getElementById("txtNit").value = nit;
            document.getElementById("txtDui").value = dui;
            document.getElementById("selectCategoria").value = codCarro;
        }

        function cargarVehiculos() {

        }

        function cargarTabla() {
            $.ajax({
                url: '../controller/motoristaController.php',
                type: 'post',
                data: {
                    key: 'get'
                }
            }).done(function(response) {
                $("#tablahtml").empty();
                $("#tablahtml").append(response)
                // $("#tabla").DataTable({
                //     searching: true,
                //     language: {
                //         "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
                //         "lengthMenu": "Mostrar _MENU_ registros",
                //         "Search": "Buscar",
                //         "paginate": {
                //             "first": "Primero",
                //             "last": "Última",
                //             "next": "Siguiente",
                //             "previous": "Anterior"
                //         }
                //     },
                //     "order": [], //Initial no order.
                // });
            }).fail(function() {
                alert('error');
                //swal("Error de comunicación")
            })


        }
        $(document).ready(function() {
            cargarTabla();


            $.ajax({
                url: '../controller/motoristaController.php',
                type: 'post',
                data: {
                    key: 'selectCategoria'
                }
            }).done(function(response) {

                $("#selectCategoria").empty();
                $("#selectCategoria").append(response)
            }).fail({})
            $("#btnGuardar").on("click", function() {
                var formulario = $("#form1").serialize();
                $.ajax({
                    url: '../controller/motoristaController.php',
                    type: 'post',
                    data: {
                        key: 'insertar',
                        data: formulario
                    }
                }).done(function(resp) {
                    if (resp) {
                        swal(resp, {
                                icon: "success",
                            }),
                            cargarTabla();
                        $("#btnCerrarModal").click();
                    }
                }).fail(function() {
                    swal("Err al insertar")
                });
            })

            cargarVehiculos();

        })
    </script>
</head>

<body>
    <div id="tablahtml" class="container">
    </div>

    <button type="button" id="btnNuevo" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Nuevo
    </button>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Motorista</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="form1">
                    <div class="modal-body">
                        <input type="text" id="txtNombre" name="txtNombre" placeholder="Nombre" required class="form-control">
                        <input type="text" id="txtApellido" name="txtApellido" placeholder="Apellido" required class="form-control">
                        <input type="text" id="txtNit" name="txtNit" placeholder="NIT" required class="form-control">
                        <input type="text" id="txtDui" name="txtDui" placeholder="DUI" required class="form-control">
                        <select id="selectCategoria" name="selectCategoria" class="form-control">

                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="btnCerrarModal" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                        <input type="button" id="btnGuardar" name="btnGuardar" class="btn btn-primary btn-sm" value="Guardar">
                        <input type="button" id="btnEliminar" name="btnEliminar" class="btn btn-danger btn-sm" value="eliminar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>