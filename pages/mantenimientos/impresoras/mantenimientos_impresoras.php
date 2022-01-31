<?php 
//Requiere el inicio de sesion
session_start();

if(!isset($_SESSION['user_logeado'])){
    echo '
            <script>
                alert("No has iniciado sesión")
                window.location.href = "../../index.php"
            </script>
        ';
        session_destroy();
        die();
}
    include('../../../connection/connection.php');
    include('../../../tables/tables.php');

    header("Pragma: public");
    header("Expires: 0");
    $filename = "Mantenimiento_Impresoras.xls";
    header("Content-type: application / vnd.ms-excel");
    header("Content-Disposition: attachment; filename=$filename");
    header("Pragma: no-cache");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<div class="mantenimientos">
            <div class="mantenimientoAmbos d-flex flex-wrap justify-content-center d-none" id="mantenimientoAmbos">
            <table class="text-center mt-4">
                <thead>
                    <tr>
                        <th scope="col">Mantenimiento <?php echo $row['tipo_mantenimiento'] ?></th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Nombre Encargado</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Tipo de impresora</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Serial</th>
                        <th scope="col">Reporte tecnico</th>
                        <th scope="col">Observaciones</th>
                        <th scope="col">Tipo de mantenimiento</th>
                    </tr>
                </thead>
                <tbody>
                <?php  while($row = $mantenimientosImpresorasResult ->fetch_assoc()){  ?>
                <tr>
                    <th> </th>
                    <td><?php echo $row['ciudad'] ?></td>
                    <td><?php echo $row['direccion'] ?></td>
                    <td><?php echo $row['telefono'] ?></td>
                    <td><?php echo $row['nombre_encargado'] ?></td>
                    <td><?php echo $row['fecha'] ?></td>
                    <td><?php echo $row['cliente'] ?></td>
                    <td><?php echo $row['tipo_impresora'] ?></td>
                    <td><?php echo $row['marca'] ?></td>
                    <td><?php echo $row['modelo'] ?></td>
                    <td><?php echo $row['serial'] ?></td>
                    <td><?php echo $row['reporte_tecnico'] ?></td>
                    <td><?php echo $row['observaciones'] ?></td>
                    <td><?php echo $row['tipo_mantenimiento'] ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>

            </div>
        </div>
</body>
</html>