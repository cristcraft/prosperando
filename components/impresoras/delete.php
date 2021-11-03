<?php
    require_once('../../connection/connection.php');
    $id = $_GET['id'];
    echo $id;

    $deleteSql = "DELETE FROM impresoras WHERE id = '$id'";
    mysqli_query($connection,$deleteSql);

    if ($connection->query($deleteSql) === TRUE) {
        echo '<script>window.location.href = "../../../pages/impresoras/impresoras.php"</script>';
    }else {
        echo "ERROR";
    }

?>
