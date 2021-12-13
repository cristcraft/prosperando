<?php
    require_once('../../connection/connection.php');
    $codigo_administrativo = $_GET['codigo_administrativo'];

    $deleteSql = "DELETE FROM equipos WHERE codigo_administrativo = '$codigo_administrativo'";
    mysqli_query($connection,$deleteSql);

    if ($connection->query($deleteSql) === TRUE) {
        echo '<script>window.location.href = "../../../pages/equipos/equipos.php"</script>';
    }else {
        echo "ERROR";
    }

?>
