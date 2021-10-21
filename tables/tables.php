<?php 
    require_once("../../connection/connection.php");

    $equipos = "SELECT * FROM equipos";
    $equiposResult = $connection->query($equipos);

    $sucursales = "SELECT * FROM sucursales";
    $sucursalesResult = $connection->query($sucursales);

    $areas = "SELECT * FROM areas";
    $areasResult = $connection->query($areas);

    $lugarTrabajo = "SELECT * FROM lugar_trabajo";
    $lugarTrabajoResult = $connection->query($lugarTrabajo);

    $tipoEquipo = "SELECT * FROM tipo_equipo";
    $tipoEquipoResult = $connection->query($tipoEquipo);

    $marcas = "SELECT * FROM marcas";
    $marcasResult = $connection->query($marcas);

    $procesadores = "SELECT * FROM procesadores";
    $procesadoresResult = $connection->query($procesadores);

    $tipoMemorias = "SELECT * FROM tipo_memorias";
    $tipoMemoriasResult = $connection->query($tipoMemorias);

    $marcasDisco = "SELECT * FROM marcas_disco_duro";
    $marcasDiscoResult = $connection->query($marcasDisco);

    $tiposDisco = "SELECT * FROM tipos_disco";
    $tiposDiscoResult = $connection->query($tiposDisco);
?>