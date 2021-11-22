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
    $filename = "Servidores.xls";
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
    <title>Servidores</title>
</head>

<body id="body">
    <div class="container-fluid d-flex flex-column align-items-center mt-3">
        <h1>Servidores</h1>

        <div class="tabla">
            <table id="equipos" class="table text-center mt-4">
                <thead>
                    <tr class="bg-primary text-white">
                        <th scope="col">ID</th>
                        <th scope="col">Serial</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">fecha</th>
                        <th scope="col">nombre_equipo</th>
                        <th scope="col">Procesador</th>
                        <th scope="col">generacion</th>
                        <th scope="col">Nucleos</th>
                        <th scope="col">velocidad_mz</th>
                        <th scope="col">ram</th>
                        <th scope="col">tipo_memoria</th>
                        <th scope="col">adaptador_multimedia</th>
                        <th scope="col">adaptador_video</th>
                        <th scope="col">red_ethernet</th>
                        <th scope="col">mac</th>
                        <th scope="col">ip</th>
                        <th scope="col">red_ethernet1</th>
                        <th scope="col">mac1</th>
                        <th scope="col">ip1</th>
                        <th scope="col">so</th>
                        <th scope="col">licencia</th>
                        <th scope="col">total_discos</th>
                        <?php
                        for ($i=1; $i <= 16; $i++) { 
                            echo "
                            <th scope='col'>Marca $i</th>
                            <th scope='col'>capacidad $i</th>";
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if($servidoresResult ->num_rows>0){
                            while($row = $servidoresResult ->fetch_assoc()){ 
                    ?>
                    <tr id="tr<?php echo $row['id']?>">
                        <td><?php echo $row['id']  ?></td>
                        <td><?php echo $row['serial'] ?></td>
                        <td><?php echo $row['marca'] ?></td>
                        <td><?php echo $row['modelo']?></td>
                        <td><?php echo $row['fecha']?></td>
                        <td><?php echo $row['nombre_equipo'];  ?></td>
                        <td><?php echo $row["procesador"]  ?></td>
                        <td><?php echo $row['generacion']?></td>
                        <td><?php echo $row['nucleos']?></td>
                        <td><?php echo $row['velocidad_mz']?></td>
                        <td><?php echo $row['ram']?></td>
                        <td><?php echo $row['tipo_memoria']?></td>
                        <td><?php echo $row['adaptador_multimedia']?></td>
                        <td><?php echo $row['adaptador_video']?></td>
                        <td><?php echo $row['red_ethernet']?></td>
                        <td><?php echo $row['mac']?></td>
                        <td><?php echo $row['ip']?></td>
                        <td><?php echo $row['red_ethernet1']?></td>
                        <td><?php echo $row['mac1']?></td>
                        <td><?php echo $row['ip1']?></td>
                        <td><?php echo $row['so']?></td>|
                        <td><?php echo $row['licencia']?></td>
                        <td><?php echo $row['total_discos']?></td>
                        <td><?php echo $row['marca1'] ?></td>
                        <td><?php echo $row['capacidad1']?></td>
                        <td><?php echo $row['marca2'] ?></td>
                        <td><?php echo $row['capacidad2']?></td>
                        <td><?php echo $row['marca3'] ?></td>
                        <td><?php echo $row['capacidad3']?></td>
                        <td><?php echo $row['marca4'] ?></td>
                        <td><?php echo $row['capacidad4']?></td>
                        <td><?php echo $row['marca5'] ?></td>
                        <td><?php echo $row['capacidad5']?></td>
                        <td><?php echo $row['marca6'] ?></td>
                        <td><?php echo $row['capacidad6']?></td>
                        <td><?php echo $row['marca7'] ?></td>
                        <td><?php echo $row['capacidad7']?></td>
                        <td><?php echo $row['marca8'] ?></td>
                        <td><?php echo $row['capacidad8']?></td>
                        <td><?php echo $row['marca9'] ?></td>
                        <td><?php echo $row['capacidad9']?></td>
                        <td><?php echo $row['marca10'] ?></td>
                        <td><?php echo $row['capacidad10']?></td>
                        <td><?php echo $row['marca11'] ?></td>
                        <td><?php echo $row['capacidad11']?></td>
                        <td><?php echo $row['marca12'] ?></td>
                        <td><?php echo $row['capacidad12']?></td>
                        <td><?php echo $row['marca13'] ?></td>
                        <td><?php echo $row['capacidad13']?></td>
                        <td><?php echo $row['marca14'] ?></td>
                        <td><?php echo $row['capacidad14']?></td>
                        <td><?php echo $row['marca15'] ?></td>
                        <td><?php echo $row['capacidad15']?></td>
                        <td><?php echo $row['marca16'] ?></td>
                        <td><?php echo $row['capacidad16']?></td>
                    </tr>
                    <?php }} ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>