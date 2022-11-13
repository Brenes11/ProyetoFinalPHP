<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>

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
                <div class="card" style="cursor: pointer;">
                    <img class="card-img-top" src="../img/vehicule.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Vehiculos</h5>
                    </div>
                </div>
                <div class="card" style="cursor: pointer;">
                    <img class="card-img-top" src="../img/volante.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Conductores</h5>
                    </div>
                </div>
                <div class="card" style="cursor: pointer;">
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
                <div class="card" style="cursor: pointer;">
                    <img class="card-img-top" src="../img/perfiles-de-usuario.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Usuarios</h5>
                    </div>
                </div>
                <div class="card" style="cursor: pointer;">
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