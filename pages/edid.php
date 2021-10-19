<?php 
    require_once("../connection/connection.php");

    //importa la conexion con todas las subtablas
    require_once("../tables/tables.php");

    $id = $_GET['id'];
    $sql = "SELECT * FROM equipos WHERE id='$id'";
    $result = $connection->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo $row['sucursal'];
    }
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Crear</title>
</head>

<body id="body">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Equipos</a>
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
        <form action="../components/saveForm.php" method="POST" id="form" class="text-white">
            <?php while($row = $equiposResult -> fetch_assoc()){ ?>
                <input id="id" name="id" value="<?php echo $row['id'] ?>" hidden>
            <?php } ?>

            <div class="mb-3">
                <label for="sucursal" class="form-label">Sucursal</label>
                <select name="sucursal" id="sucursal" class="form-select">
                    <?php while($row = $sucursalesResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['nombre'] ?>"><?php echo $row['nombre'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="area" class="form-label">Area</label>
                <select name="area" id="area" class="form-select">
                    <?php while($row = $areasResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['nombre'] ?>"><?php echo $row['nombre'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="lugar_trabajo" class="form-label">Lugar de trabajo</label>
                <select name="lugar_trabajo" id="lugar_trabajo" class="form-control">
                    <?php while($row = $lugarTrabajoResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['lugar_de_trabajo'] ?>"><?php echo $row['lugar_de_trabajo'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="tipo_equipo" class="form-label">Tipo de equipo</label>
                <select name="tipo_equipo" id="tipo_equipo" class="form-control">
                    <?php while($row = $tipoEquipoResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['tipo'] ?>"><?php echo $row['tipo'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <select name="marca" id="marca" class="form-control">
                    <?php while($row = $marcasResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['marca'] ?>"><?php echo $row['marca'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="procesador" class="form-label">Procesador</label>
                <select name="procesador" id="procesador" class="form-control">
                    <?php while($row = $procesadoresResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['procesador'] ?>"><?php echo $row['procesador'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="tipo_memoria" class="form-label">Tipo de RAM</label>
                <select name="tipo_memoria" id="tipo_memoria" class="form-control">
                    <?php while($row = $tipoMemoriasResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['tipo_memoria'] ?>"><?php echo $row['tipo_memoria'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="marca_disco_duro" class="form-label">Marca del disco duro</label>
                <select name="marca_disco_duro" id="marca_disco_duro" class="form-control">
                    <?php while($row = $marcasDiscoResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['marca_disco_duro'] ?>"><?php echo $row['marca_disco_duro'] ?></option>
                    <?php } ?>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="tipo_disco" class="form-label">Marca del disco duro</label>
                <select name="tipo_disco" id="tipo_disco" class="form-control">
                    <?php while($row = $tiposDiscoResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['tipo_disco'] ?>"><?php echo $row['tipo_disco'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="funcionario_responsable" class="form-label">funcionario Responsable</label>
                <input type="text" name="funcionario_responsable" id="funcionario_responsable" placeholder="funcionario responsable" class="form-control">
            </div>

            <div class="mb-3">
                <label for="nombre_equipo" class="form-label">Nombre del equipo</label>
                <input type="text" name="nombre_equipo" id="nombre_equipo" placeholder="nombre del quipo" class="form-control">
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
                <label for="serial" class="form-label">Serial</label>
                <input type="text" name="serial" id="serial" placeholder="Serial" class="form-control">
            </div>

            <div class="mb-3">
                <label for="fecha_fabricacion" class="form-label">Serial</label>
                <input type="date" name="fecha_fabricacion" id="fecha_fabricacion" placeholder="fecha_fabricacion" class="form-control">
            </div>

            <div class="mb-3">
                <label for="generacion_procesador" class="form-label">Generacion del procesador</label>
                <input type="text" name="generacion_procesador" id="generacion_procesador" placeholder="generacion del procesador" class="form-control">
            </div>

            <div class="mb-3">
                <label for="nucleos" class="form-label">nucleos</label>
                <input type="number" name="nucleos" id="nucleos" placeholder="nucleos" class="form-control">
            </div>

            <div class="mb-3">
                <label for="velocidad_mz" class="form-label">velocidad en mz</label>
                <input type="number" name="velocidad_mz" id="velocidad_mz" placeholder="velocidad en mz" class="form-control">
            </div>

            <div class="mb-3">
                <label for="ram_gb" class="form-label">RAM en GB</label>
                <input type="number" name="ram_gb" id="ram_gb" placeholder="ram en gb" class="form-control">
            </div>

            <div class="mb-3">
                <label for="adaptador_multimedia" class="form-label">Adaptador multimedia</label>
                <input type="text" name="adaptador_multimedia" id="adaptador_multimedia" placeholder="adaptador multimedia" class="form-control">
            </div>

            <div class="mb-3">
                <label for="adaptador_video" class="form-label">Adaptador video</label>
                <input type="text" name="adaptador_video" id="adaptador_video" placeholder="adaptador video" class="form-control">
            </div>

            <div class="mb-3">
                <label for="capacidad_disco" class="form-label">Capacidad del disco</label>
                <input type="text" name="capacidad_disco" id="capacidad_disco" placeholder="capacidad del disco" class="form-control">
            </div>

            <div class="mb-3">
                <label for="red_ethernet" class="form-label">Red ethernet</label>
                <input type="text" name="red_ethernet" id="red_ethernet" placeholder="red ethernet" class="form-control">
            </div>

            <div class="mb-3">
                <label for="ip" class="form-label">IP</label>
                <input type="text" name="ip" id="ip" placeholder="ip" class="form-control">
            </div>

            <div class="mb-3">
                <label for="mac_ethernet" class="form-label">MAC ethernet</label>
                <input type="text" name="mac_ethernet" id="mac_ethernet" placeholder="mac_ethernet" class="form-control">
            </div>

            <div class="mb-3">
                <label for="red_wifi" class="form-label">Red wifi</label>
                <input type="text" name="red_wifi" id="red_wifi" placeholder="red wifi" class="form-control">
            </div>

            <div class="mb-3">
                <label for="mac" class="form-label">MAC</label>
                <input type="text" name="mac" id="mac" placeholder="mac" class="form-control">
            </div>

            <div class="mb-3">
                <button class="btn btn-primary text-white" type="submit">Guardar</button>
                <a href="/" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
        crossorigin="anonymous"></script>
    
    <script src="../scripts/modoOscuro.js"></script>

</body>

</html>