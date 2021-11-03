<?php 
    session_start();

    if(!isset($_SESSION['user_logeado'])){
        echo '
                <script>
                    alert("No has iniciado sesión")
                    window.location.href = "../index.php"
                </script>
            ';
            session_destroy();
            die();
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#9d4edd">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/cards.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../styles/styles.css">
    
    <title>Dashboard Eqipos</title>
</head>

<body id="body" class="bg-light">
    <div class="mensajeBienvenida" id="mensajeBienvenida">
        <div class="card card-bienvenida">
            <div class="card-body">
                <h1 class="card-text">Bienvenido al Dashboard de las hojas de vidas de los equipos!</h1>
                <button class="btn btn-danger" onclick="ocultar()">Cerrar</button>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="../components/router.php?page=dashboard">DashBoard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../components/router.php?page=equipos">Equipos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../components/router.php?page=tablets">Tablets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../components/router.php?page=impresoras">Impresoras</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button class="btn me-3 btn-outline-dark" id="btn-oscuro" onclick="onModoOscuro()"  title="Modo oscuro"><i class="fas fa-sun"></i></button>

                    <a href="../components/router.php?page=logout" class="btn btn-outline-dark" id="btn-salir" title="Salir"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid m-0 p-0">


        <div class="contenedor-cards d-flex flex-wrap justify-content-between">
            <div class="card text-center m-4">
                <h4 class="card-title opcionesTitle p-3">Equipos</h4>
                <div class="card-body opcionesTxt">
                    <p class="card-text text-justify">Aqui encontraras toda la hoja de vida y modficaciones que se le han realizado a los computadores de todas las sedes</p>
                    <a class="btn btn-info" href="./equipos/equipos.php">Ver mas</a>
                </div>
            </div>
            
            <div class="card text-center m-4">
                <h4 class="card-title opcionesTitle p-3">Tablets</h4>
                <div class="card-body opcionesTxt">
                    <p class="card-text text-justify">Aqui encontraras toda la hoja de vida y modficaciones que se le han realizado a las Tablets de todas las sedes</p>
                    <a class="btn btn-info" href="./tablets/tablets.php">Ver mas</a>
                </div>
            </div>
            
            <div class="card text-center m-4">
                <h4 class="card-title opcionesTitle p-3">Impresoras</h4>
                <div class="card-body opcionesTxt">
                    <p class="card-text text-justify">Aqui encontraras toda la hoja de vida y modficaciones que se le han realizado a las Impresoras de todas las sedes</p>
                    <a class="btn btn-info" href="">Ver mas</a>
                </div>
            </div>

            <div class="card text-center m-4">
                <h4 class="card-title opcionesTitle p-3">Switches</h4>
                <div class="card-body opcionesTxt">
                    <p class="card-text text-justify">Aqui encontraras toda la hoja de vida y modficaciones que se le han realizado a los Switches de todas las sedes</p>
                    <a class="btn btn-info" href="">Ver mas</a>
                </div>
            </div>

            <div class="card text-center m-4">
                <h4 class="card-title opcionesTitle p-3">Servidores</h4>
                <div class="card-body opcionesTxt">
                    <p class="card-text text-justify">Aqui encontraras toda la hoja de vida y modficaciones que se le han realizado a los Servidores de todas las sedes</p>
                    <a class="btn btn-info" href="">Ver mas</a>
                </div>
            </div>

            <div class="card text-center m-4">
                <h4 class="card-title opcionesTitle p-3">Equipos</h4>
                <div class="card-body opcionesTxt">
                    <p class="card-text text-justify">Aqui encontraras toda la hoja de vida y modficaciones que se le han realizado a los computadores de todas las sedes</p>
                    <a class="btn btn-info" href="">Ver mas</a>
                </div>
            </div>

            <div class="card text-center m-4">
                <h4 class="card-title opcionesTitle p-3">Equipos</h4>
                <div class="card-body opcionesTxt">
                    <p class="card-text text-justify">Aqui encontraras toda la hoja de vida y modficaciones que se le han realizado a los computadores de todas las sedes</p>
                    <a class="btn btn-info" href="">Ver mas</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <script src="../scripts/main.js"></script>
    <script src="../scripts/modoOscuro.js"></script>
    
</body>

</html>