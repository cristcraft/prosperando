<?php 
//codigo de prueba para ver la estructura de una tabla desde php
    require_once('./connection/connection.php');
    
    $sql = "DESCRIBE equipos";
    $result = $connection->query($sql);
    while($row = mysqli_fetch_array($result)) {
        echo "{$row['Field']} <br>";
    }
?>