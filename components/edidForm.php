<?php
    require_once("../connection/connection.php");
    
    //importa la conexion con todas las subtablas
    require_once("../tables/tables.php");
    
    $editFormAction = $_SERVER['PHP_SELF'];

        $id = $_POST['id'];
        $sucursal = $_POST['sucursal'];
        $area = $_POST['area'];
        $funcionario_responsable = $_POST['funcionario_responsable'];
        $nombre_equipo = $_POST['nombre_equipo'];
        $lugar_de_trabajo = $_POST['lugar_trabajo'];
        $novedades = $_POST['novedades'];
        $tipo_equipo = $_POST['tipo_equipo'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $serial = $_POST['serial'];
        $fecha_fabricacion = $_POST['fecha_fabricacion'];
        $procesador = $_POST['procesador'];
        $generacion_procesador = $_POST['generacion_procesador'];
        $nucleos = $_POST['nucleos'];
        $velocidad_mz = $_POST['velocidad_mz'];
        $ram_gb = $_POST['ram_gb'];
        $tipo_memoria = $_POST['tipo_memoria'];
        $adaptador_multimedia = $_POST['adaptador_multimedia'];
        $adaptador_video = $_POST['adaptador_video'];
        $marca_disco_duro = $_POST['marca_disco_duro'];
        $capacidad_disco = $_POST['capacidad_disco'];
        $tipo_disco = $_POST['tipo_disco'];
        $red_ethernet = $_POST['red_ethernet'];
        $ip = $_POST['ip'];
        $mac_ethernet = $_POST['mac_ethernet'];
        $red_wifi = $_POST['red_wifi'];
        $mac = $_POST['mac'];



        $updateSql="UPDATE equipos SET
            sucursal = '$sucursal',
            area = '$area',
            funcionario_responsable = '$funcionario_responsable',
            nombre_equipo = '$nombre_equipo',
            lugar_de_trabajo = '$lugar_de_trabajo',
            novedades = '$novedades',
            tipo_equipo = '$tipo_equipo',
            marca = '$marca',
            modelo = '$modelo',
            serial = '$serial',
            fecha_fabricacion = '$fecha_fabricacion',
            procesador = '$procesador',
            generacion_procesador = '$generacion_procesador',
            nucleos = '$nucleos',
            velocidad_mz = '$velocidad_mz',
            ram_gb = '$ram_gb',
            tipo_memoria = '$tipo_memoria',
            adaptador_multimedia = '$adaptador_multimedia',
            adaptador_video = '$adaptador_video',
            marca_disco_duro = '$marca_disco_duro',
            capacidad_disco = '$capacidad_disco',
            tipo_disco = '$tipo_disco',
            red_ethernet ='$red_ethernet',
            ip = '$ip',
            mac_ethernet = '$mac_ethernet',
            red_wifi = '$red_wifi',
            mac = '$mac'

            WHERE id = '$id'";
        mysqli_query($connection,$updateSql);
        echo $id;
        if ($connection->query($updateSql) === TRUE) {
            echo '<script>window.location.href = "../pages/equipos.php"</script>';
        }else {
            echo "ERROR";
        }

?>