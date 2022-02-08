<?php 
//codigo de prueba para ver la estructura de una tabla desde php
    require_once('./connection/connection.php');
    $datosTablaEquipo = "SELECT * FROM equipos";
    $resultDatosTablaEquipo = $connection->query($datosTablaEquipo);

    $estructuraTabla = "DESCRIBE equipos";
    $resultEstructuraTabla = $connection->query($estructuraTabla);

    while($rowEstructuraTabla = mysqli_fetch_array($resultEstructuraTabla)) {
        
        if($rowEstructuraTabla['Default'] === NULL && $rowEstructuraTabla['Type'] == 'int(11)' || $rowEstructuraTabla['Type'] == 'int(60)'){
            echo $rowEstructuraTabla['Field'].'= number <br>';
            /*if($rowEstructuraTabla['Type'] == 'varchar'){
                echo 'fehca';
                //echo "{$rowEstructuraTabla['Default']} <br>";
            }*/
        }elseif($rowEstructuraTabla['Default'] === 'select'){
            echo $rowEstructuraTabla['Field'].'= select <br>' ;
        }elseif($rowEstructuraTabla['Default'] === NULL && $rowEstructuraTabla['Type'] == 'varchar(100)' || $rowEstructuraTabla['Type'] == 'varchar(50)' || $rowEstructuraTabla['Type'] == 'varchar(20)'|| $rowEstructuraTabla['Type'] == 'varchar(11)' || $rowEstructuraTabla['Type'] == 'varchar(10)'|| $rowEstructuraTabla['Type'] == 'varchar(5)'){
            echo $rowEstructuraTabla['Field'].'= varchar <br>' ;
        }
    }

    $rowEstructuraTabla = mysqli_fetch_array($resultEstructuraTabla);
   // $rowDatosTablaEquipo = mysqli_fetch_array($resultDatosTablaEquipo);
    $a = array();

    /*while($rowDatosTablaEquipo = mysqli_fetch_array($resultDatosTablaEquipo)) {
        //echo "{$rowDatosTablaEquipo['funcionario_responsable']} <br>";
        for ($i = 0; $i <= $largoArrayDatos; $i++) {
            echo "{$rowDatosTablaEquipo[0]} <br>";
        }
    }*/

    $sql = "SELECT * FROM equipos";
    $result = $connection->query($sql);

    /*while($row = $resultDatosTablaEquipo ->fetch_assoc()){ 
        echo "{$row['funcionario_responsable']} <br>";
    }*/
    
    /*for ($i=0; $i <= $rowDatosTablaEquipo = mysqli_fetch_array($resultDatosTablaEquipo); $i++) { 
        echo "{$rowDatosTablaEquipo[$i]} <br>";
    }*/
    /*while($rowEstructuraTabla = mysqli_fetch_array($resultEstructuraTabla)) {
        echo "{$rowEstructuraTabla['Field']} <br>";
        $a[] = $rowEstructuraTabla['Field'];
        
        //echo gettype($rowEstructuraTabla);
    }
    $largoArrayDatos =  count($a);

    echo $largoArrayDatos;

    */
?>