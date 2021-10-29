<?php 
    require_once("../../connection/connection.php");

    //importa la conexion con todas las subtablas
    require_once("../../tables/tables.php");

    $id = $_GET['id'];
    $sql = "SELECT * FROM tablets WHERE id='$id'";
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
            <a class="navbar-brand" href="../../../components/router.php?page=dashboard">DashBoard</a>
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
                    <button class="btn btn-outline-dark" id="btn-oscuro" onclick="onModoOscuro()"><i class="fas fa-sun"></i></button>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid d-flex justify-content-center align-items-center" id="form-content ">
        <form action="../../../components/tablets/edidForm.php" method="POST" id="form" >
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
                        while($row2 = $areas_tabletsResult -> fetch_assoc()){
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
                    <label for="marcas" class="form-label">Marca</label>
                    <select name="marcas" id="marcas" class="form-control">
                        <?php
                            while($row2 =$marcas_tabletsResult -> fetch_assoc()){
                                if($row['marca'] === $row2['marcas']){
                                    $select = 'selected';
                                }else{
                                    $select = '';
                                }
                        ?>
                            <option value="<?php echo $row2['marcas'] ?>" <?php echo $select ?>><?php echo $row2['marcas'] ?></option>
                        <?php
                            }
                        ?>
                        </select>
                </div>

                <div class="mb-3">
                    <label for="procesadores_tablets" class="form-label">Procesador</label>
                    <select name="procesadores_tablets" id="procesadores_tablets" class="form-control">
                        <?php
                            while($row2 =$procesadores_tabletsResult -> fetch_assoc()){
                                if($row['procesador'] === $row2['procesador']){
                                    $select = 'selected';
                                }else{
                                    $select = '';
                                }
                        ?>
                            <option value="<?php echo $row2['procesador'] ?>" <?php echo $select ?>><?php echo $row2['procesador'] ?></option>
                        <?php
                            }
                        ?>
                        </select>
                </div>

                <div class="mb-3">
                    <label for="resolucion_tablets" class="form-label">Resolucion</label>
                    <select name="resolucion_tablets" id="resolucion_tablets" class="form-control">
                        <?php
                            while($row2 =$resolucion_tabletsResult -> fetch_assoc()){
                                if($row['resolucion'] === $row2['resolucion']){
                                    $select = 'selected';
                                }else{
                                    $select = '';
                                }
                        ?>
                            <option value="<?php echo $row2['resolucion'] ?>" <?php echo $select ?>><?php echo $row2['resolucion'] ?></option>
                        <?php
                            }
                        ?>
                        </select>
                </div>

                <div class="mb-3">
                    <label for="os_version" class="form-label">Version de android</label>
                    <select name="os_version" id="os_version" class="form-control">
                        <?php
                            while($row2 =$os_versionResult -> fetch_assoc()){
                                if($row['os'] === $row2['os']){
                                    $select = 'selected';
                                }else{
                                    $select = '';
                                }
                        ?>
                            <option value="<?php echo $row2['os'] ?>" <?php echo $select ?>><?php echo $row2['os'] ?></option>
                        <?php
                            }
                        ?>
                        </select>
                </div>
            
                <div class="mb-3">
                    <label for="funcionario_responsable" class="form-label">funcionario Responsable</label>
                    <input type="text" name="funcionario_responsable" id="funcionario_responsable" placeholder="funcionario responsable" class="form-control" value="<?php echo $row['funcionario_responsable'] ?>">
                </div>

                <div class="mb-3">
                    <label for="novedades" class="form-label">Novedades</label>
                    <input type="text" name="novedades" id="novedades" placeholder="Novedades" class="form-control" value="<?php echo $row['novedades'] ?>">
                </div>

                <div class="mb-3">
                    <label for="modelo" class="form-label">Modelo</label>
                    <input type="text" name="modelo" id="modelo" placeholder="Modelo" class="form-control" value="<?php echo $row['modelo'] ?>">
                </div>

                <div class="mb-3">
                    <label for="nucleos" class="form-label">nucleos</label>
                    <input type="number" name="nucleos" id="nucleos" placeholder="nucleos" class="form-control" value="<?php echo $row['nucleos'] ?>">
                </div>

                <div class="mb-3">
                    <label for="ram" class="form-label">Ram</label>
                    <input type="text" name="ram" id="ram" placeholder="ram" class="form-control" value="<?php echo $row['ram'] ?>">
                </div>

                <div class="mb-3">
                    <label for="serial" class="form-label">Serial</label>
                    <input type="text" name="serial" id="serial" placeholder="Serial" class="form-control" value="<?php echo $row['serial'] ?>">
                </div>

                <div class="mb-3">
                    <label for="imei" class="form-label">Imei</label>
                    <input type="number" name="imei" id="imei" placeholder="Imei" class="form-control" value="<?php echo $row['imei'] ?>">
                </div>

                <div class="mb-3">
                    <label for="bateria" class="form-label">Bateria</label>
                    <input type="number" name="bateria" id="bateria" placeholder="Bateria" class="form-control" value="<?php echo $row['bateria'] ?>">
                </div>

                <div class="mb-3">
                    <label for="rom" class="form-label">Rom</label>
                    <input type="text" name="rom" id="rom" placeholder="Rom" class="form-control" value="<?php echo $row['rom'] ?>">
                </div>

                <div class="mb-3">
                    <label for="camara_frontal" class="form-label">Camara frontal</label>
                    <input type="text" name="camara_frontal" id="camara_frontal" placeholder="Camara frontal" class="form-control" value="<?php echo $row['camara_frontal'] ?>">
                </div>

                <div class="mb-3">
                    <label for="camara_trasera" class="form-label">Camara trasera</label>
                    <input type="text" name="camara_trasera" id="camara_trasera" placeholder="Camara trasera" class="form-control" value="<?php echo $row['camara_trasera'] ?>">
                </div>

            <?php } ?>

            <div class="mb-3 d-flex justify-content-around align-items-center">
                <button class="btn btn-primary text-white" type="submit" onclick="change()">Guardar</button>
                <a href="../../../pages/tablets/tablets.php" class="btn btn-secondary">Cancelar</a>
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