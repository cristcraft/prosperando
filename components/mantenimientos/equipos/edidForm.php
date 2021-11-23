<?php
    require_once("../../../connection/connection.php");

    $id = $_POST['id'];
    $codigo_administrativo = $_POST['codigo_administrativo'];
    $nombre_equipo = $_POST['nombre_equipo'];
    $fecha = $_POST['fecha'];
    $tipo_mantenimiento =$_POST['tipo_mantenimiento'];
    $descripcion_mantenimiento	= $_POST['descripcion_mantenimiento'];
    $nombre_tecnico = $_POST['nombre_tecnico'];
    $nombre_encargado = $_POST['nombre_encargado'];


        $updateSql="UPDATE mantenimientos SET
            codigo_administrativo = '$codigo_administrativo',
            nombre_equipo = '$nombre_equipo',
            fecha =  '$fecha',
            tipo_mantenimiento = '$tipo_mantenimiento',
            descripcion_mantenimiento = '$descripcion_mantenimiento',
            nombre_tecnico = '$nombre_tecnico',
            nombre_encargado = '$nombre_encargado'

            WHERE id = '$id'";
        mysqli_query($connection,$updateSql);
        echo $id;
        if ($connection->query($updateSql) === TRUE) {
            echo '<script>window.location.href = "../../../pages/mantenimientos/equipos/mantenimientosEquipos.php"</script>';
        }else {
            echo "ERROR";
        }

?>