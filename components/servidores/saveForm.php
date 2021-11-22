<?php 
require_once("../../connection/connection.php");

//importa la conexion con todas las subtablas
require_once("../../tables/tables.php");

        $serial = $_POST['serial'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $fecha = $_POST['fecha'];
        $nombre_equipo = $_POST['nombre_equipo'];
        $procesador = $_POST['procesador'];
        $generacion = $_POST['generacion'];
        $nucleos = $_POST['nucleos'];
        $velocidad_mz = $_POST['velocidad_mz'];
        $ram = $_POST['ram'];
        $tipo_memoria = $_POST['tipo_memoria'];
        $adaptador_multimedia = $_POST['adaptador_multimedia'];
        $adaptador_video = $_POST['adaptador_video'];
        $red_ethernet = $_POST['red_ethernet'];
        $mac = $_POST['mac'];
        $ip = $_POST['ip'];
        $red_ethernet1 = $_POST['red_ethernet1'];
        $mac1 = $_POST['mac1'];
        $ip1 = $_POST['ip1'];
        $so = $_POST['so'];
        $licencia = $_POST['licencia'];
        $total_discos = $_POST['total_discos'];
        $marca1 = $_POST['marca1'];
        $marca2 = $_POST['marca2'];
        $marca3 = $_POST['marca3'];
        $marca4 = $_POST['marca4'];
        $marca5 = $_POST['marca5'];
        $marca6 = $_POST['marca6'];
        $marca7 = $_POST['marca7'];
        $marca8 = $_POST['marca8'];
        $marca9 = $_POST['marca9'];
        $marca10 = $_POST['marca10'];
        $marca11 = $_POST['marca11'];
        $marca12 = $_POST['marca12'];
        $marca13 = $_POST['marca13'];
        $marca14 = $_POST['marca14'];
        $marca15 = $_POST['marca15'];
        $marca16 = $_POST['marca16'];
        $capacidad1 = $_POST['capacidad1'];
        $capacidad2 = $_POST['capacidad2'];
        $capacidad3 = $_POST['capacidad3'];
        $capacidad4 = $_POST['capacidad4'];
        $capacidad5 = $_POST['capacidad5'];
        $capacidad6 = $_POST['capacidad6'];
        $capacidad7 = $_POST['capacidad7'];
        $capacidad8 = $_POST['capacidad8'];
        $capacidad9 = $_POST['capacidad9'];
        $capacidad10 = $_POST['capacidad10'];
        $capacidad11 = $_POST['capacidad11'];
        $capacidad12 = $_POST['capacidad12'];
        $capacidad13 = $_POST['capacidad13'];
        $capacidad14 = $_POST['capacidad14'];
        $capacidad15 = $_POST['capacidad15'];
        $capacidad16 = $_POST['capacidad16'];

        $insertsql="INSERT INTO `servidores`(`serial`, `marca`, `modelo`, `fecha`, `nombre_equipo`, `procesador`, `generacion`, `nucleos`, `velocidad_mz`, `ram`, `tipo_memoria`, `adaptador_multimedia`, `adaptador_video`, `red_ethernet`, `mac`, `ip`, `red_ethernet1`, `mac1`, `ip1`, `so`, `licencia`, `total_discos`, `marca1`, `capacidad1`, `marca2`, `capacidad2`, `marca3`, `capacidad3`, `marca4`, `capacidad4`, `marca5`, `capacidad5`, `marca6`, `capacidad6`, `marca7`, `capacidad7`, `marca8`, `capacidad8`, `marca9`, `capacidad9`, `marca10`, `capacidad10`, `marca11`, `capacidad11`, `marca12`, `capacidad12`, `marca13`, `capacidad13`, `marca14`, `capacidad14`, `marca15`, `capacidad15`, `marca16`, `capacidad16`) VALUES ('$serial','$marca','$modelo','$fecha','$nombre_equipo','$procesador','$generacion','$nucleos','$velocidad_mz','$velocidad_mz','$ram','$tipo_memoria','$adaptador_multimedia','$adaptador_video','$red_ethernet','$mac','$ip','$red_ethernet1','$mac1','$ip1','$so','$licencia','$total_discos','$marca1','$capacidad1','$marca2','$capacidad2','$marca3','$capacidad3','$marca4','$capacidad4','$marca5','$capacidad5','$marca6','$capacidad6','$marca7','$capacidad7','$marca8','$capacidad8','$marca9','$capacidad9','$marca10','$capacidad10','$marca11','$capacidad11','$marca12','$capacidad12','$marca13','$capacidad13','$marca14','$capacidad14','$marca15','$capacidad15','$marca16','$capacidad16')";

        if ($connection->query($insertsql) === TRUE) {
            echo '<script>window.location.href = "../../pages/servidores/servidores.php"</script>';
        }else {
            echo "ERROR";
        }
        
?>