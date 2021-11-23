<?php 
    require_once("../../../connection/connection.php");

    $codigo_administrativo = $_POST['codigo_administrativo'];
    $nombre_equipo = $_POST['nombre_equipo'];
    $fecha = $_POST['fecha'];
    $tipo_mantenimiento =$_POST['tipo_mantenimiento'];
    $descripcion_mantenimiento	= $_POST['descripcion_mantenimiento'];
    $nombre_tecnico = $_POST['nombre_tecnico'];
    $nombre_encargado = $_POST['nombre_encargado'];

    $insertsql = "INSERT INTO mantenimientos(
    codigo_administrativo,
    nombre_equipo,
    fecha,
    tipo_mantenimiento,
    descripcion_mantenimiento,
    nombre_tecnico,
    nombre_encargado) 
    VALUES (
    '$codigo_administrativo',
    '$nombre_equipo',
    '$fecha',
    '$tipo_mantenimiento',
    '$descripcion_mantenimiento',
    '$nombre_tecnico',
    '$nombre_encargado')";


    if ($connection->query($insertsql) === TRUE) {
        echo '<script>window.location.href = "../../../pages/mantenimientos/equipos/mantenimientosEquipos.php"</script>';
    }else {
        echo "ERROR";
    }
        
?>