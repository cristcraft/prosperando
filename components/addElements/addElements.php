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

    require_once('../../tables/tables.php');
    require_once("../../connection/connection.php");

    $table = $_GET['table'];
    $accion = $_GET['accion'];
    $num = 0;

    if($table === 'sucursales'){
        /* si este en 0 significa que esta vacio y se redireccionara al render de la tabla correspondiente 
        en donde se efectuara alguna accion del crud y se rellenara el link*/
        if($accion === '0'){
            echo '<script> window.location.href = "../sucursal.php"</script>';
        }else if($accion === 'add'){
            $addSucursal = $_GET['sucursal'];
            $insertsql = "INSERT INTO sucursales (nombre) VALUES ('$addSucursal')";
            if ($connection->query($insertsql) === TRUE) {
                echo '<script>window.location.href = "../sucursal.php"</script>';
            }else {
                echo "ERROR";
            }
            

        }else if($accion === 'edit'){
            $new = $_GET['sucursal'];
            $old = $_GET['old'];
            $id = $_GET['id'];
            $editSql = "UPDATE sucursales SET nombre = '$new' WHERE id = '$id'";
            mysqli_query($connection,$editSql);

            if ($connection->query($editSql) === TRUE) {
                //actualizar los campos en todas las tablas
                $updateEquiposSql = "UPDATE equipos SET sucursal='$new' WHERE sucursal='$old'";
                mysqli_query($connection,$updateEquiposSql);
                $updateTabletsSql = "UPDATE tablets SET sucursal='$new' WHERE sucursal='$old'";
                mysqli_query($connection,$updateTabletsSql);

                echo '<script>window.location.href = "../sucursal.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'delete'){
            $deleteSql = $_GET['id'];
            $deleteSql = "DELETE FROM sucursales WHERE id = '$deleteSql'";
            mysqli_query($connection,$deleteSql);

            if ($connection->query($deleteSql) === TRUE) {
                echo '<script>window.location.href = "../sucursal.php"</script>';
            }else {
                echo "ERROR";
            }
        }
    }elseif ($table === 'areas_tablets') {
        /* si este en 0 significa que esta vacio y se redireccionara al render de la tabla correspondiente 
        en donde se efectuara alguna accion del crud y se rellenara el link*/
        if($accion === '0'){
            echo '<script> window.location.href = "../areas_tablets.php"</script>';
        }else if($accion === 'add'){
            $addAreas_tablets = $_GET['area'];
            $addSql = "INSERT INTO areas_tablets (area) VALUES ('$addAreas_tablets')";
            if ($connection->query($addSql) === TRUE) {
                echo '<script>window.location.href = "../areas_tablets.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'edit'){
            $new = $_GET['area'];
            $old = $_GET['old'];
            $id = $_GET['id'];
            $editSql = "UPDATE areas_tablets SET area = '$new' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
                //actualizar los campos en todas las tablas
                $updateTabletsSql = "UPDATE tablets SET area='$new' WHERE area='$old'";
                mysqli_query($connection,$updateTabletsSql);
                echo '<script>window.location.href = "../areas_tablets.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'delete'){
            $deleteSql = $_GET['id'];
            $deleteSql = "DELETE FROM areas_tablets WHERE id = '$deleteSql'";

            if ($connection->query($deleteSql) === TRUE) {
                echo '<script>window.location.href = "../areas_tablets.php"</script>';
            }else {
                echo "ERROR";
            }
        }
    }elseif ($table === 'marcas_tablets') {
        /* si este en 0 significa que esta vacio y se redireccionara al render de la tabla correspondiente 
        en donde se efectuara alguna accion del crud y se rellenara el link*/
        if($accion === '0'){
            echo '<script> window.location.href = "../marcas_tablets.php"</script>';
        }else if($accion === 'add'){
            $addmarcas_tablets = $_GET['marca'];
            $addSql = "INSERT INTO marcas_tablets (marcas) VALUES ('$addmarcas_tablets')";
            if ($connection->query($addSql) === TRUE) {
                echo '<script>window.location.href = "../marcas_tablets.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'edit'){
            $new = $_GET['marca'];
            $old = $_GET['old'];
            $id = $_GET['id'];
            $editSql = "UPDATE marcas_tablets SET marcas = '$new' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
                //actualizar los campos en todas las tablas
                $updateTabletsSql = "UPDATE tablets SET marca='$new' WHERE marca='$old'";
                mysqli_query($connection,$updateTabletsSql);
                echo '<script>window.location.href = "../marcas_tablets.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'delete'){
            $deleteSql = $_GET['id'];
            $deleteSql = "DELETE FROM marcas_tablets WHERE id = '$deleteSql'";

            if ($connection->query($deleteSql) === TRUE) {
                echo '<script>window.location.href = "../marcas_tablets.php"</script>';
            }else {
                echo "ERROR";
            }
        }
    }elseif ($table === 'procesadores_tablets') {
        /* si este en 0 significa que esta vacio y se redireccionara al render de la tabla correspondiente 
        en donde se efectuara alguna accion del crud y se rellenara el link*/
        if($accion === '0'){
            echo '<script> window.location.href = "../procesadores_tablets.php"</script>';
        }else if($accion === 'add'){
            $addProcesador_tablets = $_GET['procesador'];
            $addSql = "INSERT INTO procesadores_tablets (procesador) VALUES ('$addProcesador_tablets')";
            if ($connection->query($addSql) === TRUE) {
                echo '<script>window.location.href = "../procesadores_tablets.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'edit'){
            $new = $_GET['procesador'];
            $old = $_GET['old'];
            $id = $_GET['id'];
            $editSql = "UPDATE procesadores_tablets SET procesador = '$new' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
                //actualizar los campos en todas las tablas
                $updateTabletsSql = "UPDATE tablets SET procesador='$new' WHERE procesador='$old'";
                mysqli_query($connection,$updateTabletsSql);
                echo '<script>window.location.href = "../procesadores_tablets.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'delete'){
            $deleteSql = $_GET['id'];
            $deleteSql = "DELETE FROM procesadores_tablets WHERE id = '$deleteSql'";

            if ($connection->query($deleteSql) === TRUE) {
                echo '<script>window.location.href = "../procesadores_tablets.php"</script>';
            }else {
                echo "ERROR";
            }
        }
    }elseif ($table === 'resolucion_tablets') {
        /* si este en 0 significa que esta vacio y se redireccionara al render de la tabla correspondiente 
        en donde se efectuara alguna accion del crud y se rellenara el link*/
        if($accion === '0'){
            echo '<script> window.location.href = "../resolucion_tablets.php"</script>';
        }else if($accion === 'add'){
            $addResolucion_tablets = $_GET['resolucion'];
            $addSql = "INSERT INTO resolucion_tablets (resolucion) VALUES ('$addResolucion_tablets')";
            if ($connection->query($addSql) === TRUE) {
                echo '<script>window.location.href = "../resolucion_tablets.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'edit'){
            $new = $_GET['resolucion'];
            $old = $_GET['old'];
            $id = $_GET['id'];
            $editSql = "UPDATE resolucion_tablets SET resolucion = '$new' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
                //actualizar los campos en todas las tablas
                $updateTabletsSql = "UPDATE tablets SET resolucion='$new' WHERE resolucion='$old'";
                mysqli_query($connection,$updateTabletsSql);
                echo '<script>window.location.href = "../resolucion_tablets.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'delete'){
            $deleteSql = $_GET['id'];
            $deleteSql = "DELETE FROM resolucion_tablets WHERE id = '$deleteSql'";

            if ($connection->query($deleteSql) === TRUE) {
                echo '<script>window.location.href = "../resolucion_tablets.php"</script>';
            }else {
                echo "ERROR";
            }
        }
    }elseif ($table === 'os_tablets') {
        /* si este en 0 significa que esta vacio y se redireccionara al render de la tabla correspondiente 
        en donde se efectuara alguna accion del crud y se rellenara el link*/
        if($accion === '0'){
            echo '<script> window.location.href = "../os_tablets.php"</script>';
        }else if($accion === 'add'){
            $addOs_tablets = $_GET['os'];
            $addSql = "INSERT INTO os_tablets (os) VALUES ('$addOs_tablets')";
            if ($connection->query($addSql) === TRUE) {
                echo '<script>window.location.href = "../os_tablets.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'edit'){
            $new = $_GET['os'];
            $old = $_GET['old'];
            $id = $_GET['id'];
            $editSql = "UPDATE os_tablets SET os = '$new' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
                //actualizar los campos en todas las tablas
                $updateTabletsSql = "UPDATE tablets SET os='$new' WHERE os='$old'";
                mysqli_query($connection,$updateTabletsSql);
                echo '<script>window.location.href = "../os_tablets.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'delete'){
            $deleteSql = $_GET['id'];
            $deleteSql = "DELETE FROM os_tablets WHERE id = '$deleteSql'";

            if ($connection->query($deleteSql) === TRUE) {
                echo '<script>window.location.href = "../os_tablets.php"</script>';
            }else {
                echo "ERROR";
            }
        }
    }elseif ($table === 'areas') {
        /* si este en 0 significa que esta vacio y se redireccionara al render de la tabla correspondiente 
        en donde se efectuara alguna accion del crud y se rellenara el link*/
        if($accion === '0'){
            echo '<script> window.location.href = "../areas.php"</script>';
        }else if($accion === 'add'){
            $addAreas = $_GET['area'];
            $addSql = "INSERT INTO areas (nombre) VALUES ('$addAreas')";
            if ($connection->query($addSql) === TRUE) {
                echo '<script>window.location.href = "../areas.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'edit'){
            $new = $_GET['area'];
            $old = $_GET['old'];
            $id = $_GET['id'];
            $editSql = "UPDATE areas SET nombre = '$new' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
                //actualizar los campos en todas las tablas
                $updateEquiposSql = "UPDATE equipos SET area='$new' WHERE area='$old'";
                mysqli_query($connection,$updateEquiposSql);
                echo '<script>window.location.href = "../areas.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'delete'){
            $deleteSql = $_GET['id'];
            $deleteSql = "DELETE FROM areas WHERE id = '$deleteSql'";

            if ($connection->query($deleteSql) === TRUE) {
                echo '<script>window.location.href = "../areas.php"</script>';
            }else {
                echo "ERROR";
            }
        }
    }elseif ($table === 'marcas') {
        /* si este en 0 significa que esta vacio y se redireccionara al render de la tabla correspondiente 
        en donde se efectuara alguna accion del crud y se rellenara el link*/
        if($accion === '0'){
            echo '<script> window.location.href = "../marcas.php"</script>';
        }else if($accion === 'add'){
            $addmarcas = $_GET['marca'];
            $addSql = "INSERT INTO marcas (marca) VALUES ('$addmarcas')";
            if ($connection->query($addSql) === TRUE) {
                echo '<script>window.location.href = "../marcas.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'edit'){
            $new = $_GET['marca'];
            $old = $_GET['old'];
            $id = $_GET['id'];
            $editSql = "UPDATE marcas SET marca = '$new' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
                //actualizar los campos en todas las tablas
                $updateEquiposSql = "UPDATE equipos SET marca='$new' WHERE marca='$old'";
                mysqli_query($connection,$updateEquiposSql);
                echo '<script>window.location.href = "../marcas.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'delete'){
            $deleteSql = $_GET['id'];
            $deleteSql = "DELETE FROM marcas WHERE id = '$deleteSql'";

            if ($connection->query($deleteSql) === TRUE) {
                echo '<script>window.location.href = "../marcas.php"</script>';
            }else {
                echo "ERROR";
            }
        }
    }elseif ($table === 'procesadores') {
        /* si este en 0 significa que esta vacio y se redireccionara al render de la tabla correspondiente 
        en donde se efectuara alguna accion del crud y se rellenara el link*/
        if($accion === '0'){
            echo '<script> window.location.href = "../procesadores.php"</script>';
        }else if($accion === 'add'){
            $addProcesador = $_GET['procesador'];
            $addSql = "INSERT INTO procesadores (procesador) VALUES ('$addProcesador')";
            if ($connection->query($addSql) === TRUE) {
                echo '<script>window.location.href = "../procesadores.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'edit'){
            $new = $_GET['procesador'];
            $old = $_GET['old'];
            $id = $_GET['id'];
            $editSql = "UPDATE procesadores SET procesador = '$new' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
                //actualizar los campos en todas las tablas
                $updateEquiposSql = "UPDATE equipos SET procesador='$new' WHERE procesador='$old'";
                mysqli_query($connection,$updateEquiposSql);
                echo '<script>window.location.href = "../procesadores.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'delete'){
            $deleteSql = $_GET['id'];
            $deleteSql = "DELETE FROM procesadores WHERE id = '$deleteSql'";

            if ($connection->query($deleteSql) === TRUE) {
                echo '<script>window.location.href = "../procesadores.php"</script>';
            }else {
                echo "ERROR";
            }
        }
    }elseif ($table === 'tipo_memorias') {
        /* si este en 0 significa que esta vacio y se redireccionara al render de la tabla correspondiente 
        en donde se efectuara alguna accion del crud y se rellenara el link*/
        if($accion === '0'){
            echo '<script> window.location.href = "../tipo_memorias.php"</script>';
        }else if($accion === 'add'){
            $addTipo_memorias = $_GET['tipo_memoria'];
            $addSql = "INSERT INTO tipo_memorias (tipo_memoria) VALUES ('$addTipo_memorias')";
            if ($connection->query($addSql) === TRUE) {
                echo '<script>window.location.href = "../tipo_memorias.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'edit'){
            $new = $_GET['tipo_memoria'];
            $old = $_GET['old'];
            $id = $_GET['id'];
            $editSql = "UPDATE tipo_memorias SET tipo_memoria = '$new' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
                //actualizar los campos en todas las tablas
                $updateEquiposSql = "UPDATE equipos SET tipo_memoria='$new' WHERE tipo_memoria='$old'";
                mysqli_query($connection,$updateEquiposSql);
                echo '<script>window.location.href = "../tipo_memorias.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'delete'){
            $deleteSql = $_GET['id'];
            $deleteSql = "DELETE FROM tipo_memorias WHERE id = '$deleteSql'";

            if ($connection->query($deleteSql) === TRUE) {
                echo '<script>window.location.href = "../tipo_memorias.php"</script>';
            }else {
                echo "ERROR";
            }
        }
    }elseif ($table === 'marcas_disco_duro') {
        /* si este en 0 significa que esta vacio y se redireccionara al render de la tabla correspondiente 
        en donde se efectuara alguna accion del crud y se rellenara el link*/
        if($accion === '0'){
            echo '<script> window.location.href = "../marcas_disco_duro.php"</script>';
        }else if($accion === 'add'){
            $addMarca_disco_duro = $_GET['marca_disco_duro'];
            $addSql = "INSERT INTO marcas_disco_duro (marca_disco_duro) VALUES ('$addMarca_disco_duro')";
            if ($connection->query($addSql) === TRUE) {
                echo '<script>window.location.href = "../marcas_disco_duro.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'edit'){
            $new = $_GET['marca_disco_duro'];
            $old = $_GET['old'];
            $id = $_GET['id'];
            $editSql = "UPDATE marcas_disco_duro SET marca_disco_duro = '$new' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
                //actualizar los campos en todas las tablas
                $updateEquiposSql = "UPDATE equipos SET marca_disco_duro='$new' WHERE marca_disco_duro='$old'";
                mysqli_query($connection,$updateEquiposSql);
                echo '<script>window.location.href = "../marcas_disco_duro.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'delete'){
            $deleteSql = $_GET['id'];
            $deleteSql = "DELETE FROM marcas_disco_duro WHERE id = '$deleteSql'";

            if ($connection->query($deleteSql) === TRUE) {
                echo '<script>window.location.href = "../marcas_disco_duro.php"</script>';
            }else {
                echo "ERROR";
            }
        }
    }elseif ($table === 'tipos_disco') {
        /* si este en 0 significa que esta vacio y se redireccionara al render de la tabla correspondiente 
        en donde se efectuara alguna accion del crud y se rellenara el link*/
        if($accion === '0'){
            echo '<script> window.location.href = "../tipos_disco.php"</script>';
        }else if($accion === 'add'){
            $addTipos_disco	 = $_GET['tipo_disco'];
            $addSql = "INSERT INTO tipos_disco (tipo_disco) VALUES ('$addTipos_disco')";
            if ($connection->query($addSql) === TRUE) {
                echo '<script>window.location.href = "../tipos_disco.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'edit'){
            $new = $_GET['tipo_disco'];
            $old = $_GET['old'];
            $id = $_GET['id'];
            $editSql = "UPDATE tipos_disco SET tipo_disco = '$new' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
                //actualizar los campos en todas las tablas
                $updateEquiposSql = "UPDATE equipos SET tipo_disco='$new' WHERE tipo_disco='$old'";
                mysqli_query($connection,$updateEquiposSql);
                echo '<script>window.location.href = "../tipos_disco.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'delete'){
            $deleteSql = $_GET['id'];
            $deleteSql = "DELETE FROM tipos_disco WHERE id = '$deleteSql'";

            if ($connection->query($deleteSql) === TRUE) {
                echo '<script>window.location.href = "../tipos_disco.php"</script>';
            }else {
                echo "ERROR";
            }
        }
    }elseif ($table === 'areas_impresoras') {
        /* si este en 0 significa que esta vacio y se redireccionara al render de la tabla correspondiente 
        en donde se efectuara alguna accion del crud y se rellenara el link*/
        if($accion === '0'){
            echo '<script> window.location.href = "../areas_impresoras.php"</script>';
        }else if($accion === 'add'){
            $addAreas_impresoras = $_GET['area'];
            $addSql = "INSERT INTO areas_impresoras (area) VALUES ('$addAreas_impresoras')";
            if ($connection->query($addSql) === TRUE) {
                echo '<script>window.location.href = "../areas_impresoras.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'edit'){
            $new = $_GET['area'];
            $old = $_GET['old'];
            $id = $_GET['id'];
            $editSql = "UPDATE areas_impresoras SET area = '$new' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
                //actualizar los campos en todas las tablas
                $updateEquiposSql = "UPDATE impresoras SET area='$new' WHERE area='$old'";
                mysqli_query($connection,$updateEquiposSql);
                echo '<script>window.location.href = "../areas_impresoras.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'delete'){
            $deleteSql = $_GET['id'];
            $deleteSql = "DELETE FROM areas_impresoras WHERE id = '$deleteSql'";

            if ($connection->query($deleteSql) === TRUE) {
                echo '<script>window.location.href = "../areas_impresoras.php"</script>';
            }else {
                echo "ERROR";
            }
        }
    }else{
        echo 'Tabla no encontrada verifique que todo este bien';
    } 	
?>