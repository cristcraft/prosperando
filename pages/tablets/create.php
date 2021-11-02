<?php 
//Requiere el inicio de sesion
session_start();

if(!isset($_SESSION['user_logeado'])){
    echo '
            <script>
                alert("No has iniciado sesión")
                window.location.href = "../../index.php"
            </script>
        ';
        session_destroy();
        die();
}
    require_once("../../connection/connection.php");

    //importa la conexion con todas las subtablas
    require_once("../../tables/tables.php");
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Crear</title>
</head>

<body id="body">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../components/router.php?page=dashboard">DashBoard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex">
                    <button class="btn me-3 btn-outline-dark" id="btn-oscuro" onclick="onModoOscuro()"  title="Modo oscuro"><i class="fas fa-sun"></i></button>

                    <a href="../../components/router.php?page=logout" class="btn btn-outline-dark" id="btn-salir" title="Salir"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid d-flex justify-content-center align-items-center" id="form-content ">
        <form action="../../components/tablets/saveForm.php" method="POST" id="form_create_tablets" class="form" >

            <div class="mb-3">
                <label for="sucursal" class="form-label">Sucursal </label> <a href="../../components/addElements/addElements.php/?table=sucursales&accion=0"><i class="fas fa-plus-circle"></i></a>
                <select name="sucursal" id="sucursal" class="form-select">
                    <?php while($row = $sucursalesResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['nombre'] ?>"><?php echo $row['nombre'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="area" class="form-label">Area <a href="../../components/addElements/addElements.php/?table=areas_tablets&accion=0"><i class="fas fa-plus-circle"></i></a></label>
                <select name="area" id="area" class="form-select">
                    <?php while($row = $areas_tabletsResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['area'] ?>"><?php echo $row['area'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="marcas" class="form-label">Marca <a href="../../components/addElements/addElements.php/?table=marcas_tablets&accion=0"  ><i class="fas fa-plus-circle"></i></a></label>
                <select name="marcas" id="marcas" class="form-control">
                    <?php while($row = $marcas_tabletsResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['marcas'] ?>"><?php echo $row['marcas'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="procesadores_tablets" class="form-label">Procesador <a href="../../components/addElements/addElements.php/?table=procesadores_tablets&accion=0"  ><i class="fas fa-plus-circle"></i></a></label>
                <select name="procesadores_tablets" id="procesadores_tablets" class="form-control">
                    <?php while($row = $procesadores_tabletsResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['procesador'] ?>"><?php echo $row['procesador'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="resolucion_tablets" class="form-label">Resolucion <a href="../../components/addElements/addElements.php/?table=resolucion_tablets&accion=0"  ><i class="fas fa-plus-circle"></i></a></label>
                <select name="resolucion_tablets" id="resolucion_tablets" class="form-control">
                    <?php while($row = $resolucion_tabletsResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['resolucion'] ?>"><?php echo $row['resolucion'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="os_version" class="form-label">Version de android <a href="../../components/addElements/addElements.php/?table=os_tablets&accion=0"  ><i class="fas fa-plus-circle"></i></a></label>
                <select name="os_version" id="os_version" class="form-control">
                    <?php while($row = $os_versionResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['os'] ?>"><?php echo $row['os'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="funcionario_responsable" class="form-label">funcionario Responsable</label>
                <input type="text" name="funcionario_responsable" id="funcionario_responsable" placeholder="funcionario responsable" class="form-control">
            </div>

            <div class="mb-3">
                <label for="novedades" class="form-label">Novedades</label>
                <input type="text" name="novedades" id="novedades" placeholder="Novedades" class="form-control">
            </div>

            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" name="modelo" id="modelo" placeholder="Modelo" class="form-control">
            </div>

            <div class="mb-3">
                <label for="nucleos" class="form-label">Nucleos</label>
                <input type="number" name="nucleos" id="nucleos" placeholder="nucleos" class="form-control">
            </div>

            <div class="mb-3">
                <label for="ram" class="form-label">Ram</label>
                <input type="number" name="ram" id="ram" placeholder="Ram" class="form-control">
            </div>

            <div class="mb-3">
                <label for="serial" class="form-label">Serial</label>
                <input type="text" name="serial" id="serial" placeholder="Serial" class="form-control">
            </div>

            <div class="mb-3">
                <label for="imei" class="form-label">Imei</label>
                <input type="text" name="imei" id="imei" placeholder="imei" class="form-control">
            </div>

            <div class="mb-3">
                <label for="bateria" class="form-label">Bateria</label>
                <input type="number" name="bateria" id="bateria" placeholder="Bateria" class="form-control">
            </div>

            <div class="mb-3">
                <label for="rom" class="form-label">Rom</label>
                <input type="number" name="rom" id="rom" placeholder="Rom" class="form-control">
            </div>

            <div class="mb-3">
                <label for="camara_frontal" class="form-label">Camara frontal</label>
                <input type="text" name="camara_frontal" id="camara_frontal" placeholder="camara frontal" class="form-control">
            </div>

            <div class="mb-3">
                <label for="camara_trasera" class="form-label">Camara trasera</label>
                <input type="text" name="camara_trasera" id="camara_trasera" placeholder="camara trasera" class="form-control">
            </div>


            <div class="mb-3 d-flex justify-content-around align-items-center">
                <button class="btn btn-primary text-white" type="submit" onclick="change()">Guardar</button>
                <a href="../../pages/equipos.php" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
        crossorigin="anonymous"></script>
    
    <script src="../../scripts/modoOscuro.js"></script>
    <script src="../../scripts//popOvers.js"></script>

</body>

</html>