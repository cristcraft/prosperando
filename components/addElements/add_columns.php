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

    $estructuraTabla = "DESCRIBE equipos";
    $resultEstructuraTabla = $connection->query($estructuraTabla);

    $accion = $_GET['accion'];  
    $viejoNombre = $_GET['viejoNombre'];
    $tipo = "";
    $default = "";

    while($rowResultTabla = mysqli_fetch_array($resultEstructuraTabla)){

        if($rowResultTabla['Field'] == $viejoNombre && $rowResultTabla['Null'] == 'YES' && $rowResultTabla['Default'] !== 'select' && $rowResultTabla['Type'][0] != 'i'){
            $tipo = $rowResultTabla['Type'];
            $default = "NULL";
        }elseif($rowResultTabla['Field'] == $viejoNombre && $rowResultTabla['Null'] == 'YES' && $rowResultTabla['Default'] !== 'select' && $rowResultTabla['Type'][0] == 'i'){
            $tipo = $rowResultTabla['Type'];
            $default = "NULL";
        }elseif($rowResultTabla['Field'] == $viejoNombre && $rowResultTabla['Null'] == 'YES' && $rowResultTabla['Default'] == 'select'){
            $default = "select";
        }   
    }

    if($accion == 'editar'){
        $nuevoNombre = $_GET['nuevoNombre'];
        if($default !== 'select' &&  $tipo[0] != 'i'){
            $sql = "ALTER TABLE `equipos` CHANGE `$viejoNombre` `$nuevoNombre` $tipo CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT $default";
            mysqli_query($connection,$sql);
            echo "<script>
                    alert('Cambio realizado con exito')
                    window.location.href = '../../pages/equipos/add_columns.php'
                </script>";
        }elseif($default !== 'select' &&  $tipo[0] == 'i'){
            $sql = "ALTER TABLE `equipos` CHANGE `$viejoNombre` `$nuevoNombre` $tipo NULL DEFAULT $default";
            mysqli_query($connection,$sql);
            echo "<script>
                    alert('Cambio realizado con exito')
                    window.location.href = '../../pages/equipos/add_columns.php'
                </script>";
        }else{
            echo "<script>
                alert('Este tipo de tabla no puede ser modificado')
                window.location.href = '../../pages/equipos/add_columns.php'
                </script>";
        }
    }

    if($accion == 'agregar'){
        $nombre = $_GET['nombre'];
        $tipo = $_GET['tipo'];
        $sql = "ALTER TABLE `equipos` ADD `$nombre` $tipo NULL DEFAULT NULL";
        mysqli_query($connection,$sql);
        echo "<script>
                    alert('Cambio realizado con exito')
                    window.location.href = '../../pages/equipos/add_columns.php'
                </script>";
    }

    if($accion == 'eliminar'){
        $sql = "ALTER TABLE `equipos` DROP `$viejoNombre`";
        echo $sql;
        mysqli_query($connection,$sql);
            echo "<script>
                    alert('Cambio realizado con exito')
                    window.location.href = '../../pages/equipos/add_columns.php'
                </script>";
    }else{
        echo "<script>
                    alert('No se realizo ningun cambio')
                    window.location.href = '../../pages/equipos/add_columns.php'
                </script>";
    }
    
?>

