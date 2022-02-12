<?php 
    // include_once("../connection/connection.php");

    //=========tabla principal de equipos =================
    $equipos = "SELECT * FROM equipos";
    $equiposResult = $connection->query($equipos);
     //====================================================

     //=========tabla principal de tablets =================
    $tablets = "SELECT * FROM tablets";
    $tabletssResult = $connection->query($tablets);
     //====================================================

    $sucursales = "SELECT * FROM sucursal";
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

    //========== IMPRESORAS ==============================
    $impresoras = "SELECT *FROM impresoras";
    $impresorasResult = $connection->query($impresoras);
    //===============================================

    //========== AREAS IMPRESORAS =======================
    $areas_impresoras = "SELECT *FROM areas_impresoras";
    $areas_impresorasResult = $connection->query($areas_impresoras);
    //===============================================

    //========== TIPO IMPRESORAS =======================
    $tipo_impresoras = "SELECT *FROM tipo_impresoras";
    $tipo_impresorasResult = $connection->query($tipo_impresoras);
    //===============================================

    //========== MARCAS IMPRESORAS =======================
    $marcas_impresoras = "SELECT *FROM marcas_impresoras";
    $marcas_impresorasResult = $connection->query($marcas_impresoras);
    //===============================================

    //========== TIPO PAPEL IMPRESORAS =======================
    $tipo_papel = "SELECT *FROM tipo_papel";
    $tipo_papelResult = $connection->query($tipo_papel);
    //===============================================

    //========== SWITCHES =======================
    $switches = "SELECT *FROM switches";
    $switchesResult = $connection->query($switches);
    //===============================================

    //========== SERVIDORES  =======================
    $servidores = "SELECT *FROM servidores";
    $servidoresResult = $connection->query($servidores);
    //===============================================

     //========== Mantenimientos Equipos =======================
    $mantenimientosEquipos = "SELECT *FROM mantenimientos_equipos";
    $mantenimientosEquiposResult = $connection->query($mantenimientosEquipos);

    $sqlPreventivoEquipos = "SELECT * FROM mantenimientos_equipos WHERE tipo_mantenimiento = 'preventivo'";
    $resultPreventivoEquipos = $connection->query($sqlPreventivoEquipos);

    $sqlCorrectivoEquipos = "SELECT * FROM mantenimientos_equipos WHERE tipo_mantenimiento = 'correctivo'";
    $resultCorrectivoEquipos = $connection->query($sqlCorrectivoEquipos);

    $sqlAmbosEquipos = "SELECT * FROM mantenimientos_equipos WHERE tipo_mantenimiento = 'ambos'";
    $resultAmbosEquipos = $connection->query($sqlAmbosEquipos);
     //===============================================

    //========== Mantenimientos Impresoras =======================
    $mantenimientosImpresoras = "SELECT *FROM mantenimientos_impresoras";
    $mantenimientosImpresorasResult = $connection->query($mantenimientosImpresoras);

    $sqlPreventivoImpresoras = "SELECT * FROM mantenimientos_impresoras WHERE tipo_mantenimiento = 'preventivo'";
    $resultPreventivoImpresoras = $connection->query($sqlPreventivoImpresoras);

    $sqlCorrectivoImpresoras = "SELECT * FROM mantenimientos_impresoras WHERE tipo_mantenimiento = 'correctivo'";
    $resultCorrectivoImpresoras = $connection->query($sqlCorrectivoImpresoras);

    $sqlAmbosImpresoras = "SELECT * FROM mantenimientos_impresoras WHERE tipo_mantenimiento = 'ambos'";
    $resultAmbosImpresoras = $connection->query($sqlAmbosImpresoras);
    //===============================================


    //========== Mantenimientos SERVIDORES =======================
    $mantenimientosServidores = "SELECT *FROM mantenimientos_servidores";
    $mantenimientosServidoresResult = $connection->query($mantenimientosServidores);

    $sqlPreventivoServidores = "SELECT * FROM mantenimientos_servidores WHERE tipo_mantenimiento = 'preventivo'";
    $resultPreventivoServidores = $connection->query($sqlPreventivoServidores);

    $sqlCorrectivoServidores = "SELECT * FROM mantenimientos_servidores WHERE tipo_mantenimiento = 'correctivo'";
    $resultCorrectivoServidores = $connection->query($sqlCorrectivoServidores);

    $sqlAmbosServidores = "SELECT * FROM mantenimientos_servidores WHERE tipo_mantenimiento = 'ambos'";
    $resultAmbosServidores = $connection->query($sqlAmbosServidores);
    //===============================================

?>