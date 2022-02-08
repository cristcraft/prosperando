<?php 
require_once("../../connection/connection.php");

//importa la conexion con todas las subtablas
require_once("../../tables/tables.php");

$datos = [];
$codigoInsersion;
$codigoValues;
$estructuraTabla = "DESCRIBE equipos";
$resultEstructuraTabla = $connection->query($estructuraTabla);
while($rowEstructuraTabla = mysqli_fetch_array($resultEstructuraTabla)) {
        $datos[$rowEstructuraTabla['Field']] = $_POST[$rowEstructuraTabla['Field']];
}
foreach ($datos as $key => $value) {
    if($key[0] == 'i' && $key[1] == 'd'){
        $codigoInsersion .= "";
    }else{
        $codigoInsersion .= "".$key.",";
    }

    if($value[0] == 0 ||$value[0] == 1 || $value[0] == 2 ||$value[0] == 3 |$value[0] == 4 || $value[0] == 5 ||$value[0] == 6|$value[0] == 7 || $value[0] == 8 ||$value[0] == 9 ){
        $codigoValues .= "'".$value."',";
    }elseif($value == ''){
        $codigoValues .= "";
    }else{
        $codigoValues .= "'".$value."',";
    }
    //Crear condicion para eliminar el id
}

foreach ($datos as $key => $value) {
    $codigoInsersion1 = "".$key."";
    $codigoValues1 = "'".$value."'";
}
$originalInsersion = $codigoInsersion1.',';
$cambioInsersion = $codigoInsersion1; 
$codigoInsersionFinal = str_replace($originalInsersion, $cambioInsersion, $codigoInsersion);

$originalValues = $codigoValues1.',';
$cambioValues = $codigoValues1; 
$codigoValuesFinal = str_replace($originalValues, $cambioValues, $codigoValues);
echo $codigoValues;


$insertsql="INSERT INTO equipos(".$codigoInsersionFinal.") 
    VALUES (".$codigoValuesFinal.")";

if ($connection->query($insertsql) === TRUE) {
    //echo '<script>window.location.href = "../../pages/equipos/equipos.php"</script>';
    echo 'exito';
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
    <p class="codigo">'. $insertsql . '</p>
    <a href="../../pages/equipos/equipos.php">Volver</a>
    <script>
        localStorage.setItem("change", "error")
    </script>
';
}


    /*Verificar si el codigo que se ha introducido ya existe en la tabal equipos */
    $codigoRepetido = "SELECT * FROM equipos WHERE id = '$id' ";
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
        
    };
        
?>