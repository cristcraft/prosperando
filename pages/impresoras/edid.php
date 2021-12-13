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

    $id = $_GET['id'];
    $sql = "SELECT * FROM impresoras WHERE id='$id'";
    $result = $connection->query($sql);
    
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../../styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Editar</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="../../components/router.php?page=switches">Switches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../components/router.php?page=servidores">Servidores</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mantenimientos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="../../components/router.php?page=equiposMante">Equipos</a></li>
                            <li><a class="dropdown-item" href="../../components/router.php?page=impresorasMante">Impresoras</a></li>
                            <li><a class="dropdown-item" href="../../components/router.php?page=servidoresMante">Servidores</a></li>
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
        <form action="../../../components/impresoras/edidForm.php" method="POST" id="form_edit_impresoras" class="form" >
            <?php while($row = $result -> fetch_assoc()){ ?>
                <input id="id" name="id" value="<?php echo $row['id'] ?>" hidden >

                <div class="mb-3">
                    <label for="sucursal" class="form-label">Sucursal</label>
                    <select name="sucursal" id="sucursal" class="form-select">
                            <?php
                                while($row2 =$sucursalesResult -> fetch_assoc()){
                                    if($row['sucursal'] === $row2['nombre']){
                                        $select = 'selected';
                                    }else{
                                        $select = '';
                                    }
                            ?>
                                <option value="<?php echo $row2['nombre'] ?>" <?php echo $select ?>><?php echo $row2['nombre'] ?></option>
                            <?php
                                }
                            ?>
                            
                    </select>
                </div>

                <div class="mb-3">
                    <label for="area" class="form-label">Area</label>
                    <select name="area" id="area" class="form-select">
                    <?php
                        while($row2 = $areas_impresorasResult -> fetch_assoc()){
                            if($row['area'] === $row2['area']){
                                $select = 'selected';
                            }else{
                                $select = '';
                            }
                    ?>
                        <option value="<?php echo $row2['area'] ?>" <?php echo $select ?>><?php echo $row2['area'] ?></option>
                    <?php
                        }
                    ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tipo_impresoras" class="form-label">Tipo impresora</label>
                    <select name="tipo_impresoras" id="tipo_impresoras" class="form-control">
                        <?php
                            while($row2 =$tipo_impresorasResult -> fetch_assoc()){
                                if($row['tipo'] === $row2['impresora']){
                                    $select = 'selected';
                                }else{
                                    $select = '';
                                }
                        ?>
                            <option value="<?php echo $row2['impresora'] ?>" <?php echo $select ?>><?php echo $row2['impresora'] ?></option>
                        <?php
                            }
                        ?>
                        </select>
                </div>

                <div class="mb-3">
                    <label for="marcas_impresoras" class="form-label">Marca</label>
                    <select name="marcas_impresoras" id="marcas_impresoras" class="form-control">
                        <?php
                            while($row2 =$marcas_impresorasResult -> fetch_assoc()){
                                if($row['marca_impresoras'] === $row2['marca_impresoras']){
                                    $select = 'selected';
                                }else{
                                    $select = '';
                                }
                        ?>
                            <option value="<?php echo $row2['marca'] ?>" <?php echo $select ?>><?php echo $row2['marca'] ?></option>
                        <?php
                            }
                        ?>
                        </select>
                </div>

                <div class="mb-3">
                    <label for="tipo_papel" class="form-label">Tipo papel</label>
                    <select name="tipo_papel" id="tipo_papel" class="form-control">
                        <?php
                            while($row2 =$tipo_papelResult -> fetch_assoc()){
                                if($row['tipo_papel'] === $row2['tipo_papel']){
                                    $select = 'selected';
                                }else{
                                    $select = '';
                                }
                        ?>
                            <option value="<?php echo $row2['tipo_papel'] ?>" <?php echo $select ?>><?php echo $row2['tipo_papel'] ?></option>
                        <?php
                            }
                        ?>
                        </select>
                </div>
                            
                <div class="mb-3">
                    <label for="modelo" class="form-label">Modelo</label>
                    <input type="text" name="modelo" id="modelo" placeholder="Modelo" class="form-control" value="<?php echo $row['modelo'] ?>">
                </div>

                <div class="mb-3">
                    <label for="serial" class="form-label">Serial</label>
                    <input type="text" name="serial" id="serial" placeholder="Serial" class="form-control" value="<?php echo $row['serial'] ?>">
                </div>

                <div class="mb-3">
                    <label for="ip" class="form-label">Ip</label>
                    <input type="text" name="ip" id="ip" placeholder="Ip" class="form-control" value="<?php echo $row['ip'] ?>">
                </div>

                <div class="mb-3">
                    <label for="mac" class="form-label">MAC</label>
                    <input type="text" name="mac" id="mac" placeholder="mac" class="form-control" value="<?php echo $row['mac'] ?>">
                </div>

                <div class="mb-3">
                    <label for="nombre_host" class="form-label">Nombre host</label>
                    <input type="text" name="nombre_host" id="nombre_host" placeholder="nombre_host" class="form-control" value="<?php echo $row['nombre_host'] ?>">
                </div>

                <div class="mb-3">
                    <label for="novedades" class="form-label">Novedades</label>
                    <input type="text" name="novedades" id="novedades" placeholder="Novedades" class="form-control" value="<?php echo $row['novedades'] ?>">
                </div>

            <?php } ?>

            <div class="mb-3 d-flex justify-content-around align-items-center">
                <button class="btn btn-primary text-white" type="submit" onclick="change()">Guardar</button>
                <a href="../../../pages/impresoras/impresoras.php" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
        crossorigin="anonymous"></script>
    
    <script src="../../../scripts/modoOscuro.js"></script>
    <script src="../../../scripts/popOvers.js"></script>

</body>
</html>