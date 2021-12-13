<?php 
    require_once("../../../connection/connection.php");

    $serial = $_POST['serial'];
    $ip = $_POST['ip'];
    $fecha = $_POST['fecha'];
    $tipo_mantenimiento	= $_POST['tipo_mantenimiento'];
    $descripcion_mantenimiento = $_POST['descripcion_mantenimiento'];
    $nombre_tecnico =$_POST['nombre_tecnico'];

    $insertsql = "INSERT INTO mantenimientos_servidores(
    serial,
    ip,
    fecha,
    tipo_mantenimiento,
    descripcion_mantenimiento,
    nombre_tecnico
    ) 
    VALUES (
    '$serial',
    '$ip',
    '$fecha',
    '$tipo_mantenimiento',
    '$descripcion_mantenimiento',
    '$nombre_tecnico'
    )";


    if ($connection->query($insertsql) === TRUE) {
        echo '<script>window.location.href = "../../../pages/mantenimientos/servidores/mantenimientosServidores.php"</script>';
    }else {
        echo "ERROR";
    }
        
?>