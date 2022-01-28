<?php 
//Requiere el inicio de sesion
session_start();

if(!isset($_SESSION['user_logeado'])){
    echo '
            <script>
                alert("No has iniciado sesión")
                window.location.href = "../../index.php"
            </script>
        ';
        session_destroy();
        die();
}
    require_once("../../connection/connection.php");

    //importa la conexion con todas las subtablas
    require_once("../../tables/tables.php");
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Crear</title>
</head>

<body id="body">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../components/router.php?page=dashboard">DashBoard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../components/router.php?page=equipos">Equipos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../../components/router.php?page=tablets">Tablets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../components/router.php?page=impresoras">Impresoras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../components/router.php?page=switches">Switches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../components/router.php?page=servidores">Servidores</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mantenimientos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="../../components/router.php?page=equiposMante">Equipos</a></li>
                            <li><a class="dropdown-item" href="../../components/router.php?page=impresorasMante">Impresoras</a></li>
                            <li><a class="dropdown-item" href="../../components/router.php?page=servidoresMante">Servidores</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex">
                    <button class="btn me-3 btn-outline-dark" id="btn-oscuro" onclick="onModoOscuro()"  title="Modo oscuro"><i class="fas fa-sun"></i></button>

                    <a href="../../components/router.php?page=logout" class="btn btn-outline-dark" id="btn-salir" title="Salir"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid d-flex justify-content-center align-items-center" id="form-content ">
        <form action="../../components/equipos/saveForm.php" method="POST" id="form_create_equipos" class="form" >

        <div class="mb-3">
                    <label for="codigo_administrativo" class="form-label">Codigo administrativo</label>
                    <input required type="text" id="codigo_administrativo" name="codigo_administrativo" class="form-control" require>
                </div>

            <div class="mb-3">
                <label for="sucursal" class="form-label">Sucursal  <a href="../../components/addElements/addElements.php/?table=sucursales&accion=0"  ><i class="fas fa-plus-circle"></i></a></label>
                <select name="sucursal" id="sucursal" class="form-select">
                    <?php while($row = $sucursalesResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['nombre'] ?>"><?php echo $row['nombre'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="area" class="form-label">Area <a href="../../components/addElements/addElements.php/?table=areas&accion=0"  ><i class="fas fa-plus-circle"></i></a></label>
                <select name="area" id="area" class="form-select">
                    <?php while($row = $areasResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['nombre'] ?>"><?php echo $row['nombre'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="funcionario_responsable" class="form-label">funcionario Responsable</label>
                <input required type="text" name="funcionario_responsable" id="funcionario_responsable" placeholder="funcionario responsable" class="form-control">
            </div>

            
            <div class="mb-3">
                <label for="nombre_equipo" class="form-label">Nombre del equipo</label>
                <input required type="text" name="nombre_equipo" id="nombre_equipo" placeholder="nombre del quipo" class="form-control">
            </div>

            <div class="mb-3">
                <label for="lugar_trabajo" class="form-label">Lugar de trabajo</label>
                <select name="lugar_trabajo" id="lugar_trabajo" class="form-select">
                    <?php while($row = $lugarTrabajoResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['lugar_de_trabajo'] ?>"><?php echo $row['lugar_de_trabajo'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="paquete_ofimatico" class="form-label">Paquete Ofimatico</label>
                <input type="text" name="paquete_ofimatico" id="paquete_ofimatico" placeholder="Office / WPS / Libre office" class="form-control">
            </div>

            <div class="mb-3">
                <label for="version_office" class="form-label">Version</label>
                <input type="number" name="version_office" id="version_office" placeholder="2010 - 2013 - 2016 - 2019 - 365" class="form-control">
            </div>

            <div class="mb-3">
                <label for="novedades" class="form-label">Novedades</label>
                <input type="text" name="novedades" id="novedades" placeholder="Novedades" class="form-control">
            </div>

            <div class="mb-3">
                <label for="tipo_equipo" class="form-label">Tipo de equipo</label>
                <select name="tipo_equipo" id="tipo_equipo" class="form-select">
                    <?php while($row = $tipoEquipoResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['tipo'] ?>"><?php echo $row['tipo'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="marca" class="form-label">Marca <a href="../../components/addElements/addElements.php/?table=marcas&accion=0"><i class="fas fa-plus-circle"></i></a></label>
                <select name="marca" id="marca" class="form-select">
                    <?php while($row = $marcasResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['marca'] ?>"><?php echo $row['marca'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input required type="text" name="modelo" id="modelo" placeholder="Modelo" class="form-control">
            </div>

            <div class="mb-3">
                <label for="serial" class="form-label">Serial</label>
                <input required type="text" name="serial" id="serial" placeholder="Serial" class="form-control">
            </div>

            <div class="mb-3">
                <label for="fecha_fabricacion" class="form-label">Fecha</label>
                <input  type="date" name="fecha_fabricacion" id="fecha_fabricacion" placeholder="fecha_fabricacion" class="form-control">
            </div>

            <div class="mb-3">
                <label for="procesador" class="form-label">Procesador  <a href="../../components/addElements/addElements.php/?table=procesadores&accion=0"><i class="fas fa-plus-circle"></i></a></label>
                <select name="procesador" id="procesador" class="form-select">
                    <?php while($row = $procesadoresResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['procesador'] ?>"><?php echo $row['procesador'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="generacion_procesador" class="form-label">Generacion del procesador</label>
                <input required type="text" name="generacion_procesador" id="generacion_procesador" placeholder="generacion del procesador" class="form-control">
            </div>

            <div class="mb-3">
                <label for="nucleos" class="form-label">nucleos</label>
                <input required type="number" name="nucleos" id="nucleos" placeholder="nucleos" class="form-control">
            </div>

            <div class="mb-3">
                <label for="velocidad_mz" class="form-label">velocidad en mz</label>
                <input required type="number" name="velocidad_mz" id="velocidad_mz" placeholder="velocidad en mz" class="form-control">
            </div>

            <div class="mb-3">
                <label for="ram_gb" class="form-label">RAM en GB</label>
                <input required type="number" name="ram_gb" id="ram_gb" placeholder="ram en gb" class="form-control">
            </div>

            <div class="mb-3">
                <label for="tipo_memoria" class="form-label">Tipo de RAM <a href="../../components/addElements/addElements.php/?table=tipo_memorias&accion=0"><i class="fas fa-plus-circle"></i></a></label>
                <select name="tipo_memoria" id="tipo_memoria" class="form-select">
                    <?php while($row = $tipoMemoriasResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['tipo_memoria'] ?>"><?php echo $row['tipo_memoria'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="adaptador_multimedia" class="form-label">Adaptador multimedia</label>
                <input required type="text" name="adaptador_multimedia" id="adaptador_multimedia" placeholder="adaptador multimedia" class="form-control">
            </div>

            <div class="mb-3">
                <label for="adaptador_video" class="form-label">Adaptador video</label>
                <input required type="text" name="adaptador_video" id="adaptador_video" placeholder="adaptador video" class="form-control">
            </div>

            <div class="mb-3">
                <label for="marca_disco_duro" class="form-label">Marca del disco duro <a href="../../components/addElements/addElements.php/?table=marcas_disco_duro&accion=0"><i class="fas fa-plus-circle"></i></a></label>
                <select name="marca_disco_duro" id="marca_disco_duro" class="form-select">
                    <?php while($row = $marcasDiscoResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['marca_disco_duro'] ?>"><?php echo $row['marca_disco_duro'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="capacidad_disco" class="form-label">Capacidad del disco</label>
                <input required type="text" name="capacidad_disco" id="capacidad_disco" placeholder="capacidad del disco" class="form-control">
            </div>
            
            <div class="mb-3">
                <label for="tipo_disco" class="form-label">Tipo de disco duro <a href="../../components/addElements/addElements.php/?table=tipos_disco&accion=0"><i class="fas fa-plus-circle"></i></a></label>
                <select name="tipo_disco" id="tipo_disco" class="form-select">
                    <?php while($row = $tiposDiscoResult -> fetch_assoc()){ ?>
                        <option value="<?php echo $row['tipo_disco'] ?>"><?php echo $row['tipo_disco'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="red_ethernet" class="form-label">Red ethernet</label>
                <input required type="text" name="red_ethernet" id="red_ethernet" placeholder="red ethernet" class="form-control">
            </div>

            <div class="mb-3">
                <label for="ip" class="form-label">IP</label>
                <input  type="text" name="ip" id="ip" placeholder="ip" class="form-control">
            </div>

            <div class="mb-3">
                <label for="mac_ethernet" class="form-label">MAC ethernet</label>
                <input required type="text" name="mac_ethernet" id="mac_ethernet" placeholder="mac_ethernet" class="form-control">
            </div>

            <div class="mb-3">
                <label for="red_wifi" class="form-label">Red wifi</label>
                <input required type="text" name="red_wifi" id="red_wifi" placeholder="red wifi" class="form-control">
            </div>

            <div class="mb-3">
                <label for="mac" class="form-label">MAC</label>
                <input required type="text" name="mac" id="mac" placeholder="mac" class="form-control">
            </div>

            <div class="mb-3">
                <label for="marca_monitor" class="form-label">Marca del monitor</label>
                <input required type="text" name="marca_monitor" id="marca_monitor" placeholder="Marca del monitor" class="form-control">
            </div>

            <div class="mb-3">
                <label for="tipo_monitor" class="form-label">Tipo monitor</label>
                <input required type="text" name="tipo_monitor" id="tipo_monitor" placeholder="Tipo monitor" class="form-control">
            </div>

            <div class="mb-3">
                <label for="serial_monitor" class="form-label">Serial monitor</label>
                <input required type="text" name="serial_monitor" id="serial_monitor" placeholder="Serial monitor" class="form-control">
            </div>
            
            <div class="mb-3">
                <label for="modelo_monitor" class="form-label">Modelo monitor</label>
                <input required type="text" name="modelo_monitor" id="modelo_monitor" placeholder="Modelo monitor" class="form-control">
            </div>

            <div class="mb-3">
                <label for="pulgadas" class="form-label">Pulgadas monitor</label>
                <input required type="text" name="pulgadas" id="pulgadas" placeholder="Pulgadas monitor" class="form-control">
            </div>

            <div class="mb-3">
                <label for="cables_poder" class="form-label">Cables de poder</label>
                <input required type="number" name="cables_poder" id="cables_poder" placeholder="Cables de poder" class="form-control">
            </div>

            <div class="mb-3">
                <label for="vga" class="form-label">vga</label>
                <input required type="number" name="vga" id="vga" placeholder="vga" class="form-control">
            </div>

            <div class="mb-3">
                <label for="pass_core" class="form-label">Pass core</label>
                <input required type="number" name="pass_core" id="pass_core" placeholder="Pass core" class="form-control">
            </div>

            <div class="mb-3">
                <label for="bateria" class="form-label">Bateria</label>
                <input required type="text" name="bateria" id="bateria" placeholder="Bateria" class="form-control">
            </div>

            <div class="mb-3">
                <label for="carga_electrica" class="form-label">Carga electrica</label>
                <input required type="text" name="carga_electrica" id="carga_electrica" placeholder="Carga electrica" class="form-control">
            </div>

            <div class="mb-3">
                <label for="cargador" class="form-label">Cargador</label>
                <input required type="text" name="cargador" id="cargador" placeholder="cargador" class="form-control">
            </div>

            <div class="mb-3">
                <label for="voltaje" class="form-label">Voltaje</label>
                <input required type="text" name="voltaje" id="voltaje" placeholder="Voltaje" class="form-control">
            </div>

            <div class="mb-3">
                <label for="salida_plug" class="form-label">Salida plug</label>
                <input required type="text" name="salida_plug" id="salida_plug" placeholder="Salida plug" class="form-control">
            </div>

            <div class="mb-3">
                <label for="os" class="form-label">Sistema operativo</label>
                <input required type="text" name="os" id="os" placeholder="Sistema operativo" class="form-control">
            </div>

            <div class="mb-3">
                <label for="bit" class="form-label">Bit</label>
                <input required type="number" name="bit" id="bit" placeholder="64/32" class="form-control">
            </div>

            <div class="mb-3">
                <label for="licencia" class="form-label">Licencia</label>
                <input required type="text" name="licencia" id="licencia" placeholder="Licencia" class="form-control">
            </div>

            <div class="mb-3 d-flex justify-content-around align-items-center">
                <button class="btn btn-primary text-white" type="submit" onclick="change()">Guardar</button>
                <a href="../../pages/equipos/equipos.php" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
        crossorigin="anonymous"></script>
    
    <script src="../../scripts/modoOscuro.js"></script>
    <script src="../../scripts//popOvers.js"></script>

</body>

</html>