<?php
require_once("../../connection/connection.php");

//importa la conexion con todas las subtablas
require_once("../../tables/tables.php");

$datos = [];
$n = 0;
$codigoInsersion;
$codigoValues;
$estructuraTabla = "DESCRIBE equipos";
$resultEstructuraTabla = $connection->query($estructuraTabla);
while($rowEstructuraTabla = mysqli_fetch_array($resultEstructuraTabla)) {
        $datos[$rowEstructuraTabla['Field']] = $_POST[$rowEstructuraTabla['Field']];
}

foreach ($datos as $key => $value) {

    if($key[0] == 'i' && $key[1] == 'd'){
        $id = $value;
    }elseif($value[0] == 0 ||$value[0] == 1 || $value[0] == 2 ||$value[0] == 3 |$value[0] == 4 || $value[0] == 5 ||$value[0] == 6|$value[0] == 7 || $value[0] == 8 ||$value[0] == 9){
        if($value[-1] == '-' || $value[2] == ',' || $value[2] == ' ' || $value[-1] == 'B'){
            $codigoInsersion .= "".$key." = "."'$value'".",";
        }else{
            $codigoInsersion .= "".$key." = '"."$value"."',";
        }
        
    }elseif($value == ''){
        $codigoInsersion .= "".$key." = "."''".",";
    }else{
        $codigoInsersion .= "".$key." = "."'$value'".",";
    }
    //Crear condicion para eliminar el id
}
foreach ($datos as $key => $value) {
    $codigoInsersion1 = "".$key.""." = "."'".$value."'";
}
$originalInsersion = $codigoInsersion1.",";
$cambioInsersion = $codigoInsersion1; 
$codigoInsersionFinal = str_replace($originalInsersion, $cambioInsersion, $codigoInsersion);



$updateSql="UPDATE equipos SET ".$codigoInsersionFinal." WHERE id = ".$id;

        mysqli_query($connection,$updateSql);

        if ($connection->query($updateSql) === TRUE) {
            //echo '<script>window.location.href = "../../pages/equipos/equipos.php"</script>';
            echo 'exito';
        }else { 
            //identificar el error que ocurrio al conectar con la bd
            $error  = mysqli_error($connection);

            //Mostrar mensaje de error si el codigo esta repetido
            if($error == "Duplicate entry '".$nuevoCodigo_administrativo."' for key 'PRIMARY'"){
                echo '
                <script>
                    alert("El codigo introducido ya existe")
                    localStorage.setItem("change", "error")
                    window.location.href = "../../pages/equipos/equipos.php"
                </script>
            ';
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
                <a href="../../pages/equipos/equipos.php">Volver</a>
                <script>
                    localStorage.setItem("change", "error")
                </script>
            ';
            }
        }

?>