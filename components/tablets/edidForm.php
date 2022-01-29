<?php
    require_once("../../connection/connection.php");
    
    //importa la conexion con todas las subtablas
    require_once("../../tables/tables.php");

        $id = $_POST['id'];
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

        $updateSql="UPDATE tablets SET
            sucursal = '$sucursal',
            area = '$area',
            funcionario_responsable =  '$funcionario_responsable',
            novedades = '$novedades',
            marca = '$marcas',
            modelo = '$modelo',
            procesador = '$procesador',
            nucleos = '$nucleos',
            ram = '$ram',
            resolucion = '$resolucion_tablets',
            serial = '$serial',
            imei = '$imei',
            bateria = '$bateria',
            rom = '$rom',
            camara_frontal = '$camara_frontal',
            camara_trasera = '$camara_trasera',
            os = '$os_version'

            WHERE id = '$id'";
        mysqli_query($connection,$updateSql);
        echo $id;
        if ($connection->query($updateSql) === TRUE) {
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
            <p class="codigo">'. $updateSql . '</p>
            <a href="../../pages/tablets/tablets.php">Volver</a>
            <script>
                localStorage.setItem("change", "error")
            </script>
        ';
        }
?>