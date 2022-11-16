<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles.css" />
  <title>Rutas</title>
</head>
<script>
  $(document).ready(function() {
            //cargarTabla();


            $.ajax({
                url: '../controller/rutasController.php',
                type: 'post',
                data: {
                    key: 'selectCategoria'
                }
            }).done(function(response) {
                $("#selectCategoria").empty();
                $("#selectCategoria").append(response)
            }).fail({})
            // $("#btnGuardar").on("click", function() {
            //     var formulario = $("#form1").serialize();
            //     $.ajax({
            //         url: '../controller/motoristaController.php',
            //         type: 'post',
            //         data: {
            //             key: 'insertar',
            //             data: formulario
            //         }
            //     }).done(function(resp) {
            //         if (resp) {
            //             swal(resp, {
            //                     icon: "success",
            //                 }),
            //                 cargarTabla();
            //             $("#btnCerrarModal").click();
            //         }
            //     }).fail(function() {
            //         swal("Err al insertar")
            //     });
            // })

            // cargarVehiculos();

        })
</script>
<body>
  <div class="accordion" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
          Nueva ruta
        </button>
      </h2>
      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
        <div class="accordion-body">
          <div class="container">
            <form action="" id="form1">
              <label for="" class="form-label">Desde</label>
              <select name="" id="" class="form-control">
                <option value="Miguel">San Miguel</option>
                <option value="Morazán">Morazán</option>
                <option value="La Unión">La Unión</option>
                <option value="Usulután">Usulután</option>
              </select>

              <label for="" class="form-label">Hasta</label>
              <select name="" id="" class="form-control">
                <option value="Miguel">San Miguel</option>
                <option value="Morazán">Morazán</option>
                <option value="La Unión">La Unión</option>
                <option value="Usulután">Usulután</option>
              </select>
              <input type="date" class="form-control" name="txtFecha" id="txtFecha">
              <select id="selectCategoria" name="selectCategoria" class="form-control">

              </select>

            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
          Detalle de rutas
        </button>
      </h2>
      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
        <div class="accordion-body">
        </div>
      </div>
    </div>
  </div>
</body>

<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</html>