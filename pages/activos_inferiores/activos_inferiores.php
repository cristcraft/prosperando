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
};

require_once("../../connection/connection.php");

$estructuraTabla = "DESCRIBE activos_inferiores";
$resultEstructuraTabla = $connection->query($estructuraTabla);
$resultEstructuraTablaEditar = $connection->query($estructuraTabla);
$sql = "SELECT * FROM activos_inferiores";
$resultData = $connection->query($sql);
$arrayDatos = array();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Activos Inferiores</title>
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
                        <a class="nav-link "
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
                    <li class="nav-item active" aria-current="page">
                        <a class="nav-link" href="../../components/router.php?page=activos_inferiores ">Activos inferiores</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Mantenimientos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item"
                                    href="../../components/router.php?page=equiposMante">Equipos</a>
                            </li>
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

    <div class="crear" id="crear">
        <?php
        if(isset($_GET['accion'])){
        ?>
            <h1>Editar Activos Inferiores</h1>
            <form action="../../components/activos_inferiores/edit.php" method="post">
                <?php 
                $id = $_GET['id'];
                while($rowEstructuraTabla = mysqli_fetch_array($resultEstructuraTabla)) {
                    if($rowEstructuraTabla['Default'] === 'select'){
                        $nombreTabla = $rowEstructuraTabla['Field'];
                        $sql = "SELECT * FROM ".$nombreTabla."";
                        $result= $connection->query($sql);

                        $sqldatoElegido = "SELECT ".$nombreTabla." FROM activos_inferiores where id=".$id."";
                        $resultDatoElegido = $connection->query($sqldatoElegido);
                        
                        echo '
                            <div class="mb-3">
                            <label for="'. $rowEstructuraTabla['Field'].'" class="form-label">'. $rowEstructuraTabla['Field'].' <a
                                    href="../../components/addElements/addElements.php/?table='. $rowEstructuraTabla['Field'].'&accion=0"><i
                                        class="fas fa-plus-circle"></i></a></label>
                            <select name="'. $rowEstructuraTabla['Field'].'" id="'. $rowEstructuraTabla['Field'].'" class="form-select">';
                            while($rowDato = $resultDatoElegido  -> fetch_row()){
                                echo '<option value="'.$rowDato[0].'" selected>'.$rowDato[0].'</option>';
                            }
                            while($row = $result  -> fetch_assoc()){
                                echo '<option value="'.$row['nombre'].'">'.$row['nombre'].'</option>';
                            }
                            echo '</select>
                            </div>
                        ';
                    }elseif($rowEstructuraTabla['Default'] === NULL && $rowEstructuraTabla['Type'] == 'varchar(50)'){
                        $sql = "SELECT ".$rowEstructuraTabla['Field']." FROM activos_inferiores WHERE id='$id'";
                        $resultData = $connection->query($sql);

                        while($rowData = $resultData -> fetch_assoc()){
                            echo '
                                <div class="mb-3">
                                    <label for="'.$rowEstructuraTabla['Field'].'" class="form-label">'.$rowEstructuraTabla['Field'].'</label>
                                    <input required type="text" id="'.$rowEstructuraTabla['Field'].'" name="'.$rowEstructuraTabla['Field'].'" class="form-control" placeholder="'.$rowEstructuraTabla['Field'].'" value="'.$rowData[$rowEstructuraTabla['Field']].'" require>
                                </div>
                            ';
                        }
                    }elseif($rowEstructuraTabla['Default'] === NULL && $rowEstructuraTabla['Type'] == 'int(11)'){
                        $sql = "SELECT ".$rowEstructuraTabla['Field']." FROM activos_inferiores WHERE id='$id'";
                        $resultData = $connection->query($sql);

                        while($rowData = $resultData -> fetch_assoc()){
                            echo '
                                <div class="mb-3 d-none ">
                                    <label for="'.$rowEstructuraTabla['Field'].'" class="form-label">'.$rowEstructuraTabla['Field'].'</label>
                                    <input  type="number" name="'.$rowEstructuraTabla['Field'].'" id="'.$rowEstructuraTabla['Field'].'"
                                        placeholder="'.$rowEstructuraTabla['Field'].'" value="'.$rowData[$rowEstructuraTabla['Field']].'" class="form-control">
                                </div>
                            ';
                        }
                    }elseif($rowEstructuraTabla['Default'] === NULL && $rowEstructuraTabla['Type'] == 'int(15)'){
                        $sql = "SELECT ".$rowEstructuraTabla['Field']." FROM activos_inferiores WHERE id='$id'";
                        $resultData = $connection->query($sql);

                        while($rowData = $resultData -> fetch_assoc()){
                            echo '
                                <div class="mb-3">
                                    <label for="'.$rowEstructuraTabla['Field'].'" class="form-label">'.$rowEstructuraTabla['Field'].'</label>
                                    <input required  type="number" name="'.$rowEstructuraTabla['Field'].'" id="'.$rowEstructuraTabla['Field'].'"
                                        placeholder="'.$rowEstructuraTabla['Field'].'" value="'.$rowData[$rowEstructuraTabla['Field']].'" class="form-control">
                                </div>
                            ';
                        }
                    }elseif($rowEstructuraTabla['Type'] === 'date'){
                        $sql = "SELECT ".$rowEstructuraTabla['Field']." FROM activos_inferiores WHERE id='$id'";
                        $resultData = $connection->query($sql);

                        while($rowData = $resultData -> fetch_assoc()){
                            echo '
                                <div class="mb-3">
                                    <label for="'.$rowEstructuraTabla['Field'].'" class="form-label">'.$rowEstructuraTabla['Field'].'</label>
                                    <input required type="date" name="'.$rowEstructuraTabla['Field'].'" id="'.$rowEstructuraTabla['Field'].'" placeholder="'.$rowEstructuraTabla['Field'].'" value="'.$rowData[$rowEstructuraTabla['Field']].'"
                                        class="form-control">
                                </div>
                            ';
                        }
                    }
                }
                ?>
                
                <div class="mb-3 d-flex justify-content-center align-items-center">
                    <a class="btn btn-danger text-white" href="./activos_inferiores.php" onclick="change('error')">Cancelar</a>

                    <button class="btn btn-primary text-white" type="submit" onclick="change()">Guardar</button>
                </div>
            </form>
        <?php
        }else{
        ?>
            <h1>Crear Activos Inferiores</h1>
            <form action="../../components/activos_inferiores/saveForm.php" method="post">
                <?php 
                while($rowEstructuraTabla = mysqli_fetch_array($resultEstructuraTabla)) {
                    if($rowEstructuraTabla['Default'] === 'select'){
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
                    }elseif($rowEstructuraTabla['Default'] === NULL && $rowEstructuraTabla['Type'] == 'varchar(50)'){
                        //echo $rowEstructuraTabla['Field'].'= varchar <br>' ;
                        echo '
                            <div class="mb-3">
                                <label for="'.$rowEstructuraTabla['Field'].'" class="form-label">'.$rowEstructuraTabla['Field'].'</label>
                                <input required type="text" id="'.$rowEstructuraTabla['Field'].'" name="'.$rowEstructuraTabla['Field'].'" class="form-control" placeholder="'.$rowEstructuraTabla['Field'].'" require>
                            </div>
                        ';
                    }elseif($rowEstructuraTabla['Default'] === NULL && $rowEstructuraTabla['Type'] == 'int(11)'){
                        echo '
                            <div class="mb-3 d-none ">
                                <label for="'.$rowEstructuraTabla['Field'].'" class="form-label">'.$rowEstructuraTabla['Field'].'</label>
                                <input  type="number" name="'.$rowEstructuraTabla['Field'].'" id="'.$rowEstructuraTabla['Field'].'"
                                    placeholder="'.$rowEstructuraTabla['Field'].'" class="form-control">
                            </div>
                        ';
                    }elseif($rowEstructuraTabla['Default'] === NULL && $rowEstructuraTabla['Type'] == 'int(15)'){
                        echo '
                            <div class="mb-3">
                                <label for="'.$rowEstructuraTabla['Field'].'" class="form-label">'.$rowEstructuraTabla['Field'].'</label>
                                <input required  type="number" name="'.$rowEstructuraTabla['Field'].'" id="'.$rowEstructuraTabla['Field'].'"
                                    placeholder="'.$rowEstructuraTabla['Field'].'" class="form-control">
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
                
                <div class="mb-3 d-flex justify-content-center align-items-center">
                    <button class="btn btn-primary text-white" type="submit" onclick="change()">Guardar</button>
                </div>
            </form>
        <?php
        }
        ?>
    </div>

    <div class="editar" id="editar">

        <div class="container-fluid d-flex flex-column align-items-center mt-3">
            <h1>Acrivos Inferiores</h1>

            <div class="tabla">
                <table id="equipos" class="table  text-center mt-4">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th scope="col">Acciones</th>
                            <?php
                            while($rowEstructuraActivos = mysqli_fetch_array($resultEstructuraTablaEditar)) {
                                $arrayDatos[] = $rowEstructuraActivos['Field'];  
                                echo '<th scope="col">'.$rowEstructuraActivos['Field']. '</th>';
                            };
                            $largoArrayDatos =  count($arrayDatos);
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $string = "";
                        while($rowDatosTablaActivos = mysqli_fetch_array($resultData)) {
                            echo "
                                <tr id='tr".$rowDatosTablaActivos['id']."'>
                                    <td class='d-flex flex-column justify-content-beetwen'>
                                        <a href='./activos_inferiores.php?accion=editar&id=".$rowDatosTablaActivos['id']."' class='btn btn-info m-2' title='editar'><i
                                                class='fas fa-edit'></i></a>
                                        <a onclick='confirmar(`".$rowDatosTablaActivos['id']."`, `activos_inferiores`)' class='btn btn-danger m-2'
                                            title='eliminar'><i class='fas fa-trash'></i></a>
                                        <a onclick='select(`".$rowDatosTablaActivos['id']."`)' class='btn btn-warning m-2'
                                            title='seleccionar'><i class='fas fa-arrow-right'></i></a>
                                    </td>
                                ";
                                for ($i=0; $i < $largoArrayDatos; $i++) { 
                                    echo "<td>".$rowDatosTablaActivos[$i]."</td>";
                                }
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="d-flex flex-column m-3">
                <a href="./activos_inferiores_export.php" class="btn btn-outline-info">Descargar</a>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#equipos').DataTable({
            pageLength: 10,
            lengthMenu: [
                [5, 10, 20, -1],
                [5, 10, 20, 'Todos']
            ]
        });
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../scripts/modoOscuro.js"></script>
    <script src="../../scripts/popOvers.js"></script>
</body>
</html>