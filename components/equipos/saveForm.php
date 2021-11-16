<?php 
require_once("../../connection/connection.php");

//importa la conexion con todas las subtablas
require_once("../../tables/tables.php");

    $editFormAction = $_SERVER['PHP_SELF'];

        $codigo_administrativo = $_POST['codigo_administrativo'];
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
        $marca_monitor = $_POST['marca_monitor'];
        $tipo_monitor =$_POST['tipo_monitor'];
        $serial_monitor = $_POST['serial_monitor'];
        $modelo_monitor = $_POST['modelo_monitor'];
        $pulgadas = $_POST['pulgadas'];
        $cables_poder = $_POST['cables_poder'];
        $vga = $_POST['vga'];
        $pass_core = $_POST['pass_core'];
        $bateria = $_POST['bateria'];
        $carga_electrica = $_POST['carga_electrica'];
        $cargador = $_POST['cargador'];
        $voltaje = $_POST['voltaje'];
        $salida_plug =$_POST['salida_plug'];
        $os = $_POST['os'];
        $bit = $_POST['bit'];
        $licencia = $_POST['licencia'];


        $insertsql="INSERT INTO 
        equipos(
            codigo_administrativo,
            sucursal,
            area,
            funcionario_responsable,
            nombre_equipo,
            lugar_de_trabajo,
            novedades,
            tipo_equipo,
            marca,
            modelo,
            serial,
            fecha_fabricacion,
            procesador,
            generacion_procesador,
            nucleos,
            velocidad_mz,
            ram_gb,
            tipo_memoria,
            adaptador_multimedia,
            adaptador_video,
            marca_disco_duro,
            capacidad_disco,
            tipo_disco,
            red_ethernet,
            ip,
            mac_ethernet,
            red_wifi,
            mac,
            marca_monitor,
            tipo_monitor,
            serial_monitor,
            modelo_monitor,
            pulgadas,
            cables_poder,
            vga,
            pass_core,
            bateria,
            carga_electrica,
            cargador,
            voltaje,
            salida_plug,
            os,
            bit,
            licencia
            ) 
        VALUES( 
            '$codigo_administrativo',
            '$sucursal',
            '$area',
            '$funcionario_responsable',
            '$nombre_equipo',
            '$lugar_de_trabajo',
            '$novedades',
            '$tipo_equipo',
            '$marca',
            '$modelo',
            '$serial',
            '$fecha_fabricacion',
            '$procesador',
            '$generacion_procesador',
            '$nucleos',
            '$velocidad_mz',
            '$ram_gb',
            '$tipo_memoria',
            '$adaptador_multimedia',
            '$adaptador_video',
            '$marca_disco_duro',
            '$capacidad_disco',
            '$tipo_disco',
            '$red_ethernet',
            '$ip',
            '$mac_ethernet',
            '$red_wifi',
            '$mac',
            '$marca_monitor',
            '$tipo_monitor',
            '$serial_monitor',
            '$modelo_monitor',
            '$pulgadas',
            '$cables_poder',
            '$vga',
            '$pass_core',
            '$bateria',
            '$carga_electrica',
            '$cargador',
            '$voltaje',
            '$salida_plug',
            '$os',
            '$bit',
            '$licencia'
            )";

        if ($connection->query($insertsql) === TRUE) {
            echo '<script>window.location.href = "../../pages/equipos/equipos.php"</script>';
        }else {
            /*Verificar si el codigo que se ha introducido ya existe en la tabal equipos */
            $codigoRepetido = "SELECT * FROM equipos WHERE codigo_administrativo = '$codigo_administrativo' ";
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