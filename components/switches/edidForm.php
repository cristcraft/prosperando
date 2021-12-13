<?php
    require_once("../../connection/connection.php");
    
    //importa la conexion con todas las subtablas
    require_once("../../tables/tables.php");

        $id = $_POST['id'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $serial = $_POST['serial'];
        $mac = $_POST['mac'];
        $ip = $_POST['ip'];
        $manual = $_POST['manual'];

        $updateSql="UPDATE switches SET
            marca = '$marca',
            modelo = '$modelo',
            serial =  '$serial',
            mac = '$mac',
            ip = '$ip',
            manual = '$manual'

            WHERE id = '$id'";
        mysqli_query($connection,$updateSql);
        echo $id, $marca, $modelo, $serial, $mac, $ip, $manual;
        if ($connection->query($updateSql) === TRUE) {
            echo '<script>window.location.href = "../../pages/switches/switches.php"</script>';
        }else {
            echo "ERROR";
        }

?>