<?php
    require_once('../../../connection/connection.php');
    $id = $_GET['id'];

    $deleteSql = "DELETE FROM mantenimientos_equipos WHERE id = '$id'";
    mysqli_query($connection,$deleteSql);

    if ($connection->query($deleteSql) === TRUE) {
        echo '<script>window.location.href = "../../../../pages/mantenimientos/equipos/mantenimientosEquipos.php"</script>';
    }else {
        echo "ERROR";
    }

?>
