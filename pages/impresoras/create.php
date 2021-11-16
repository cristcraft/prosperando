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
                        <a class="nav-link" href="../../components/router.php?page=equipos">Equipos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../../components/router.php?page=tablets">Tablets</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../../components/router.php?page=impresoras">Impresoras</a>
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
        <form action="../../components/impresoras/saveForm.php" method="POST" id="form_create_impresoras" class="form" >

            <div class="mb-3">
                <label for="sucursal" class="form-label">Sucursal </label> <a href="../../components/addElements/addElements.php/?table=sucursales&accion=0"><i class="fas fa-plus-circle"></i></a>
                <select name="sucursal" id="sucursal" class="form-select">
                    <?php while($row = $sucursalesResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['nombre'] ?>"><?php echo $row['nombre'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="area" class="form-label">Area <a href="../../components/addElements/addElements.php/?table=areas_impresoras&accion=0"><i class="fas fa-plus-circle"></i></a></label>
                <select name="area" id="area" class="form-select">
                    <?php while($row = $areas_impresorasResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['area'] ?>"><?php echo $row['area'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="tipo_impresoras" class="form-label">Tipo de impresora <a href="../../components/addElements/addElements.php/?table=tipo_impresoras&accion=0"  ><i class="fas fa-plus-circle"></i></a></label>
                <select name="tipo_impresoras" id="tipo_impresoras" class="form-control">
                    <?php while($row = $tipo_impresorasResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['impresora'] ?>"><?php echo $row['impresora'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="marcas_impresoras" class="form-label">Marca <a href="../../components/addElements/addElements.php/?table=marcas_impresoras&accion=0"  ><i class="fas fa-plus-circle"></i></a></label>
                <select name="marcas_impresoras" id="marcas_impresoras" class="form-control">
                    <?php while($row = $marcas_impresorasResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['marca'] ?>"><?php echo $row['marca'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="tipo_papel" class="form-label">Tipo de papel <a href="../../components/addElements/addElements.php/?table=tipo_papel&accion=0"  ><i class="fas fa-plus-circle"></i></a></label>
                <select name="tipo_papel" id="tipo_papel" class="form-control">
                    <?php while($row = $tipo_papelResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['tipo_papel'] ?>"><?php echo $row['tipo_papel'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="modelo" class="form-label">modelo</label>
                <input required type="text" name="modelo" id="modelo" placeholder="modelo" class="form-control">
            </div>

            <div class="mb-3">
                <label for="serial" class="form-label">Serial</label>
                <input required type="text" name="serial" id="serial" placeholder="serial" class="form-control">
            </div>

            <div class="mb-3">
                <label for="ip" class="form-label">Ip</label>
                <input type="text" name="ip" id="ip" placeholder="ip" class="form-control">
            </div>

            <div class="mb-3">
                <label for="mac" class="form-label">MAC</label>
                <input type="text" name="mac" id="mac" placeholder="mac" class="form-control">
            </div>

            <div class="mb-3">
                <label for="nombre_host" class="form-label">Nombre host</label>
                <input required type="text" name="nombre_host" id="nombre_host" placeholder="nombre_host" class="form-control">
            </div>

            <div class="mb-3">
                <label for="novedades" class="form-label">Novedades</label>
                <input type="text" name="novedades" id="novedades" placeholder="novedades" class="form-control">
            </div>
            
            <div class="mb-3 d-flex justify-content-around align-items-center">
                <button class="btn btn-primary text-white" type="submit" onclick="change()">Guardar</button>
                <a href="../../pages/impresoras/impresoras.php" class="btn btn-secondary">Cancelar</a>
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