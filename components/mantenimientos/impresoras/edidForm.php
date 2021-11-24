<?php
    require_once("../../../connection/connection.php");

    $id = $_POST['id'];
    $ciudad = $_POST['ciudad'];
    $cliente = $_POST['cliente'];
    $fecha = $_POST['fecha'];
    $direccion =$_POST['direccion'];
    $telefono	= $_POST['telefono'];
    $encargado = $_POST['encargado'];
    $tipo_impresora = $_POST['tipo_impresora'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $serial = $_POST['serial'];
    $reporte_tecnico = $_POST['reporte_tecnico'];
    $observaciones = $_POST['observaciones'];


        $updateSql="UPDATE mantenimientos_impresoras SET
            ciudad = '$ciudad',
            cliente = '$cliente',
            fecha =  '$fecha',
            direccion = '$direccion',
            telefono = '$telefono',
            encargado = '$encargado',
            tipo_impresora = '$tipo_impresora',
            marca = '$marca',
            modelo = '$modelo',
            serial = '$serial',
            reporte_tecnico = '$reporte_tecnico',
            observaciones = '$observaciones'

            WHERE id = '$id'";
        mysqli_query($connection,$updateSql);
        echo $id;
        if ($connection->query($updateSql) === TRUE) {
            echo '<script>window.location.href = "../../../pages/mantenimientos/impresoras/mantenimientosImpresoras.php"</script>';
        }else {
            echo "ERROR";
        }

?>