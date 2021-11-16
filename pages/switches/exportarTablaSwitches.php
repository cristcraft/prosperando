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
    $filename = "Switches.xls";
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
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Serial</th>
                        <th scope="col">Mac</th>
                        <th scope="col">Ip asignada</th>
                        <th scope="col">Manual</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if($switchesResult ->num_rows>0){
                            while($row = $switchesResult ->fetch_assoc()){ 
                    ?>
                    <tr id="tr<?php echo $row['id']?>">
                        <td><?php echo $row['id']  ?></td>
                        <td><?php echo $row['marca'] ?></td>
                        <td><?php echo $row['modelo'] ?></td>
                        <td><?php echo $row['serial']?></td>
                        <td><?php echo $row['mac']?></td>
                        <td><?php echo $row['ip']  ?></td>
                        <td><?php echo $row["manual"] ?></td>
                        
                    </tr>
                    <?php }} ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>