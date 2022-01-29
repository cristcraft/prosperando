<?php 
require_once("../../connection/connection.php");

//importa la conexion con todas las subtablas
require_once("../../tables/tables.php");

        $sucursal = $_POST['sucursal'];
        $area = $_POST['area'];
        $funcionario_responsable = $_POST['funcionario_responsable'];
        $novedades = $_POST['novedades'];
        $marcas = $_POST['marcas'];
        $modelo = $_POST['modelo'];
        $procesador = $_POST['procesadores_tablets'];
        $nucleos = $_POST['nucleos'];
        $ram = $_POST['ram'];
        $resolucion_tablets = $_POST['resolucion_tablets'];
        $serial = $_POST['serial'];
        $imei = $_POST['imei'];
        $bateria = $_POST['bateria'];
        $rom = $_POST['rom'];
        $camara_frontal = $_POST['camara_frontal'];
        $camara_trasera = $_POST['camara_trasera'];
        $os_version = $_POST['os_version'];

        $insertsql="INSERT INTO 
        tablets(
            sucursal,
            area,
            funcionario_responsable,
            novedades,
            marca,
            modelo,
            procesador,
            nucleos,
            ram,
            resolucion,
            serial,
            imei,
            bateria,
            rom,
            camara_frontal,
            camara_trasera,
            os
            ) 
        VALUES( 
            '$sucursal',
            '$area',
            '$funcionario_responsable',
            '$novedades',
            '$marcas',
            '$modelo',
            '$procesador',
            '$nucleos',
            '$ram',
            '$resolucion_tablets',
            '$serial',
            '$imei',
            '$bateria',
            '$rom',
            '$camara_frontal',
            '$camara_trasera',
            '$os_version'
                )";

        if ($connection->query($insertsql) === TRUE) {
            echo '<script>window.location.href = "../../pages/tablets/tablets.php"</script>';
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
            <p class="codigo">'. $insertsql . '</p>
            <a href="../../pages/tablets/tablets.php">Volver</a>
            <script>
                localStorage.setItem("change", "error")
            </script>
        ';
        }
        
?>