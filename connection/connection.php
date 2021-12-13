<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "hoja_vida_equipos";
    $connection =new mysqli($hostname, $username, $password, $database);

    
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
?>