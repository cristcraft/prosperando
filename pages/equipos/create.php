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
    require_once("../../tables/tables_copy.php");

    $estructuraTabla = "DESCRIBE equipos";
    $resultEstructuraTabla = $connection->query($estructuraTabla);

    $count = 0;
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
                        <a class="nav-link active" aria-current="page"
                            href="../../components/router.php?page=equipos">Equipos</a>
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
                        <a class="nav-link" href="../../components/router.php?page=servidores">Servidores</a>
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
        <form action="../../components/equipos/saveForm.php" method="POST" id="form_create_equipos" class="form">

            <?php 
                while($rowEstructuraTabla = mysqli_fetch_array($resultEstructuraTabla)) {
                        
                    if($rowEstructuraTabla['Null'] === 'NO'){
                        echo '
                                <input  type="number" name="'.$rowEstructuraTabla['Field'].'" id="'.$rowEstructuraTabla['Field'].'"
                                    placeholder="Number" class="form-control" hidden value="Null">
                        ';
                    }elseif($rowEstructuraTabla['Default'] === NULL && $rowEstructuraTabla['Type'] == 'int(11)' || $rowEstructuraTabla['Type'] == 'int(60)'){
                        //echo $rowEstructuraTabla['Field'].'= number <br>';
                        /*if($rowEstructuraTabla['Type'] == 'varchar'){
                            echo 'fehca';
                            //echo "{$rowEstructuraTabla['Default']} <br>";
                        }*/
                        echo '
                            <div class="mb-3">
                                <label for="'.$rowEstructuraTabla['Field'].'" class="form-label">'.$rowEstructuraTabla['Field'].'</label>
                                <input  type="number" name="'.$rowEstructuraTabla['Field'].'" id="'.$rowEstructuraTabla['Field'].'"
                                    placeholder="Number" class="form-control">
                            </div>
                        ';
                    }elseif($rowEstructuraTabla['Default'] === 'select'){
                        //echo $rowEstructuraTabla['Field'].'= select <br>' ;
                        $nombreTabla = $rowEstructuraTabla['Field'];
                        $sql = "SELECT * FROM ".$nombreTabla."";
                        $result= $connection->query($sql);
                        
                        echo '
                            <div class="mb-3">
                            <label for="'. $rowEstructuraTabla['Field'].'" class="form-label">'. $rowEstructuraTabla['Field'].' <a
                                    href="../../components/addElements/addElements.php/?table='. $rowEstructuraTabla['Field'].'&accion=0"><i
                                        class="fas fa-plus-circle"></i></a></label>
                            <select name="'. $rowEstructuraTabla['Field'].'" id="'. $rowEstructuraTabla['Field'].'" class="form-select">';
                            
                            while($row = $result  -> fetch_assoc()){
                                echo '<option value="'.$row['nombre'].'">'.$row['nombre'].'</option>';
                            }
                            echo '</select>
                            </div>
                        ';
                    }elseif($rowEstructuraTabla['Default'] === NULL && $rowEstructuraTabla['Type'] == 'varchar(100)' || 
                    $rowEstructuraTabla['Type'] == 'varchar(60)' || $rowEstructuraTabla['Type'] == 'varchar(50)' || $rowEstructuraTabla['Type'] == 'varchar(20)'|| $rowEstructuraTabla['Type'] == 'varchar(11)' || $rowEstructuraTabla['Type'] == 'varchar(10)'|| $rowEstructuraTabla['Type'] == 'varchar(5)'){
                        //echo $rowEstructuraTabla['Field'].'= varchar <br>' ;
                        echo '
                            <div class="mb-3">
                                <label for="'.$rowEstructuraTabla['Field'].'" class="form-label">'.$rowEstructuraTabla['Field'].'</label>
                                <input  type="text" id="'.$rowEstructuraTabla['Field'].'" name="'.$rowEstructuraTabla['Field'].'" class="form-control"
                                    require>
                            </div>
                        ';
                    }elseif($rowEstructuraTabla['Type'] === 'date'){
                        echo '
                            <div class="mb-3">
                                <label for="'.$rowEstructuraTabla['Field'].'" class="form-label">'.$rowEstructuraTabla['Field'].'</label>
                                <input required type="date" name="'.$rowEstructuraTabla['Field'].'" id="'.$rowEstructuraTabla['Field'].'" placeholder="'.$rowEstructuraTabla['Field'].'"
                                    class="form-control">
                            </div>
                        ';
                    }
                }
            ?>

            <div class="mb-3 d-flex justify-content-around align-items-center">
                <button class="btn btn-primary text-white" type="submit" onclick="change()">Guardar</button>
                <a href="../../pages/equipos/equipos.php" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
    </script>

    <script src="../../scripts/modoOscuro.js"></script>
    <script src="../../scripts//popOvers.js"></script>

</body>

</html>