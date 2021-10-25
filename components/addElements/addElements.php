<?php 
    require_once('../../tables/tables.php');
    $table = $_GET['table'];
    $accion = $_GET['accion'];
    

    if($table == 'sucursales'){
        /* si este en 0 significa que esta vacio y se redireccionara al render de la tabla correspondiente 
        en donde se efectuara alguna accion del crud y se rellenara el link*/
        if($accion === 0){
            echo '<script> window.location.href = "../sucursal.php"</script>';
        }else if($accion === 'add'){
            $addSucursal = $_GET['sucursal'];
            $addSql = "INSERT INTO sucursales (nombre) VALUES ('$addSucursal')";
            mysqli_query($connection,$addSql);

            if ($connection->query($addSql) === TRUE) {
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

        }
    }elseif ($table === 'areas') {
        echo '<script> let area = prompt(Escribe el area que quieres agregar)</script>';
    }else{
        echo $accion;
        echo $table;
    }
?>