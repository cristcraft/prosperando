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
    $sql = "SELECT * FROM servidores WHERE id='$id'";
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
    <link rel="stylesheet" href="../../styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <a class="nav-link" href="../../components/router.php?page=impresoras">Impresoras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../components/router.php?page=switches">Switches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="../../components/router.php?page=servidores">Servidores</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Mantenimientos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item"
                                    href="../../components/router.php?page=equiposMante">Equipos</a></li>
                            <li><a class="dropdown-item"
                                    href="../../components/router.php?page=impresorasMante">Impresoras</a></li>
                            <li><a class="dropdown-item"
                                    href="../../components/router.php?page=servidoresMante">Servidores</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex">
                    <button class="btn me-3 btn-outline-dark" id="btn-oscuro" onclick="onModoOscuro()"
                        title="Modo oscuro"><i class="fas fa-sun"></i></button>

                    <a href="../../components/router.php?page=logout" class="btn btn-outline-dark" id="btn-salir"
                        title="Salir"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid d-flex justify-content-center align-items-center" id="form-content ">
        <form action="../../components/servidores/edidForm.php" method="POST" id="form_edit_tablets" class="form">
            <?php while($row = $result -> fetch_assoc()){ ?>
            <input required id="id" name="id" value="<?php echo $row['id'] ?>" hidden>

            <div class="mb-3">
                <label for="serial" class="form-label">Serial</label>
                <input required type="text" name="serial" id="serial" placeholder="Serial" class="form-control"
                    value="<?php echo $row['serial'] ?>">
            </div>

            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input required type="text" name="marca" id="marca" placeholder="marca" class="form-control"
                    value="<?php echo $row['marca'] ?>">
            </div>

            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input required type="text" name="modelo" id="modelo" placeholder="Modelo" class="form-control"
                    value="<?php echo $row['modelo'] ?>">
            </div>

            <div class="mb-3">
                <label for="fecha" class="form-label">fecha</label>
                <input required type="date" name="fecha" id="fecha" placeholder="fecha" class="form-control"
                    value="<?php echo $row['fecha'] ?>">
            </div>

            <div class="mb-3">
                <label for="nombre_equipo" class="form-label">Nombre del equipo</label>
                <input required type="text" name="nombre_equipo" id="nombre_equipo" placeholder="Nombre del equipo"
                    class="form-control" value="<?php echo $row['nombre_equipo'] ?>">
            </div>

            <div class="mb-3">
                <label for="procesador" class="form-label">Procesador</label>
                <input required type="text" name="procesador" id="procesador" placeholder="procesador"
                    class="form-control" value="<?php echo $row['procesador'] ?>">
            </div>

            <div class="mb-3">
                <label for="generacion" class="form-label">Generacion</label>
                <input required type="number" name="generacion" id="generacion" placeholder="generacion"
                    class="form-control" value="<?php echo $row['generacion'] ?>">
            </div>

            <div class="mb-3">
                <label for="nucleos" class="form-label">Nucleos</label>
                <input required type="number" name="nucleos" id="nucleos" placeholder="nucleos" class="form-control"
                    value="<?php echo $row['nucleos'] ?>">
            </div>

            <div class="mb-3">
                <label for="velocidad_mz" class="form-label">Velocidad en mz</label>
                <input required type="text" name="velocidad_mz" id="velocidad_mz" placeholder="velocidad_mz"
                    class="form-control" value="<?php echo $row['velocidad_mz'] ?>">
            </div>

            <div class="mb-3">
                <label for="ram" class="form-label">RAM</label>
                <input required type="text" name="ram" id="ram" placeholder="RAM" class="form-control"
                    value="<?php echo $row['ram'] ?>">
            </div>

            <div class="mb-3">
                <label for="tipo_memoria" class="form-label">Tipo memoria</label>
                <input required type="text" name="tipo_memoria" id="tipo_memoria" placeholder="tipo_memoria"
                    class="form-control" value="<?php echo $row['tipo_memoria'] ?>">
            </div>

            <div class="mb-3">
                <label for="adaptador_multimedia" class="form-label">Adaptador multimedia</label>
                <input required type="text" name="adaptador_multimedia" id="adaptador_multimedia"
                    placeholder="adaptador_multimedia" class="form-control"
                    value="<?php echo $row['adaptador_multimedia'] ?>">
            </div>

            <div class="mb-3">
                <label for="adaptador_video" class="form-label">Adaptador video</label>
                <input required type="text" name="adaptador_video" id="adaptador_video" placeholder="adaptador_video"
                    class="form-control" value="<?php echo $row['adaptador_video'] ?>">
            </div>

            <div class="mb-3">
                <label for="red_ethernet" class="form-label">Red ethernet</label>
                <input required type="text" name="red_ethernet" id="red_ethernet" placeholder="red_ethernet"
                    class="form-control" value="<?php echo $row['red_ethernet'] ?>">
            </div>

            <div class="mb-3">
                <label for="mac" class="form-label">MAC</label>
                <input required type="text" name="mac" id="mac" placeholder="mac" class="form-control"
                    value="<?php echo $row['mac'] ?>">
            </div>

            <div class="mb-3">
                <label for="ip" class="form-label">IP</label>
                <input required type="text" name="ip" id="ip" placeholder="ip" class="form-control"
                    value="<?php echo $row['ip'] ?>">
            </div>

            <div class="mb-3">
                <label for="red_ethernet1" class="form-label">Red ethernet1</label>
                <input required type="text" name="red_ethernet1" id="red_ethernet1" placeholder="red_ethernet1"
                    class="form-control" value="<?php echo $row['red_ethernet1'] ?>">
            </div>

            <div class="mb-3">
                <label for="mac1" class="form-label">mac1</label>
                <input required type="text" name="mac1" id="mac1" placeholder="mac1" class="form-control"
                    value="<?php echo $row['mac1'] ?>">
            </div>

            <div class="mb-3">
                <label for="ip1" class="form-label">IP1</label>
                <input required type="text" name="ip1" id="ip1" placeholder="ip1" class="form-control"
                    value="<?php echo $row['ip1'] ?>">
            </div>

            <div class="mb-3">
                <label for="so" class="form-label">SO</label>
                <input required type="text" name="so" id="so" placeholder="so" class="form-control"
                    value="<?php echo $row['so'] ?>">
            </div>

            <div class="mb-3">
                <label for="licencia" class="form-llicencia">licencia</label>
                <input required type="text" name="licencia" id="licencia" placeholder="licencia" class="form-control"
                    value="<?php echo $row['licencia'] ?>">
            </div>

            <div class="mb-3">
                <label for="total_discos" class="form-llicencia">Total discos</label>
                <input required type="text" name="total_discos" id="total_discos" placeholder="total_discos"
                    class="form-control" value="<?php echo $row['total_discos'] ?>">
            </div>

            <?php
                    for ($i=1; $i <= 16 ; $i++) {
                        $marca = [0, 'marca1', 'marca2', 'marca3', 'marca4', 'marca5', 'marca6', 'marca7', 'marca8', 'marca9', 'marca10', 'marca11', 'marca12', 'marca13', 'marca14', 'marca15', 'marca16'];
                        $capacidad = [0, 'capacidad1', 'capacidad2', 'capacidad3', 'capacidad4', 'capacidad5', 'capacidad6', 'capacidad7', 'capacidad8', 'capacidad9', 'capacidad10', 'capacidad11', 'capacidad12', 'capacidad13', 'capacidad14', 'capacidad15', 'capacidad16'];

                        echo "
                        <div class='mb-3'>
                            <label for='marca$i' class='form-label'>Marca $i</label>
                            <input required type='text' name='marca$i' id='marca$i' placeholder='marca$i' class='form-control' value='".$row[$marca[$i]]."'>
                        </div>
                        <div class='mb-3'>
                            <label for='capacidad$i' class='form-label'>Capaciad $i</label>
                            <input required type='number' name='capacidad$i' id='capacidad$i' placeholder='capacidad$i' class='form-control' value='".$row[$capacidad[$i]]."'>
                        </div>
                        ";
                    }
                ?>

            <?php } ?>

            <div class="mb-3 d-flex justify-content-around align-items-center">
                <button class="btn btn-primary text-white" type="submit" onclick="change()">Guardar</button>
                <a href="../../pages/servidores/servidores.php" class="btn btn-secondary" onclick="change('error')">Cancelar</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
    </script>

    <script src="../../scripts/modoOscuro.js"></script>
    <script src="../../scripts/popOvers.js"></script>

</body>

</html>