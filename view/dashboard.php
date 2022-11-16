<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<script>
    function loadRutas() {
        location.href = "rutas.php";
    }
    function loadMotoristas(){
        location.href = "motoristas.php";
    }
    function loadUsuario(){
        location.href = "usuario.php";
    }
    function loadVehiculo(){
        location.href = "vehiculo.php";
    }
    function loadCliente(){
        location.href = "Cliente.php";
    }
    function loadRutas(){
        location.href = "rutas.php";
    }
</script>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
                <!-- Left links -->
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <!-- Navbar dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="#">Action</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Another action</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>

    <br>
    <div class="container" style="max-width: 850px;">
        <div class="row">
            <div class="card-deck">
                <div class="card" style="cursor: pointer;" onclick="loadVehiculo()">
                    <img class="card-img-top" src="../img/vehicule.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Vehiculos</h5>
                    </div>
                </div>
                <div class="card" style="cursor: pointer;" onclick="loadMotoristas()">
                    <img class="card-img-top" src="../img/volante.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Conductores</h5>
                    </div>
                </div>
                <div class="card" style="cursor: pointer;" onclick="loadCliente()">
                    <img class="card-img-top" src="../img/cliente.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Clientes</h5>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="card-deck">
                <div class="card" style="cursor: pointer;" onclick="loadUsuario()">
                    <img class="card-img-top" src="../img/perfiles-de-usuario.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Usuarios</h5>
                    </div>
                </div>
                <div class="card" style="cursor: pointer;" onclick="loadRutas()" href="rutas.php">
                    <img class="card-img-top" src="../img/nueva_ruta.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Rutas</h5>
                    </div>
                </div>
                <div class="card" style="cursor: pointer;">
                    <img class="card-img-top" src="../img/analitica.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Reportes</h5>
                    </div>
                </div>
            </div>
        </div>


    </div>
</body>

</html>