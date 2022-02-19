<?php
    require_once('../../connection/connection.php');
    $id = $_GET['id'];

    $deleteSql = "DELETE FROM activos_inferiores WHERE id = '$id'";
    mysqli_query($connection,$deleteSql);

    if ($connection->query($deleteSql) === TRUE) {
        echo '<script>window.location.href = "../../../pages/activos_inferiores/activos_inferiores.php#editar"</script>';
    }else {
        echo "ERROR";
    }

?>