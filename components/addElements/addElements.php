<?php 
    require_once('../../tables/tables.php');
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
            $editSql = $_GET['sucursal'];
            $id = $_GET['id'];
            $editSql = "UPDATE sucursales SET nombre = '$editSql' WHERE id = '$id'";
            mysqli_query($connection,$editSql);

            if ($connection->query($editSql) === TRUE) {
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
            $editSql = $_GET['area'];
            $id = $_GET['id'];
            $editSql = "UPDATE areas_tablets SET area = '$editSql' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
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
            $editSql = $_GET['marca'];
            $id = $_GET['id'];
            $editSql = "UPDATE marcas_tablets SET marcas = '$editSql' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
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
            $editSql = $_GET['procesador'];
            $id = $_GET['id'];
            $editSql = "UPDATE procesadores_tablets SET procesador = '$editSql' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
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
            $editSql = $_GET['resolucion'];
            $id = $_GET['id'];
            $editSql = "UPDATE resolucion_tablets SET resolucion = '$editSql' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
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
            $editSql = $_GET['os'];
            $id = $_GET['id'];
            $editSql = "UPDATE os_tablets SET os = '$editSql' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
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
            $editSql = $_GET['area'];
            $id = $_GET['id'];
            $editSql = "UPDATE areas SET nombre = '$editSql' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
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
            $editSql = $_GET['marca'];
            $id = $_GET['id'];
            $editSql = "UPDATE marcas SET marca = '$editSql' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
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
            $editSql = $_GET['procesador'];
            $id = $_GET['id'];
            $editSql = "UPDATE procesadores SET procesador = '$editSql' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
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
            $editSql = $_GET['tipo_memoria'];
            $id = $_GET['id'];
            $editSql = "UPDATE tipo_memorias SET tipo_memoria = '$editSql' WHERE id = '$id'";

            if ($connection->query($editSql) === TRUE) {
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
    }else{
        echo $accion;
        echo $table;
    } 	
?>