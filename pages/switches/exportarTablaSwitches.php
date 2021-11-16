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
    $filename = "Tablets.xls";
    header("Content-type: application / vnd.ms-excel");
    header("Content-Disposition: attachment; filename=$filename");
    header("Pragma: no-cache");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tablets</title>
</head>

<body id="body">
    <div class="container-fluid d-flex flex-column align-items-center mt-3">
        <h1>Tablets</h1>

        <div class="tabla">
            <table id="equipos" class="table text-center mt-4">
                <thead>
                    <tr class="bg-primary text-white">
                        <th scope="col">ID</th>
                        <th scope="col">Sucursal</th>
                        <th scope="col">Area</th>
                        <th scope="col">Funcionario Responsable</th>
                        <th scope="col">Novedades</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Procesador</th>
                        <th scope="col">Nucleos</th>
                        <th scope="col">RAM en GB</th>
                        <th scope="col">Resolucion</th>
                        <th scope="col">Serial</th>
                        <th scope="col">Imei</th>
                        <th scope="col">Bateria</th>
                        <th scope="col">Rom</th>
                        <th scope="col">Camara frontal</th>
                        <th scope="col">Camara trasera</th>
                        <th scope="col">OS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if($tabletssResult ->num_rows>0){
                            while($row = $tabletssResult ->fetch_assoc()){ 
                    ?>
                    <tr id="tr<?php echo $row['id']?>">
                        <td><?php echo $row['id']  ?></td>
                        <td><?php echo $row['sucursal'] ?></td>
                        <td><?php echo $row['area'] ?></td>
                        <td><?php echo $row['funcionario_responsable']?></td>
                        <td><?php echo $row['novedades']?></td>
                        <td><?php echo $row['marca'];  ?></td>
                        <td><?php echo $row["modelo"]  ?></td>
                        <td><?php echo $row['procesador']?></td>
                        <td><?php echo $row['nucleos']?></td>
                        <td><?php echo $row['ram']?></td>
                        <td><?php echo $row['resolucion']?></td>
                        <td><?php echo $row['serial']?></td>
                        <td><?php echo $row['imei']?></td>
                        <td><?php echo $row['bateria']?></td>
                        <td><?php echo $row['rom']?></td>
                        <td><?php echo $row['camara_frontal']?></td>
                        <td><?php echo $row['camara_trasera']?></td>
                        <td><?php echo $row['os']?></td>
                        
                    </tr>
                    <?php }} ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>