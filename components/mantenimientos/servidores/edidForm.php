<?php
    require_once("../../../connection/connection.php");

    $id = $_POST['id'];
    $serial = $_POST['serial'];
    $ip = $_POST['ip'];
    $fecha = $_POST['fecha'];
    $tipo_mantenimiento	= $_POST['tipo_mantenimiento'];
    $descripcion_mantenimiento = $_POST['descripcion_mantenimiento'];
    $nombre_tecnico =$_POST['nombre_tecnico'];

    $updateSql="UPDATE mantenimientos_servidores SET
        serial = '$serial',
        ip = '$ip',
        fecha =  '$fecha',
        tipo_mantenimiento = '$tipo_mantenimiento',
        descripcion_mantenimiento = '$descripcion_mantenimiento',
        nombre_tecnico = '$nombre_tecnico'

        WHERE id = '$id'";
    mysqli_query($connection,$updateSql);
        echo $id;
        if ($connection->query($updateSql) === TRUE) {
            echo '<script>window.location.href = "../../../pages/mantenimientos/servidores/mantenimientosServidores.php"</script>';
        }else {
            echo "ERROR";
        }

?>