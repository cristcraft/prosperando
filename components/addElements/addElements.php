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
    require_once('../../tables/tables.php');
    

    $table = $_GET['table'];
    $accion = $_GET['accion'];
    $num = 0;

    $echo = $table;

    if($table === 'sucursal'){
        /* si este en 0 significa que esta vacio y se redireccionara al render de la tabla correspondiente 
        en donde se efectuara alguna accion del crud y se rellenara el link*/
        if($accion === '0'){
            echo '<script> window.location.href = "../sucursal.php"</script>';
        }else if($accion === 'add'){        
            $addSucursal = $_GET['sucursal'];
            $insertsql = "INSERT INTO sucursal (nombre) VALUES ('$addSucursal')";
            if ($connection->query($insertsql) === TRUE) {
                echo '<script>window.location.href = "./sucursal.php"</script>';
            }else {
                echo "ERROR";
            }
            

        }else if($accion === 'edit'){
            $new = $_GET['sucursal'];
            $old = $_GET['old'];
            $id = $_GET['id'];
            $editSql = "UPDATE sucursal SET nombre = '$new' WHERE id = '$id'";
            mysqli_query($connection,$editSql);

            if ($connection->query($editSql) === TRUE) {
                //actualizar los campos en todas las tablas
                $updateEquiposSql = "UPDATE equipos SET sucursal='$new' WHERE sucursal='$old'";
                mysqli_query($connection,$updateEquiposSql);
                $updateTabletsSql = "UPDATE tablets SET sucursal='$new' WHERE sucursal='$old'";
                mysqli_query($connection,$updateTabletsSql);

                echo '<script>window.location.href = "./sucursal.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'delete'){
            $deleteSql = $_GET['id'];
            $deleteSql = "DELETE FROM sucursal WHERE id = '$deleteSql'";
            mysqli_query($connection,$deleteSql);

            if ($connection->query($deleteSql) === TRUE) {
                echo '<script>window.location.href = "./sucursal.php"</script>';
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
            $editSql = "UPDATE marcas_tablets SET nombre s = '$new' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
                //actualizar los campos en todas las tablas
                $updateTabletsSql = "UPDATE tablets SET nombre ='$new' WHERE marca='$old'";
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
    }elseif ($table === 'area') {
        /* si este en 0 significa que esta vacio y se redireccionara al render de la tabla correspondiente 
        en donde se efectuara alguna accion del crud y se rellenara el link*/
        if($accion === '0'){
            echo '<script> window.location.href = "../areas.php"</script>';
        }else if($accion === 'add'){
            $addAreas = $_GET['area'];
            $addSql = "INSERT INTO area (nombre) VALUES ('$addAreas')";
            if ($connection->query($addSql) === TRUE) {
                echo '<script>window.location.href = "./areas.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'edit'){
            $new = $_GET['area'];
            $old = $_GET['old'];
            $id = $_GET['id'];
            $editSql = "UPDATE area SET nombre = '$new' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
                //actualizar los campos en todas las tablas
                $updateEquiposSql = "UPDATE equipos SET area='$new' WHERE area='$old'";
                mysqli_query($connection,$updateEquiposSql);
                echo '<script>window.location.href = "./areas.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'delete'){
            $deleteSql = $_GET['id'];
            $deleteSql = "DELETE FROM area WHERE id = '$deleteSql'";

            if ($connection->query($deleteSql) === TRUE) {
                echo '<script>window.location.href = "./areas.php"</script>';
            }else {
                echo "ERROR";
            }
        }
    }elseif ($table === 'marca') {
        /* si este en 0 significa que esta vacio y se redireccionara al render de la tabla correspondiente 
        en donde se efectuara alguna accion del crud y se rellenara el link*/
        if($accion === '0'){
            echo '<script> window.location.href = "../marcas.php"</script>';
        }else if($accion === 'add'){
            $addmarcas = $_GET['marca'];
            $addSql = "INSERT INTO marca (nombre) VALUES ('$addmarcas')";
            if ($connection->query($addSql) === TRUE) {
                echo '<script>window.location.href = "./marcas.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'edit'){
            $new = $_GET['marca'];
            $old = $_GET['old'];
            $id = $_GET['id'];
            $editSql = "UPDATE marca SET nombre  = '$new' WHERE id = '$id'";
            mysqli_query($connection,$editSql);

            if ($connection->query($editSql) === TRUE) {
                echo '<script>window.location.href = "./marcas.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'delete'){
            $deleteSql = $_GET['id'];
            $deleteSql = "DELETE FROM marca WHERE id = '$deleteSql'";

            if ($connection->query($deleteSql) === TRUE) {
                echo '<script>window.location.href = "./marcas.php"</script>';
            }else {
                echo "ERROR";
            }
        }
    }elseif ($table === 'procesador') {
        /* si este en 0 significa que esta vacio y se redireccionara al render de la tabla correspondiente 
        en donde se efectuara alguna accion del crud y se rellenara el link*/
        if($accion === '0'){
            echo '<script> window.location.href = "../procesadores.php"</script>';
        }else if($accion === 'add'){
            $addProcesador = $_GET['procesador'];
            $addSql = "INSERT INTO procesador (nombre) VALUES ('$addProcesador')";
            if ($connection->query($addSql) === TRUE) {
                echo '<script>window.location.href = "./procesadores.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'edit'){
            $new = $_GET['procesador'];
            $old = $_GET['old'];
            $id = $_GET['id'];
            $editSql = "UPDATE procesador SET nombre = '$new' WHERE id = '$id'";
            mysqli_query($connection,$editSql);
            if ($connection->query($editSql) === TRUE) {
                echo '<script>window.location.href = "./procesadores.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'delete'){
            $deleteSql = $_GET['id'];
            $deleteSql = "DELETE FROM procesador WHERE id = '$deleteSql'";

            if ($connection->query($deleteSql) === TRUE) {
                echo '<script>window.location.href = "./procesadores.php"</script>';
            }else {
                echo "ERROR";
            }
        }
    }elseif ($table === 'tipo_memoria') {
        /* si este en 0 significa que esta vacio y se redireccionara al render de la tabla correspondiente 
        en donde se efectuara alguna accion del crud y se rellenara el link*/
        if($accion === '0'){
            echo '<script> window.location.href = "../tipo_memorias.php"</script>';
        }else if($accion === 'add'){
            $addTipo_memorias = $_GET['tipo_memoria'];
            $addSql = "INSERT INTO tipo_memoria (nombre) VALUES ('$addTipo_memorias')";
            if ($connection->query($addSql) === TRUE) {
                echo '<script>window.location.href = "./tipo_memorias.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'edit'){
            $new = $_GET['tipo_memoria'];
            $old = $_GET['old'];
            $id = $_GET['id'];
            $editSql = "UPDATE tipo_memoria SET nombre = '$new' WHERE id = '$id'";
            mysqli_query($connection,$editSql);

            if ($connection->query($editSql) === TRUE) {
                echo '<script>window.location.href = "./tipo_memorias.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'delete'){
            $deleteSql = $_GET['id'];
            $deleteSql = "DELETE FROM tipo_memoria WHERE id = '$deleteSql'";

            if ($connection->query($deleteSql) === TRUE) {
                echo '<script>window.location.href = "./tipo_memorias.php"</script>';
            }else {
                echo "ERROR";
            }
        }
    }elseif ($table === 'marca_disco_duro') {
        /* si este en 0 significa que esta vacio y se redireccionara al render de la tabla correspondiente 
        en donde se efectuara alguna accion del crud y se rellenara el link*/
        if($accion === '0'){
            echo '<script> window.location.href = "../marcas_disco_duro.php"</script>';
        }else if($accion === 'add'){
            $addMarca_disco_duro = $_GET['marca_disco_duro'];
            $addSql = "INSERT INTO marca_disco_duro (nombre) VALUES ('$addMarca_disco_duro')";
            if ($connection->query($addSql) === TRUE) {
                echo '<script>window.location.href = "./marcas_disco_duro.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'edit'){
            $new = $_GET['marca_disco_duro'];
            $old = $_GET['old'];
            $id = $_GET['id'];
            $editSql = "UPDATE marca_disco_duro SET nombre = '$new' WHERE id = '$id'";
            mysqli_query($connection,$editSql);

            if ($connection->query($editSql) === TRUE) {
                echo '<script>window.location.href = "./marcas_disco_duro.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'delete'){
            $deleteSql = $_GET['id'];
            $deleteSql = "DELETE FROM marca_disco_duro WHERE id = '$deleteSql'";

            if ($connection->query($deleteSql) === TRUE) {
                echo '<script>window.location.href = "./marcas_disco_duro.php"</script>';
            }else {
                echo "ERROR";
            }
        }
    }elseif ($table === 'tipo_disco') {
        /* si este en 0 significa que esta vacio y se redireccionara al render de la tabla correspondiente 
        en donde se efectuara alguna accion del crud y se rellenara el link*/
        if($accion === '0'){
            echo '<script> window.location.href = "../tipos_disco.php"</script>';
        }else if($accion === 'add'){
            $addTipos_disco	 = $_GET['tipo_disco'];
            $addSql = "INSERT INTO tipo_disco (nombre) VALUES ('$addTipos_disco')";
            if ($connection->query($addSql) === TRUE) {
                echo '<script>window.location.href = "./tipos_disco.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'edit'){
            $new = $_GET['tipo_disco'];
            $old = $_GET['old'];
            $id = $_GET['id'];
            $editSql = "UPDATE tipo_disco SET nombre = '$new' WHERE id = '$id'";
            mysqli_query($connection,$editSql);

            if ($connection->query($editSql) === TRUE) {
                echo '<script>window.location.href = "./tipos_disco.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'delete'){
            $deleteSql = $_GET['id'];
            $deleteSql = "DELETE FROM tipo_disco WHERE id = '$deleteSql'";

            if ($connection->query($deleteSql) === TRUE) {
                echo '<script>window.location.href = "./tipos_disco.php"</script>';
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
    }elseif ($table === 'tipo_impresoras') {
        /* si este en 0 significa que esta vacio y se redireccionara al render de la tabla correspondiente 
        en donde se efectuara alguna accion del crud y se rellenara el link*/
        if($accion === '0'){
            echo '<script> window.location.href = "../tipo_impresoras.php"</script>';
        }else if($accion === 'add'){
            $addTipo_impresoras = $_GET['tipo'];
            $addSql = "INSERT INTO tipo_impresoras (impresora) VALUES ('$addTipo_impresoras')";
            if ($connection->query($addSql) === TRUE) {
                echo '<script>window.location.href = "../tipo_impresoras.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'edit'){
            $new = $_GET['tipo'];
            $old = $_GET['old'];
            $id = $_GET['id'];
            $editSql = "UPDATE tipo_impresoras SET impresora = '$new' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
                //actualizar los campos en todas las tablas
                $updateEquiposSql = "UPDATE impresoras SET tipo='$new' WHERE tipo='$old'";
                mysqli_query($connection,$updateEquiposSql);
                echo '<script>window.location.href = "../tipo_impresoras.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'delete'){
            $deleteSql = $_GET['id'];
            $deleteSql = "DELETE FROM tipo_impresoras WHERE id = '$deleteSql'";

            if ($connection->query($deleteSql) === TRUE) {
                echo '<script>window.location.href = "../tipo_impresoras.php"</script>';
            }else {
                echo "ERROR";
            }
        }
    }elseif ($table === 'marcas_impresoras') {
        /* si este en 0 significa que esta vacio y se redireccionara al render de la tabla correspondiente 
        en donde se efectuara alguna accion del crud y se rellenara el link*/
        if($accion === '0'){
            echo '<script> window.location.href = "../marcas_impresoras.php"</script>';
        }else if($accion === 'add'){
            $addMarcas_impresoras = $_GET['marca'];
            $addSql = "INSERT INTO marcas_impresoras (marca) VALUES ('$addMarcas_impresoras')";
            if ($connection->query($addSql) === TRUE) {
                echo '<script>window.location.href = "../marcas_impresoras.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'edit'){
            $new = $_GET['marca'];
            $old = $_GET['old'];
            $id = $_GET['id'];
            $editSql = "UPDATE marcas_impresoras SET nombre  = '$new' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
                //actualizar los campos en todas las tablas
                $updateEquiposSql = "UPDATE impresoras SET nombre ='$new' WHERE marca='$old'";
                mysqli_query($connection,$updateEquiposSql);
                echo '<script>window.location.href = "../marcas_impresoras.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'delete'){
            $deleteSql = $_GET['id'];
            $deleteSql = "DELETE FROM marcas_impresoras WHERE id = '$deleteSql'";

            if ($connection->query($deleteSql) === TRUE) {
                echo '<script>window.location.href = "../marcas_impresoras.php"</script>';
            }else {
                echo "ERROR";
            }
        }
    }elseif ($table === 'tipo_papel') {
        /* si este en 0 significa que esta vacio y se redireccionara al render de la tabla correspondiente 
        en donde se efectuara alguna accion del crud y se rellenara el link*/
        if($accion === '0'){
            echo '<script> window.location.href = "../tipo_papel.php"</script>';
        }else if($accion === 'add'){
            $addTipo_papel = $_GET['tipo_papel'];
            $addSql = "INSERT INTO tipo_papel (tipo_papel) VALUES ('$addTipo_papel')";
            if ($connection->query($addSql) === TRUE) {
                echo '<script>window.location.href = "../tipo_papel.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'edit'){
            $new = $_GET['tipo_papel'];
            $old = $_GET['old'];
            $id = $_GET['id'];
            $editSql = "UPDATE tipo_papel SET tipo_papel = '$new' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
                //actualizar los campos en todas las tablas
                $updateEquiposSql = "UPDATE impresoras SET tipo_papel='$new' WHERE tipo_papel='$old'";
                mysqli_query($connection,$updateEquiposSql);
                echo '<script>window.location.href = "../tipo_papel.php"</script>';
            }else {
                echo "ERROR";
            }

        }else if($accion === 'delete'){
            $deleteSql = $_GET['id'];
            $deleteSql = "DELETE FROM tipo_papel WHERE id = '$deleteSql'";

            if ($connection->query($deleteSql) === TRUE) {
                echo '<script>window.location.href = "../tipo_papel.php"</script>';
            }else {
                echo "ERROR";
            }
        }
    }else{
        echo 'Tabla no encontrada verifique que todo este bien';
    } 	
?>