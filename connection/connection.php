<?php
    $hostname = "localhost";
    $username = "admin";
    $password = "1234";
    $database = "hoja_vida_equipos";
    $connection =new mysqli($hostname, $username, $password, $database);

    
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully :)";

    
?>