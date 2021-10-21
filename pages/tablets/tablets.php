<?php 
    require_once('../connection/connection.php');
    require_once('../tables/tables.php');
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Tablets</title>
</head>

<body id="body">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Equipos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex">
                    <button class="btn btn-outline-dark" id="btn-oscuro" onclick="onModoOscuro()"><i class="fas fa-sun"></i></button>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid d-flex flex-column align-items-center mt-3">
        <a href="./create.php" class="btn btn-outline-primary p-3">Crear un registro nuevo <i class='fas fa-plus' ></i></a>

        <div class="tabla">
            <table id="equipos" class="table table-bordered table-striped text-center mt-4">
                <thead>
                    <tr class="bg-primary text-white">
                        <th scope="col">Acciones</th>
                        <th scope="col">ID</th>
                        <th scope="col">Sucursal</th>
                        <th scope="col">Area</th>
                        <th scope="col">Funcionario Responsable</th>
                        <th scope="col">Nombre Equipo</th>
                        <th scope="col">Lugar de trabajo</th>
                        <th scope="col">Novedades</th>
                        <th scope="col">Tipo de equipo</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Serial</th>
                        <th scope="col">Fecha de fabricacion</th>
                        <th scope="col">Procesador</th>
                        <th scope="col">Generacion procesador</th>
                        <th scope="col">Nucleos</th>
                        <th scope="col">Velocidad en mz</th>
                        <th scope="col">RAM en GB</th>
                        <th scope="col">Tipo de RAM</th>
                        <th scope="col">Adaptador multimedia</th>
                        <th scope="col">Adaptador video</th>
                        <th scope="col">Marca del disco duro</th>
                        <th scope="col">Capacidad del disco</th>
                        <th scope="col">Tipo de disco</th>
                        <th scope="col">Red ethernet</th>
                        <th scope="col">IP</th>
                        <th scope="col">MAC ethernet</th>
                        <th scope="col">Red wifi</th>
                        <th scope="col">MAC</th>
                        <th scope="col">Marca del monitor</th>
                        <th scope="col">Tipo monitor</th>
                        <th scope="col">Serial monitor</th>
                        <th scope="col">Modelo monitor</th>
                        <th scope="col">Pulgadas monitor</th>
                        <th scope="col">Cables de poder</th>
                        <th scope="col">vga</th>
                        <th scope="col">Pass core</th>
                        <th scope="col">Bateria</th>
                        <th scope="col">Carga electrica</th>
                        <th scope="col">Voltaje</th>
                        <th scope="col">Salida plug</th>
                        <th scope="col">Sistema operativo</th>
                        <th scope="col">Bits</th>
                        <th scope="col">Licencia</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if($result ->num_rows>0){
                            while($row = $result ->fetch_assoc()){ 
                    ?>
                    <tr>
                        <td>
                            <a href="../pages/edid.php/?id=<?php echo $row['id']?>" class="btn btn-outline-info"><i class="fas fa-edit"></i></a>
                            <a  onclick="confirmar('<?php echo $row['id']?>')" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>
                        </td>
                        <td><?php echo $row['id']  ?></td>
                        <td><?php echo $row['sucursal'] ?></td>
                        <td><?php echo $row['area'] ?></td>
                        <td><?php echo $row['funcionario_responsable']?></td>
                        <td><?php echo $row['nombre_equipo']?></td>
                        <td><?php echo $row['lugar_de_trabajo']?></td>
                        <td><?php echo $row['novedades']?></td>
                        <td><?php echo $row['tipo_equipo']?></td>
                        <td><?php echo $row['marca'];  ?></td>
                        <td><?php echo $row["modelo"]  ?></td>
                        <td><?php echo $row['serial']?></td>
                        <td><?php echo $row['fecha_fabricacion']?></td>
                        <td><?php echo $row['procesador']?></td>
                        <td><?php echo $row['generacion_procesador']?></td>
                        <td><?php echo $row['nucleos']?></td>
                        <td><?php echo $row['velocidad_mz']?></td>
                        <td><?php echo $row['ram_gb']?></td>
                        <td><?php echo $row['tipo_memoria']?></td>
                        <td><?php echo $row['adaptador_multimedia']?></td>
                        <td><?php echo $row['adaptador_video']?></td>
                        <td><?php echo $row['marca_disco_duro']?></td>
                        <td><?php echo $row['capacidad_disco']?></td>
                        <td><?php echo $row['tipo_disco']?></td>
                        <td><?php echo $row['red_ethernet']?></td>
                        <td><?php echo $row['ip']?></td>
                        <td><?php echo $row['mac_ethernet']?></td>
                        <td><?php echo $row['red_wifi']?></td>
                        <td><?php echo $row['mac']?></td>
                        <td><?php echo $row['marca_monitor']?></td>
                        <td><?php echo $row['tipo_monitor']?></td>
                        <td><?php echo $row['serial_monitor']?></td>
                        <td><?php echo $row['modelo_monitor']?></td>
                        <td><?php echo $row['pulgadas']?></td>
                        <td><?php echo $row['cables_poder']?></td>
                        <td><?php echo $row['vga']?></td>
                        <td><?php echo $row['pass_core']?></td>
                        <td><?php echo $row['bateria']?></td>
                        <td><?php echo $row['carga_electrica']?> mAh</td>
                        <td><?php echo $row['voltaje']?></td>
                        <td><?php echo $row['salida_plug']?></td>
                        <td><?php echo $row['os']?></td>
                        <td><?php echo $row['bit']?>bits</td>
                        <td><?php echo $row['licencia']?></td>
                        
                    </tr>
                    <?php }} ?>
                </tbody>
            </table>
        </div>
        
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#equipos').DataTable({
                pageLength:5,
                lengthMenu:[[5,10,20,-1],[5,10,20,'Todos']]
            });
        } );
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../scripts/modoOscuro.js"></script>
    <script src="../scripts/popOvers.js"></script>
</body>

</html>