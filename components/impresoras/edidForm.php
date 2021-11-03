<?php
    require_once("../../connection/connection.php");
    
    //importa la conexion con todas las subtablas
    require_once("../../tables/tables.php");
        $id = $_POST['id'];
        $sucursal = $_POST['sucursal'];
        $area = $_POST['area'];
        $tipo_impresoras = $_POST['tipo_impresoras'];
        $marcas_impresoras = $_POST['marcas_impresoras'];
        $modelo = $_POST['modelo'];
        $serial = $_POST['serial'];
        $ip = $_POST['ip'];
        $mac = $_POST['mac'];
        $nombre_host = $_POST['nombre_host'];
        $novedades = $_POST['novedades'];
        $tipo_papel = $_POST['tipo_papel'];

        $updateSql="UPDATE impresoras SET
            sucursal = '$sucursal',
            area = '$area',
            tipo = '$tipo_impresoras',
            marca = '$marcas_impresoras',
            modelo = '$modelo',
            serial = '$serial',
            ip = '$ip',
            mac = '$mac',
            nombre_host = '$nombre_host',
            novedades = '$novedades',
            tipo_papel = '$tipo_papel'

            WHERE id = '$id'";
        mysqli_query($connection,$updateSql);
        echo $id;
        if ($connection->query($updateSql) === TRUE) {
            echo '<script>window.location.href = "../../pages/impresoras/impresoras.php"</script>';
        }else {
            echo "ERROR";
        }

?>