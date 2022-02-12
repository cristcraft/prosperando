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

    $datosTablaEquipo = "SELECT * FROM equipos";
    $resultDatosTablaEquipo = $connection->query($datosTablaEquipo);

    $estructuraTabla = "DESCRIBE equipos";
    $resultEstructuraTabla = $connection->query($estructuraTabla);

    $rowEstructuraTabla = mysqli_fetch_array($resultEstructuraTabla);

    $arrayDatos = array();

    header("Pragma: public");
    header("Expires: 0");
    $filename = "Equipos.xls";
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
        <h1>Equipos</h1>
        <div class="tabla">
            <table id="equipos" class="table  text-center mt-4">
                <thead>
                    <tr class="bg-primary text-white">
                        <?php
                        while($rowEstructuraTabla = mysqli_fetch_array($resultEstructuraTabla)) {
                            $arrayDatos[] = $rowEstructuraTabla['Field'];
                            echo '<th scope="col">'.$rowEstructuraTabla['Field']. '</th>';
                        };
                        $largoArrayDatos =  count($arrayDatos);
                    ?>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    while($rowDatosTablaEquipo = mysqli_fetch_array($resultDatosTablaEquipo)) {
                        echo "
                            <tr id='tr".$rowDatosTablaEquipo['id']."'>
                            ";
                                for ($i=1; $i <= $largoArrayDatos; $i++) { 
                                    echo "<td>".$rowDatosTablaEquipo[$i]."</td>";
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