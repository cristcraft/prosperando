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

    header("Pragma: public");
    header("Expires: 0");
    $filename = "Activos_inferiores.xls";
    header("Content-type: application / vnd.ms-excel");
    header("Content-Disposition: attachment; filename=$filename");
    header("Pragma: no-cache");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Equipos</title>
</head>

<body id="body">

    <div class="container-fluid d-flex flex-column align-items-center mt-3">
        <h1>Activos Inferiores</h1>
        <div class="tabla">
            <table id="equipos" class="table  text-center mt-4">
                <thead>
                    <tr class="bg-primary text-white">
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
                        echo "<tr>";
                            for ($i=0; $i < $largoArrayDatos; $i++) { 
                                echo "<td>".$rowDatosTablaActivos[$i]."</td>";
                            }
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>