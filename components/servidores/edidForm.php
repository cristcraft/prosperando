<?php
    require_once("../../connection/connection.php");
    
    //importa la conexion con todas las subtablas
    require_once("../../tables/tables.php");

        $id = $_POST['id'];
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

        $updateSql="UPDATE `servidores` SET `serial`='$serial',`marca`='$marca',`modelo`='$modelo',`fecha`='$fecha',`nombre_equipo`='$nombre_equipo',`procesador`='$procesador',`generacion`='$generacion',`nucleos`='$nucleos',`velocidad_mz`='$velocidad_mz',`ram`='$ram',`tipo_memoria`='$tipo_memoria',`adaptador_multimedia`='$adaptador_multimedia',`adaptador_video`='$adaptador_video',`red_ethernet`='$red_ethernet',`mac`='$mac',`ip`='$ip',`red_ethernet1`='$red_ethernet1',`mac1`='$mac1',`ip1`='$ip1',`so`='$so',`licencia`='$licencia',`total_discos`='$total_discos',`marca1`='$marca1',`capacidad1`='$capacidad1',`marca2`='$marca2',`capacidad2`='$capacidad2',`marca3`='$marca3',`capacidad3`='$capacidad3',`marca4`='$marca4',`capacidad4`='$capacidad4',`marca5`='$marca5',`capacidad5`='$capacidad5',`marca6`='$marca6',`capacidad6`='$capacidad6',`marca7`='$marca7',`capacidad7`='$capacidad7',`marca8`='$marca8',`capacidad8`='$capacidad8',`marca9`='$marca9',`capacidad9`='$capacidad9',`marca10`='$marca10',`capacidad10`='$capacidad10',`marca11`='$marca11',`capacidad11`='$capacidad11',`marca12`='$marca12',`capacidad12`='$capacidad12',`marca13`='$marca13',`capacidad13`='$capacidad13',`marca14`='$marca14',`capacidad14`='$capacidad14',`marca15`='$marca15',`capacidad15`='$capacidad15',`marca16`='$marca16',`capacidad16`='$capacidad16' WHERE id = '$id'";
        mysqli_query($connection,$updateSql);
        echo $id;
        if ($connection->query($updateSql) === TRUE) {
            echo '<script>window.location.href = "../../pages/servidores/servidores.php"</script>';
        }else{
            //Mostrar el error que se genero al intentar conectar con la bd
            echo '
            <style>
                .error{
                    font-weight: bold;
                }
                p{
                    margin:30px;
                }
                a{
                    color: white;
                    background-color:red;
                    padding: 20px;
                    text-decoration: none;
                    border-radius: 15px;
                    margin:30px;
                }
            </style>
            <p class="error">'. mysqli_error($connection). '</p>
            <p class="codigo">'. $updateSql . '</p>
            <a href="../../pages/servidores/servidores.php">Volver</a>
            <script>
                localStorage.setItem("change", "error")
            </script>
        ';
        }

?>