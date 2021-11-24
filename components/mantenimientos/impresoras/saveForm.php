<?php 
    require_once("../../../connection/connection.php");

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

    $insertsql = "INSERT INTO mantenimientos_impresoras(
    ciudad,
    cliente,
    fecha,
    direccion,
    telefono,
    encargado,
    tipo_impresora,
    marca,
    modelo,
    serial) 
    VALUES (
    '$ciudad',
    '$cliente',
    '$fecha',
    '$direccion',
    '$telefono',
    '$encargado',
    '$tipo_impresora',
    '$marca',
    '$modelo',
    '$serial')";


    if ($connection->query($insertsql) === TRUE) {
        echo '<script>window.location.href = "../../../pages/mantenimientos/impresoras/mantenimientosImpresoras.php"</script>';
    }else {
        echo "ERROR";
    }
        
?>