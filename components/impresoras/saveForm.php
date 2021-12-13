<?php 
require_once("../../connection/connection.php");

//importa la conexion con todas las subtablas
require_once("../../tables/tables.php");

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

        $insertsql="INSERT INTO 
        impresoras(
            sucursal,
            area,
            tipo,
            marca,
            modelo,
            serial,
            ip,
            mac,
            nombre_host,
            novedades,
            tipo_papel
            ) 
        VALUES( 
            '$sucursal',
            '$area',
            '$tipo_impresoras',
            '$marcas_impresoras',
            '$modelo',
            '$serial',
            '$ip',
            '$mac',
            '$nombre_host',
            '$novedades',
            '$tipo_papel'
                )";

        if ($connection->query($insertsql) === TRUE) {
            echo '<script>window.location.href = "../../pages/impresoras/impresoras.php"</script>';
        }else {
            echo "ERROR";
        }
        
?>