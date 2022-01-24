<?php
    require_once("../../connection/connection.php");
    
    //importa la conexion con todas las subtablas
    require_once("../../tables/tables.php");
    
    $editFormAction = $_SERVER['PHP_SELF'];

        $nuevoCodigo_administrativo = $_POST['nuevoCodigo_administrativo'];
        $viejoCodigo_administrativo = $_POST['viejoCodigo_administrativo'];
        $sucursal = $_POST['sucursal'];
        $area = $_POST['area'];
        $funcionario_responsable = $_POST['funcionario_responsable'];
        $nombre_equipo = $_POST['nombre_equipo'];
        $lugar_de_trabajo = $_POST['lugar_trabajo'];
        $paquete_ofimatico = $_POST['paquete_ofimatico'];
        $version_office = $_POST['version_office'];
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
        $marca_monitor = $_POST['marca_monitor'];
        $tipo_monitor = $_POST['tipo_monitor'];
        $serial_monitor = $_POST['serial_monitor'];
        $modelo_monitor = $_POST['modelo_monitor'];
        $pulgadas = $_POST['pulgadas'];
        $cables_poder = $_POST['cables_poder'];
        $vga = $_POST['vga'];
        $pass_core = $_POST['pass_core'];
        $bateria = $_POST['bateria'];
        $carga_electrica = $_POST['carga_electrica'];
        $cargador = $_POST['cargador'];
        $voltaje = $_POST['voltaje'];$_POST['salida_plug'];
        $salida_plug =$_POST['salida_plug'];
        $os = $_POST['os'];
        $bit = $_POST['bit'];
        $licencia = $_POST['licencia'];

        $updateSql="UPDATE equipos SET
            codigo_administrativo = '$nuevoCodigo_administrativo',
            sucursal = '$sucursal',
            area = '$area',
            funcionario_responsable = '$funcionario_responsable',
            nombre_equipo = '$nombre_equipo',
            lugar_de_trabajo = '$lugar_de_trabajo',
            paquete_ofimatico  = '$paquete_ofimatico',
            version_office = '$version_office',
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
            mac = '$mac',
            marca_monitor = '$marca_monitor',
            tipo_monitor = '$tipo_monitor',
            serial_monitor = '$serial_monitor',
            modelo_monitor = '$modelo_monitor',
            pulgadas = '$pulgadas',
            cables_poder = '$cables_poder',
            vga = '$vga',
            pass_core = '$pass_core',
            bateria = '$bateria',
            carga_electrica = '$carga_electrica',
            cargador = '$cargador',
            voltaje = '$voltaje',
            salida_plug = '$salida_plug',
            os = '$os',
            bit = '$bit',
            licencia = '$licencia'

            WHERE codigo_administrativo = '$viejoCodigo_administrativo'";
        mysqli_query($connection,$updateSql);

        if ($connection->query($updateSql) === TRUE) {
            echo '<script>window.location.href = "../../pages/equipos/equipos.php"</script>';
        }else {
            /*Verificar si el codigo que se ha introducido ya existe en la tabal equipos */
            $codigoRepetido = "SELECT * FROM equipos WHERE codigo_administrativo = '$viejoCodigo_administrativo' ";
            $result = $connection->query($codigoRepetido);

            /*Si hay algun equipo con el codigo que se puso la condicion se cumplira porque el codigo ya existe */
            if($result ->num_rows>0){
                echo '
                <script>
                    alert("El codigo introducido ya existe")
                    localStorage.setItem("change", "error")
                    window.location.href = "../../pages/equipos/equipos.php"
                </script>
            ';
            }else{
                echo "ERROR";
            };
        }

?>