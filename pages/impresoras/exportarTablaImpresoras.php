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
    require_once('../../connection/connection.php');
    require_once('../../tables/tables.php');
    header("Pragma: public");
    header("Expires: 0");
    $filename = "Impresoras.xls";
    header("Content-type: application / vnd.ms-excel");
    header("Content-Disposition: attachment; filename=$filename");
    header("Pragma: no-cache");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Impresoras</title>
</head>

<body id="body">

    <div class="container-fluid d-flex flex-column align-items-center mt-3">
    <h1>Impresoras</h1>
        <div class="tabla">
            <table id="equipos" class="table text-center mt-4">
                <thead>
                    <tr class="bg-primary text-white">
                        <th scope="col">ID</th>
                        <th scope="col">Sucursal</th>
                        <th scope="col">Area</th>
                        <th scope="col">Tipo de impresora</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Serial</th>
                        <th scope="col">Ip</th>
                        <th scope="col">MAC</th>
                        <th scope="col">Nombre del host</th>
                        <th scope="col">Novedades</th>
                        <th scope="col">Tipo de papel</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if($impresorasResult ->num_rows>0){
                            while($row = $impresorasResult ->fetch_assoc()){ 
                    ?>
                    <tr id="tr<?php echo $row['id']?>">
                        <td><?php echo $row['id']  ?></td>
                        <td><?php echo $row['sucursal'] ?></td>
                        <td><?php echo $row['area'] ?></td>
                        <td><?php echo $row['tipo']?></td>
                        <td><?php echo $row['marca']?></td>
                        <td><?php echo $row['modelo'];  ?></td>
                        <td><?php echo $row["serial"]  ?></td>
                        <td><?php echo $row['ip']?></td>
                        <td><?php echo $row['mac']?></td>
                        <td><?php echo $row['nombre_host']?></td>
                        <td><?php echo $row['novedades']?></td>
                        <td class="long"><?php echo $row['tipo_papel']?></td>
                        
                    </tr>
                    <?php }} ?>
                </tbody>
            </table>
        </div>
    </div>
    
</body>

</html>