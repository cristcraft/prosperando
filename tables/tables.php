<?php 
    require_once("../../connection/connection.php");

    //=========tabla principal de equipos =================
    $equipos = "SELECT * FROM equipos";
    $equiposResult = $connection->query($equipos);
     //====================================================

     //=========tabla principal de tablets =================
    $tablets = "SELECT * FROM tablets";
    $tabletssResult = $connection->query($tablets);
     //====================================================

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

    //========== Area Tablets =======================
    $areas_tablets = "SELECT * FROM areas_tablets";
    $areas_tabletsResult = $connection->query($areas_tablets);
    //===============================================

    //========== Marcas Tablets =======================
    $marcas_tablets = "SELECT * FROM marcas_tablets";
    $marcas_tabletsResult = $connection->query($marcas_tablets);
    //===============================================

    //========== Procesadores Tablets =======================
    $procesadores_tablets = "SELECT * FROM procesadores_tablets";
    $procesadores_tabletsResult = $connection->query($procesadores_tablets);
    //===============================================

    //========== Resolucion Tablets =======================
    $resolucion_tablets = "SELECT * FROM resolucion_tablets";
    $resolucion_tabletsResult = $connection->query($resolucion_tablets);
    //===============================================

    //========== Version OS Tablets =======================
    $os_version = "SELECT * FROM os_tablets";
    $os_versionResult = $connection->query($os_version);
    //===============================================
?>

