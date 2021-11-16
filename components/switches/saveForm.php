<?php 
require_once("../../connection/connection.php");

//importa la conexion con todas las subtablas
require_once("../../tables/tables.php");

        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $serial = $_POST['serial'];
        $mac = $_POST['mac'];
        $ip = $_POST['ip'];
        $manual = $_POST['manual'];
        $insertsql="INSERT INTO 
        switches(
            marca,
            modelo,
            serial,
            mac,
            ip,
            manual
            ) 
        VALUES( 
            '$marca',
            '$modelo',
            '$serial',
            '$mac',
            '$ip',
            '$manual')";

        if ($connection->query($insertsql) === TRUE) {
            echo '<script>window.location.href = "../../pages/switches/switches.php"</script>';
        }else {
            echo "ERROR";
        }
        
?>