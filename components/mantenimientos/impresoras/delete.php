<?php
    require_once('../../../connection/connection.php');
    $id = $_GET['id'];

    $deleteSql = "DELETE FROM mantenimientos_impresoras WHERE id = '$id'";
    mysqli_query($connection,$deleteSql);

    if ($connection->query($deleteSql) === TRUE) {
        echo '<script>window.location.href = "../../../../pages/mantenimientos/impresoras/mantenimientosImpresoras.php"</script>';
    }else {
        echo "ERROR";
    }

?>
