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
    require_once("../../connection/connection.php");

    $sql = "SELECT * FROM equipos";
    $result = $connection->query($sql);

    header("Pragma: public");
    header("Expires: 0");
    $filename = "Equipos.xls";
    header("Content-type: application / vnd.ms-excel");
    header("Content-Disposition: attachment; filename=$filename");
    header("Pragma: no-cache");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Equipos</title>
</head>

<body id="body">

    <div class="container-fluid d-flex flex-column align-items-center mt-3">
    <h1>Equipos</h1>
        <div class="tabla">
            <table id="equipos" class="table  text-center mt-4">
                <thead>
                    <tr class="bg-primary text-white">
                        <th scope="col">ID</th>
                        <th scope="col">Sucursal</th>
                        <th scope="col">Area</th>
                        <th scope="col">Funcionario Responsable</th>
                        <th scope="col">Nombre Equipo</th>
                        <th scope="col">Lugar de trabajo</th>
                        <th scope="col">Novedades</th>
                        <th scope="col">Tipo de equipo</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Serial</th>
                        <th scope="col">Fecha de fabricacion</th>
                        <th scope="col">Procesador</th>
                        <th scope="col">Generacion procesador</th>
                        <th scope="col">Nucleos</th>
                        <th scope="col">Velocidad en mz</th>
                        <th scope="col">RAM en GB</th>
                        <th scope="col">Tipo de RAM</th>
                        <th scope="col">Adaptador multimedia</th>
                        <th scope="col">Adaptador video</th>
                        <th scope="col">Marca del disco duro</th>
                        <th scope="col">Capacidad del disco</th>
                        <th scope="col">Tipo de disco</th>
                        <th scope="col">Red ethernet</th>
                        <th scope="col">IP</th>
                        <th scope="col">MAC ethernet</th>
                        <th scope="col">Red wifi</th>
                        <th scope="col">MAC</th>
                        <th scope="col">Marca del monitor</th>
                        <th scope="col">Tipo monitor</th>
                        <th scope="col">Serial monitor</th>
                        <th scope="col">Modelo monitor</th>
                        <th scope="col">Pulgadas monitor</th>
                        <th scope="col">Cables de poder</th>
                        <th scope="col">vga</th>
                        <th scope="col">Pass core</th>
                        <th scope="col">Bateria</th>
                        <th scope="col">Carga electrica</th>
                        <th scope="col">Cargador</th>
                        <th scope="col">Voltaje</th>
                        <th scope="col">Salida plug</th>
                        <th scope="col">Sistema operativo</th>
                        <th scope="col">Bits</th>
                        <th scope="col">Licencia</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if($result ->num_rows>0){
                            while($row = $result ->fetch_assoc()){ 
                    ?>
                    <tr id="tr<?php echo $row['id']  ?>">
                        <td><?php echo $row['id']  ?></td>
                        <td><?php echo $row['sucursal'] ?></td>
                        <td><?php echo $row['area'] ?></td>
                        <td><?php echo $row['funcionario_responsable']?></td>
                        <td><?php echo $row['nombre_equipo']?></td>
                        <td><?php echo $row['lugar_de_trabajo']?></td>
                        <td><?php echo $row['novedades']?></td>
                        <td><?php echo $row['tipo_equipo']?></td>
                        <td><?php echo $row['marca'];  ?></td>
                        <td><?php echo $row["modelo"]  ?></td>
                        <td><?php echo $row['serial']?></td>
                        <td><?php echo $row['fecha_fabricacion']?></td>
                        <td><?php echo $row['procesador']?></td>
                        <td><?php echo $row['generacion_procesador']?></td>
                        <td><?php echo $row['nucleos']?></td>
                        <td><?php echo $row['velocidad_mz']?></td>
                        <td><?php echo $row['ram_gb']?></td>
                        <td><?php echo $row['tipo_memoria']?></td>
                        <td><?php echo $row['adaptador_multimedia']?></td>
                        <td><?php echo $row['adaptador_video']?></td>
                        <td><?php echo $row['marca_disco_duro']?></td>
                        <td><?php echo $row['capacidad_disco']?></td>
                        <td><?php echo $row['tipo_disco']?></td>
                        <td><?php echo $row['red_ethernet']?></td>
                        <td><?php echo $row['ip']?></td>
                        <td><?php echo $row['mac_ethernet']?></td>
                        <td><?php echo $row['red_wifi']?></td>
                        <td><?php echo $row['mac']?></td>
                        <td><?php echo $row['marca_monitor']?></td>
                        <td><?php echo $row['tipo_monitor']?></td>
                        <td><?php echo $row['serial_monitor']?></td>
                        <td><?php echo $row['modelo_monitor']?></td>
                        <td><?php echo $row['pulgadas']?></td>
                        <td><?php echo $row['cables_poder']?></td>
                        <td><?php echo $row['vga']?></td>
                        <td><?php echo $row['pass_core']?></td>
                        <td><?php echo $row['bateria']?></td>
                        <td><?php echo $row['carga_electrica']?> mAh</td>
                        <td><?php echo $row['cargador']?> </td>
                        <td><?php echo $row['voltaje']?></td>
                        <td><?php echo $row['salida_plug']?></td>
                        <td><?php echo $row['os']?></td>
                        <td><?php echo $row['bit']?>bits</td>
                        <td><?php echo $row['licencia']?></td>
                        
                    </tr>
                    <?php }} ?>
                </tbody>
            </table>
    </div>

</body>

</html>